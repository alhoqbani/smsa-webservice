<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService;

use Alhoqbani\SmsaWebService\Exceptions\FailedResponse;
use Alhoqbani\SmsaWebService\Exceptions\RequestError;
use Alhoqbani\SmsaWebService\Models\Shipment;
use Alhoqbani\SmsaWebService\Response\SMSAResponse;
use Alhoqbani\SmsaWebService\Soap\ClassMap;
use Alhoqbani\SmsaWebService\Soap\Service;
use Alhoqbani\SmsaWebService\Soap\Type\CancelShipment;
use Alhoqbani\SmsaWebService\Soap\Type\GetAllRetails;
use Alhoqbani\SmsaWebService\Soap\Type\GetPDF;
use Alhoqbani\SmsaWebService\Soap\Type\GetRTLCities;
use Alhoqbani\SmsaWebService\Soap\Type\GetRTLRetails;
use Alhoqbani\SmsaWebService\Soap\Type\GetStatus;
use Alhoqbani\SmsaWebService\Soap\Type\GetTrackingByRef;
use Alhoqbani\SmsaWebService\Soap\Type\GetTrackingwithRef;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use WsdlToPhp\PackageBase\AbstractStructBase;

class Smsa
{

    /**
     * Weather to throw exceptions when there is a request error or a failed response from SMSA.
     *
     * @var bool
     */
    public $shouldUseExceptions = true;

    /**
     * @var \Alhoqbani\SmsaWebService\Soap\Service
     */
    protected $service;

    /**
     * @var string
     */
    private $passKey;

    /**
     * Create a new Smsa Instance
     *
     * @param string                 $passKey The pass key to the api provided by Smsa.
     * @param array|null             $options WSDL option to be passed to SoapClient.
     * @param AbstractSoapClientBase $service The service which provide SMSA api methods.
     */
    public function __construct(
        string $passKey = 'Testing0',
        array $options = [],
        AbstractSoapClientBase $service = null
    ) {
        $this->passKey = $passKey;

        $options = array_merge([
            AbstractSoapClientBase::WSDL_URL      => 'http://track.smsaexpress.com/SECOM/SMSAwebService.asmx?WSDL',
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
        ], $options);

        $this->service = $service ?? new Service($options);
    }

    /**
     * Fetch all cities that has SMSAExpress locations
     *
     * @throws RequestError
     *
     * @return SMSAResponse with array of cities with their route code.
     */
    public function cities(): SMSAResponse
    {
        $result = $this->service->getRTLCities(
            $payload = new GetRTLCities($this->passKey)
        );

        if (false === $result) {
            return $this->failedRequest('getRTLCities', $payload);
        }

        return $this->successResponse(
            'getRTLCities',
            $payload,
            $this->parseCityResult($result->getGetRTLCitiesResult()->getAny())
        );
    }

    /**
     * Fetch all retails in a particular city.
     * The city code is the three letters route code
     * For example: RUH, JED
     *
     * @param $cityCode
     *
     * @throws RequestError
     *
     * @return SMSAResponse with array of retails in given city.
     */
    public function retailsIn($cityCode): SMSAResponse
    {
        $result = $this->service->getRTLRetails(
            $payload = new GetRTLRetails($cityCode, $this->passKey)
        );

        if (false === $result) {
            return $this->failedRequest('getRTLCities', $payload);
        }

        return $this->successResponse(
            'getRTLCities',
            $payload,
            $this->parseRetailsResult($result->getGetRTLRetailsResult()->getAny())
        );
    }

    /**
     * Fetch all Smsa Express retails
     *
     * @throws RequestError
     *
     * @return SMSAResponse with list of all retails with details
     */
    public function retails(): SMSAResponse
    {
        $result = $this->service->getAllRetails(
            $payload = new GetAllRetails($this->passKey)
        );

        if (false === $result) {
            return $this->failedRequest('getAllRetails', $payload);
        }

        return $this->successResponse(
            'getAllRetails',
            $payload,
            $this->parseRetailsResult($result->getGetAllRetailsResult()->getAny())
        );
    }

