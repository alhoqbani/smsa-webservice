<?php

namespace Alhoqbani\SMSAWebService;

use Alhoqbani\SMSAWebService\Soap\ClassMap;
use Alhoqbani\SMSAWebService\Soap\Service;
use Alhoqbani\SMSAWebService\Soap\Type\AddShipment;
use Alhoqbani\SMSAWebService\Soap\Type\GetPDF;
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
     * Add Shipment without Shipper and delivery details
     * This method can be used to upload the shipment information to SMSA Server.
     *
     * @param array $params
     *
     * @return array|string Shipment awb number or array of errors.
     * @throws \Alhoqbani\SMSAWebService\ResponseError
     * @throws \Alhoqbani\SMSAWebService\FailedResponse
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
            throw new ResponseError($this->service->getLastError());
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

}
