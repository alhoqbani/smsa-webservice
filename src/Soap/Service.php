<?php

/*
 * This file is part of SMSA WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SMSAWebService\Soap;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named addShipment
     * Meta informations extracted from the WSDL
     * - documentation: Create Shipment and get SMSA AWB Number
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\AddShipment $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentResponse|bool
     */
    public function addShipment(\Alhoqbani\SMSAWebService\Soap\Type\AddShipment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addShipment($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named addShip
     * Meta informations extracted from the WSDL
     * - documentation: Create Shipment with Shipper Details and get SMSA AWB Number
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\AddShip $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipResponse|bool
     */
    public function addShip(\Alhoqbani\SMSAWebService\Soap\Type\AddShip $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addShip($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named addShipMPS
     * Meta informations extracted from the WSDL
     * - documentation: Create Shipment with Shipper Details and get SMSA AWB Number for Multi piece Shipments
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\AddShipMPS $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipMPSResponse|bool
     */
    public function addShipMPS(\Alhoqbani\SMSAWebService\Soap\Type\AddShipMPS $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addShipMPS($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named stoShipment
     * Meta informations extracted from the WSDL
     * - documentation: Ship to Origin after Delivery
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\StoShipment $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\StoShipmentResponse|bool
     */
    public function stoShipment(\Alhoqbani\SMSAWebService\Soap\Type\StoShipment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->stoShipment($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named addShipmentDelv
     * Meta informations extracted from the WSDL
     * - documentation: Create Shipment with Delivery Details and get SMSA AWB Number
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelvResponse|bool
     */
    public function addShipmentDelv(\Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->addShipmentDelv($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getTracking
     * Meta informations extracted from the WSDL
     * - documentation: Get Tracking of Shipment by Air waybill Number
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetTracking $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingResponse|bool
     */
    public function getTracking(\Alhoqbani\SMSAWebService\Soap\Type\GetTracking $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getTracking($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getTrackingwithRef
     * Meta informations extracted from the WSDL
     * - documentation: Get Tracking of Shipment with Reference Number by Air waybill Number
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRef $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResponse|bool
     */
    public function getTrackingwithRef(\Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRef $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getTrackingwithRef($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getStatus
     * Meta informations extracted from the WSDL
     * - documentation: Get current Status of Shipment by Air waybill Number
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetStatus $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetStatusResponse|bool
     */
    public function getStatus(\Alhoqbani\SMSAWebService\Soap\Type\GetStatus $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getStatus($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named saphOrderReady
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\SaphOrderReady $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\SaphOrderReadyResponse|bool
     */
    public function saphOrderReady(\Alhoqbani\SMSAWebService\Soap\Type\SaphOrderReady $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->saphOrderReady($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getStatusByRef
     * Meta informations extracted from the WSDL
     * - documentation: Get Status of Shipment by Customer Reference Number
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetStatusByRef $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetStatusByRefResponse|bool
     */
    public function getStatusByRef(\Alhoqbani\SMSAWebService\Soap\Type\GetStatusByRef $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getStatusByRef($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getTrackingByRef
     * Meta informations extracted from the WSDL
     * - documentation: Get Tracking of Shipment by Air waybill Number
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingByRef $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingByRefResponse|bool
     */
    public function getTrackingByRef(\Alhoqbani\SMSAWebService\Soap\Type\GetTrackingByRef $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getTrackingByRef($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getShipUpdates
     * Meta informations extracted from the WSDL
     * - documentation: Get All the Shipment Updates for the customer shipments
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdates $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdatesResponse|bool
     */
    public function getShipUpdates(\Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdates $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getShipUpdates($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named cancelShipment
     * Meta informations extracted from the WSDL
     * - documentation: Cancel a Shipment by Air waybill Number
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\CancelShipment $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\CancelShipmentResponse|bool
     */
    public function cancelShipment(\Alhoqbani\SMSAWebService\Soap\Type\CancelShipment $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->cancelShipment($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getRTLCities
     * Meta informations extracted from the WSDL
     * - documentation: Get List of Cities for Retails list
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetRTLCities $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetRTLCitiesResponse|bool
     */
    public function getRTLCities(\Alhoqbani\SMSAWebService\Soap\Type\GetRTLCities $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getRTLCities($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getRTLRetails
     * Meta informations extracted from the WSDL
     * - documentation: Get Retails list by each city
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetails $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetailsResponse|bool
     */
    public function getRTLRetails(\Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getRTLRetails($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAllRetails
     * Meta informations extracted from the WSDL
     * - documentation: Get Retails list by each city
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetAllRetails $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetAllRetailsResponse|bool
     */
    public function getAllRetails(\Alhoqbani\SMSAWebService\Soap\Type\GetAllRetails $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getAllRetails($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPDF
     * Meta informations extracted from the WSDL
     * - documentation: Get AWB Print in PDF
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetPDF $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetPDFResponse|bool
     */
    public function getPDF(\Alhoqbani\SMSAWebService\Soap\Type\GetPDF $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getPDF($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPDFSino
     * Meta informations extracted from the WSDL
     * - documentation: Get AWB Print in PDF
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetPDFSino $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetPDFSinoResponse|bool
     */
    public function getPDFSino(\Alhoqbani\SMSAWebService\Soap\Type\GetPDFSino $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getPDFSino($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPDFBr
     * Meta informations extracted from the WSDL
     * - documentation: Get AWB Print in PDF
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetPDFBr $parameters
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetPDFBrResponse|bool
     */
    public function getPDFBr(\Alhoqbani\SMSAWebService\Soap\Type\GetPDFBr $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->getPDFBr($parameters));

            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelvResponse|\Alhoqbani\SMSAWebService\Soap\Type\AddShipmentResponse|\Alhoqbani\SMSAWebService\Soap\Type\AddShipMPSResponse|\Alhoqbani\SMSAWebService\Soap\Type\AddShipResponse|\Alhoqbani\SMSAWebService\Soap\Type\CancelShipmentResponse|\Alhoqbani\SMSAWebService\Soap\Type\GetAllRetailsResponse|\Alhoqbani\SMSAWebService\Soap\Type\GetPDFBrResponse|\Alhoqbani\SMSAWebService\Soap\Type\GetPDFResponse|\Alhoqbani\SMSAWebService\Soap\Type\GetPDFSinoResponse|\Alhoqbani\SMSAWebService\Soap\Type\GetRTLCitiesResponse|\Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetailsResponse|\Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdatesResponse|\Alhoqbani\SMSAWebService\Soap\Type\GetStatusByRefResponse|\Alhoqbani\SMSAWebService\Soap\Type\GetStatusResponse|\Alhoqbani\SMSAWebService\Soap\Type\GetTrackingByRefResponse|\Alhoqbani\SMSAWebService\Soap\Type\GetTrackingResponse|\Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResponse|\Alhoqbani\SMSAWebService\Soap\Type\SaphOrderReadyResponse|\Alhoqbani\SMSAWebService\Soap\Type\StoShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }

    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