    /**
     * Track a shipment by its awb
     *
     * @param $awb
     *
     * @throws \Alhoqbani\SmsaWebService\Exceptions\RequestError
     * @throws \Alhoqbani\SmsaWebService\Exceptions\FailedResponse
     *
     * @return SMSAResponse
     */
    public function track($awb): SMSAResponse
    {
        $result = $this->service->getTrackingwithRef(
            $payload = new GetTrackingwithRef($awb, $this->passKey)
        );

        if (false === $result) {
            return $this->failedRequest('GetTrackingwithRef', $payload);
        }

        $result = $result->getGetTrackingwithRefResult();

        if (is_null($result)) {
            return $this->failedResponse('GetTrackingwithRef', $payload, 'The awb provided is not correct.');
        }

        $track = $this->parseTrackResult($result->getAny());

        if (empty($track)) {
            return $this->failedResponse('GetTrackingwithRef', $payload, 'No shipment with provided awb.');
        }

        return $this->successResponse(
            'GetTrackingwithRef',
            $payload,
            $track
        );
    }

    /**
     * Get the real-time tracking information of the shipment
     *
     * @param string $reference Customer reference number
     *
     * @todo This is not working
     *
     * @throws FailedResponse
     * @throws RequestError
     *
     * @return SMSAResponse
     */
    public function trackByReference(string $reference)
    {
        $result = $this->service->getTrackingByRef(
            $payload = new GetTrackingByRef($reference, $this->passKey)
        );

        if (false === $result) {
            return $this->failedRequest('GetTrackingwithRef', $payload);
        }

        $data = $result->getGetTrackingByRefResult();

        if (is_null($data)) {
            return $this->failedResponse('GetTrackingwithRef', $payload, 'Shipment was not found');
        }

        return $this->successResponse(
            'GetTrackingwithRef',
            $payload,
            $data->getAny()
        );
    }

    /**
     * @param $awb
     *
     * @throws FailedResponse
     * @throws RequestError
     *
     * @return SMSAResponse
     */
    public function status($awb): SMSAResponse
    {
        $result = $this->service->getStatus(
            $payload = new GetStatus($awb, $this->passKey)
        );

        if (false === $result) {
            return $this->failedRequest('GetStatus', $payload);
        }

        $status = $result->getGetStatusResult();

        if (empty($status) || is_null($status)) {
            return $this->failedResponse('GetStatus', $payload, 'No status, shipment was not found');
        }

        if (0 === strpos(mb_strtolower($status), 'failed')) {
            return $this->failedResponse('CancelShipment', $payload, $status);
        }

        return $this->successResponse(
            'GetStatus',
            $payload,
            $status
        );
    }

    /**
     * Cancel a shipment by AWB
     *
     * @param $awb string
     * @param $reason string
     *
     * @throws FailedResponse
     * @throws RequestError
     *
     * @return SMSAResponse
     */
    public function cancel($awb, $reason): SMSAResponse
    {
        $result = $this->service->cancelShipment(
            $payload = new CancelShipment($awb, $this->passKey, $reason)
        );

        if (false === $result) {
            return $this->failedRequest('CancelShipment', $payload);
        }

        $data = $result->getCancelShipmentResult();

        if (0 === strpos(mb_strtolower($data), 'failed')) {
            return $this->failedResponse('CancelShipment', $payload, $data);
        }

        return $this->successResponse(
            'CancelShipment',
            $payload,
            $data
        );
    }

    /**
     * Create a new shipment
     *
     * @param Shipment $shipment
     *
     * @throws FailedResponse
     * @throws RequestError
     *
     * @return SMSAResponse
     */
    public function createShipment(Shipment $shipment): SMSAResponse
    {
        $payload = $shipment->getTypeObject($this->passKey);

        $method = $shipment->getServiceMethod();

        $result = call_user_func([$this->service, $method], $payload);

        if (false === $result) {
            return $this->failedRequest($method, $payload);
        }

        $data = $result->{"get{$method}Result"}();

        if (0 === strpos(mb_strtolower($data), 'failed')) {
            return $this->failedResponse($method, $payload, $data);
        }

        return $this->successResponse($method, $payload, $data);
    }

    /**
     * Get AWB in PDF for printing
     * This method can be used to get the AWB Copy in PDF format for printing and labeling on shipment.
     *
     * @param $awb string
     *
     * @throws RequestError
     *
     * @return SMSAResponse
     */
    public function awbPDF(string $awb): SMSAResponse
    {
        $result = $this->service->getPDF(
            $payload = new GetPDF($awb, $passKey ?? $this->passKey)
        );

        if (false === $result) {
            return $this->failedRequest('GetPDF', $payload);
        }

        $data = $result->getGetPDFResult();

        return $this->successResponse(
            'GetPDF',
            $payload,
            $data
        );
    }

