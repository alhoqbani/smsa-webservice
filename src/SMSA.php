<?php

namespace Alhoqbani\SMSAWebService;

use Alhoqbani\SMSAWebService\Exceptions\FailedResponse;
use Alhoqbani\SMSAWebService\Exceptions\RequestError;
use Alhoqbani\SMSAWebService\Soap\ClassMap;
use Alhoqbani\SMSAWebService\Soap\Service;
use Alhoqbani\SMSAWebService\Soap\Type\AddShipment;
use Alhoqbani\SMSAWebService\Soap\Type\CancelShipment;
use Alhoqbani\SMSAWebService\Soap\Type\GetAllRetails;
use Alhoqbani\SMSAWebService\Soap\Type\GetPDF;
use Alhoqbani\SMSAWebService\Soap\Type\GetRTLCities;
use Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetails;
use Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdates;
use Alhoqbani\SMSAWebService\Soap\Type\GetStatus;
use Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRef;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class SMSA
{

    /**
     * @var \Alhoqbani\SMSAWebService\Soap\Service
     */
    protected $service;

    /**
     * @var string
     */
    private $passKey;

    /**
     * Create a new SMSA Instance
     *
     * @param string $passKey
     */
    public function __construct(string $passKey = 'Testing0')
    {
        $this->passKey = $passKey;

        $options = array(
            AbstractSoapClientBase::WSDL_URL => 'http://track.smsaexpress.com/SECOM/SMSAwebService.asmx?WSDL',
            AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
        );

        $this->service = new Service($options);
    }
    
    /**
     * Fetch all cities that has SMSAExpress locations
     *
     * @return array array of cities with their route code.
     * @throws \Alhoqbani\SMSAWebService\Exceptions\RequestError
     */
    public function cities(): array
    {
        $response = $this->service->getRTLCities(new GetRTLCities($this->passKey));
        
        if (false === $response) {
            $this->throwRequestError();
            return [];
        }
        
        return $this->parseCityResult($response->getGetRTLCitiesResult()->getAny());
    }
    
    /**
     * Fetch all retails in a particular city.
     * The city code is the three letters route code
     * For example: RUH, JED
     *
     * @param $cityCode
     *
     * @return array
     * @throws \Alhoqbani\SMSAWebService\Exceptions\RequestError
     */
    public function retailsIn($cityCode): array
    {
        $response = $this->service->getRTLRetails( new GetRTLRetails($cityCode, $this->passKey));
        
        if (false === $response) {
            $this->throwRequestError();
            
            return [];
        }
        
        return $this->parseRetailsResult( $response->getGetRTLRetailsResult()->getAny());
    }
    
    /**
     * Fetch all SMSA Express retails
     *
     * @return array list of all retails with details
     *
     * @throws \Alhoqbani\SMSAWebService\Exceptions\RequestError
     */
    public function retails(): array
    {
        $response = $this->service->getAllRetails( new GetAllRetails($this->passKey));
        
        if (false === $response) {
            $this->throwRequestError();
        
            return [];
        }
    
        return $this->parseRetailsResult($response->getGetAllRetailsResult()->getAny());
    }
    
    /**
     * Track a shipment by its awb
     *
     * @param $awb
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResponse|array|bool
     * @throws \Alhoqbani\SMSAWebService\Exceptions\RequestError
     * @throws \Alhoqbani\SMSAWebService\Exceptions\FailedResponse
     */
    public function track($awb): array
    {
        $response = $this->service->getTrackingwithRef(new GetTrackingwithRef($awb, $this->passKey));
    
        if (false === $response) {
            $this->throwRequestError();
        
            return [];
        }
        
        $result = $response->getGetTrackingwithRefResult();
        
        if (is_null($result)) {
            throw new FailedResponse("The awb provided is not correct.");
        }
        
        $track = $this->parseTrackResult($response->getGetTrackingwithRefResult()->getAny());
    
        if (empty( $track)) {
            throw new FailedResponse("No shipment with provided awb.");
        }
        
        return $track;
    }
    
    /**
     * @param $awb
     *
     * @return string
     * @throws \Alhoqbani\SMSAWebService\Exceptions\RequestError
     * @throws \Alhoqbani\SMSAWebService\Exceptions\FailedResponse
     */
    public function status($awb): string
    {
        $response = $this->service->getStatus( new GetStatus($awb, $this->passKey));
    
        if (false === $response) {
            $this->throwRequestError();
        }
        
        $status = $response->getGetStatusResult();
        
        if (empty($status) || is_null($status)) {
            throw new FailedResponse("No status, shipment was not found");
        }
        
        return $status;
    }
    
    public function cancel($awb, $reason)
    {
        $cancelShipment = new CancelShipment($awb, $this->passKey, $reason);
        
        $response = $this->service->cancelShipment($cancelShipment);
        
        return $response;
    }
    
    /**
     * Add Shipment without Shipper and delivery details
     * This method can be used to upload the shipment information to SMSA Server.
     *
     * @param array $params
     *
     * @return array|string Shipment awb number or array of errors.
     * @throws \Alhoqbani\SMSAWebService\Exceptions\RequestError
     * @throws \Alhoqbani\SMSAWebService\FailedResponse
     * @throws \Alhoqbani\SMSAWebService\Exceptions\FailedResponse
     */
    public function addShipment(array $params)
    {
        $addShipment = (new AddShipment())

            // Mandatory fields
        ->setPassKey($params['passKey'] ?? $this->passKey ?? 'Testing0')
        ->setRefNo($params['refNo'] ?? (string) time())
        ->setPCs($params['pCs'] ?? 0)
        ->setShipType($params['shipType'] ?? 'DLV')
        ->setWeight($params['weight'] ?? '0') // Must be intval
        ->setCName($params['cName'] ?? 'Customer JEDDAH')

            // Customer Details
        ->setCntry($params['cntry'] ?? 'SA') // Required
        ->setCCity($params['cCity'] ?? 'JEDDAH') // Required
        ->setCMobile($params['cMobile'] ?? '0500500500') // Required
        ->setCAddr1($params['cAddr1'] ?? 'Street Address') // Required

        ->setCZip($params['cZip'] ?? '')
        ->setCPOBox($params['cPOBox'] ?? '')
        ->setCTel1($params['cTel1'] ?? '')
        ->setCTel2($params['cTel2'] ?? '')
        ->setCAddr2($params['cAddr2'] ?? '')
        ->setCEmail($params['cEmail'] ?? '')

            // Optional
        ->setSentDate($params['sentDate'] ?? '')
        ->setIdNo($params['idNo'] ?? '')
        ->setCarrValue($params['carrValue'] ?? '')
        ->setCarrCurr($params['carrCurr'] ?? '')
        ->setCodAmt($params['codAmt'] ?? '')
        ->setCustVal($params['custVal'] ?? '')
        ->setCustCurr($params['custCurr'] ?? '')
        ->setInsrAmt($params['insrAmt'] ?? '')
        ->setInsrCurr($params['insrCurr'] ?? '')
        ->setItemDesc($params['itemDesc'] ?? '');

        $result = $this->service->addShipment($addShipment);

        if (false === $result) {
            throw new RequestError($this->service->getLastError());
        }

        $result = $result->getAddShipmentResult();

        if (strpos(mb_strtolower($result), 'failed') === 0) {
            throw new FailedResponse($result);
        }

        return $result;
    }

    /**
     * Get AWB in PDF for printing
     * This method can be used to get the AWB Copy in PDF format for printing and labeling on shipment.
     *
     * @param $passKey
     * @param $awb
     *
     * @return array|null|string
     */
    function awbPDF($awb, $passKey = null)
    {
        $getPdf = new GetPDF($awb, $passKey ?? $this->passKey);

        $pdf = $this->service->getPDF($getPdf);

        var_dump($pdf);

        if ($pdf) {
            echo 'pdf is true';
            return $pdf->getGetPDFResult();
        }

        return $this->service->getLastError();
    }
    
    /**
     * To handle response error from SMSA Soap server
     *
     * @throws \Alhoqbani\SMSAWebService\Exceptions\RequestError
     */
    protected function throwRequestError(): void {
        $errors    = $this->service->getLastError();
        $soapFault = array_shift( $errors );
        
        if ( $soapFault instanceof \SoapFault ) {
            throw new RequestError($soapFault->faultstring);
        }
        
        throw new RequestError("SMSA request failed with unknown error");
    }
    
    /**
     * Parse the cities xml response into array
     * @param string $citiesResult
     *
     * @return array Array of cities with its names and route code
     */
    private function parseCityResult(string $citiesResult): array
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
            $track =  $xml->NewDataSet[0]->Tracking;
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
}