    /**
     * Parse the cities xml response into array
     *
     * @param string $citiesResult
     *
     * @return array Array of cities with its names and route code
     */
    protected function parseCityResult(string $citiesResult): array
    {
        $xml = simplexml_load_string($citiesResult);
        $cities = [];

        foreach ($xml->NewDataSet[0]->RetailCities as $city) {
            $cities[] = [
                'name'      => (string) $city->rCity,
                'routeCode' => (string) $city->routCode,
            ];
        }

        return $cities;
    }

    /**
     * Parse retails xml response into an array
     *
     * @param string $retailsResult
     *
     * @return array array of retails with their details
     */
    private function parseRetailsResult(string $retailsResult): array
    {
        $xml = simplexml_load_string($retailsResult);
        $retails = [];

        if ($xml->count() > 0) {
            foreach ($xml->NewDataSet[0]->RetailsList as $retail) {
                $retails[] = [
                    'code'       => (string) $retail->rCode,
                    'route_code' => (string) $retail->routCode,
                    'city'       => (string) $retail->rCity,
                    'address_en' => (string) $retail->rAddrEng,
                    'address_ar' => (string) $retail->rAddrAr,
                    'gps_point'  => (string) $retail->rGPSPt,
                    'phone'      => (string) $retail->rPhone,
                ];
            }
        }

        return $retails;
    }

    /**
     * Parse a tracking xml response
     *
     * @param string $result
     *
     * @return array Details of the tracking
     */
    private function parseTrackResult(string $result): array
    {
        $xml = simplexml_load_string($result);

        if ($xml->count() > 0) {
            $track = $xml->NewDataSet[0]->Tracking;

            return [
                'awb'       => (string) $track->awbNo,
                'date'      => (string) $track->Date,
                'activity'  => (string) $track->Activity,
                'details'   => (string) $track->Details,
                'location'  => (string) $track->Location,
                'reference' => (string) $track->refNo,
            ];
        }

        return [];
    }

    /**
     * Return a successful response with the data.
     *
     * @param $type string The type/function of the SOAP Api used.
     * @param $payload AbstractStructBase The object that was sent to the SoapClient
     * @param $data mixed
     *
     * @return SMSAResponse
     */
    protected function successResponse($type, $payload, $data): SMSAResponse
    {
        $response = new SMSAResponse(
            true,
            $data,
            null,
            $type,
            $payload,
            $this->service->getLastRequest(true),
            $this->service->getLastResponse(true)
        );

        return $response;
    }

    /**
     * Send a Response with failed request.
     *
     * @param $type string The type/function of the SOAP Api used.
     * @param $payload AbstractStructBase The object that was sent to the SoapClient
     *
     * @throws \Alhoqbani\SmsaWebService\Exceptions\RequestError
     *
     * @return SMSAResponse
     */
    protected function failedRequest($type, $payload)
    {
        if ($this->shouldUseExceptions()) {
            $this->throwRequestError();
        }

        $errors = $this->service->getLastError();
        $error = array_shift($errors);

        return new SMSAResponse(
            false,
            null,
            $error,
            $type,
            $payload,
            $this->service->getLastRequest(true),
            $this->service->getLastResponse(true)
        );
    }

    /**
     * Return a failed response. (Usually, wrong data was sent to SMSA Api)
     *
     * @param $type string The type/function of the SOAP Api used
     * @param $payload AbstractStructBase The object that was sent to the SoapClient
     * @param $error string The error message from SMSA.
     *
     * @throws FailedResponse
     *
     * @return SMSAResponse
     */
    protected function failedResponse($type, $payload, $error)
    {
        if ($this->shouldUseExceptions()) {
            throw new FailedResponse($error);
        }

        return new SMSAResponse(
            false,
            null,
            $error,
            $type,
            $payload,
            $this->service->getLastRequest(true),
            $this->service->getLastResponse(true)
        );
    }

    protected function shouldUseExceptions()
    {
        return $this->shouldUseExceptions;
    }

    /**
     * To handle response error from Smsa Soap server
     *
     * @throws \Alhoqbani\SmsaWebService\Exceptions\RequestError
     */
    protected function throwRequestError(): void
    {
        $errors = $this->service->getLastError();
        $soapFault = array_shift($errors);

        if ($soapFault instanceof \SoapFault) {
            throw new RequestError($soapFault->faultstring, $soapFault->getCode(), $soapFault);
        }

        throw new RequestError('Smsa request failed with unknown error');
    }
}
