<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService\Soap;

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
     * - documentation: Create Shipment and get Smsa AWB Number
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\AddShipment $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\AddShipmentResponse|bool
     */
    public function addShipment(\Alhoqbani\SmsaWebService\Soap\Type\AddShipment $parameters)
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
     * - documentation: Create Shipment with Shipper Details and get Smsa AWB Number
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\AddShip $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\AddShipResponse|bool
     */
    public function addShip(\Alhoqbani\SmsaWebService\Soap\Type\AddShip $parameters)
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
     * - documentation: Create Shipment with Shipper Details and get Smsa AWB Number for Multi piece Shipments
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\AddShipMPS $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\AddShipMPSResponse|bool
     */
    public function addShipMPS(\Alhoqbani\SmsaWebService\Soap\Type\AddShipMPS $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\StoShipment $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\StoShipmentResponse|bool
     */
    public function stoShipment(\Alhoqbani\SmsaWebService\Soap\Type\StoShipment $parameters)
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
     * - documentation: Create Shipment with Delivery Details and get Smsa AWB Number
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\AddShipmentDelv $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\AddShipmentDelvResponse|bool
     */
    public function addShipmentDelv(\Alhoqbani\SmsaWebService\Soap\Type\AddShipmentDelv $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetTracking $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingResponse|bool
     */
    public function getTracking(\Alhoqbani\SmsaWebService\Soap\Type\GetTracking $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingwithRef $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingwithRefResponse|bool
     */
    public function getTrackingwithRef(\Alhoqbani\SmsaWebService\Soap\Type\GetTrackingwithRef $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetStatus $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetStatusResponse|bool
     */
    public function getStatus(\Alhoqbani\SmsaWebService\Soap\Type\GetStatus $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\SaphOrderReady $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\SaphOrderReadyResponse|bool
     */
    public function saphOrderReady(\Alhoqbani\SmsaWebService\Soap\Type\SaphOrderReady $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetStatusByRef $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetStatusByRefResponse|bool
     */
    public function getStatusByRef(\Alhoqbani\SmsaWebService\Soap\Type\GetStatusByRef $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingByRef $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingByRefResponse|bool
     */
    public function getTrackingByRef(\Alhoqbani\SmsaWebService\Soap\Type\GetTrackingByRef $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetShipUpdates $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetShipUpdatesResponse|bool
     */
    public function getShipUpdates(\Alhoqbani\SmsaWebService\Soap\Type\GetShipUpdates $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\CancelShipment $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\CancelShipmentResponse|bool
     */
    public function cancelShipment(\Alhoqbani\SmsaWebService\Soap\Type\CancelShipment $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetRTLCities $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetRTLCitiesResponse|bool
     */
    public function getRTLCities(\Alhoqbani\SmsaWebService\Soap\Type\GetRTLCities $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetRTLRetails $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetRTLRetailsResponse|bool
     */
    public function getRTLRetails(\Alhoqbani\SmsaWebService\Soap\Type\GetRTLRetails $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetAllRetails $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetAllRetailsResponse|bool
     */
    public function getAllRetails(\Alhoqbani\SmsaWebService\Soap\Type\GetAllRetails $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetPDF $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetPDFResponse|bool
     */
    public function getPDF(\Alhoqbani\SmsaWebService\Soap\Type\GetPDF $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetPDFSino $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetPDFSinoResponse|bool
     */
    public function getPDFSino(\Alhoqbani\SmsaWebService\Soap\Type\GetPDFSino $parameters)
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
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetPDFBr $parameters
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetPDFBrResponse|bool
     */
    public function getPDFBr(\Alhoqbani\SmsaWebService\Soap\Type\GetPDFBr $parameters)
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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\AddShipmentDelvResponse|\Alhoqbani\SmsaWebService\Soap\Type\AddShipmentResponse|\Alhoqbani\SmsaWebService\Soap\Type\AddShipMPSResponse|\Alhoqbani\SmsaWebService\Soap\Type\AddShipResponse|\Alhoqbani\SmsaWebService\Soap\Type\CancelShipmentResponse|\Alhoqbani\SmsaWebService\Soap\Type\GetAllRetailsResponse|\Alhoqbani\SmsaWebService\Soap\Type\GetPDFBrResponse|\Alhoqbani\SmsaWebService\Soap\Type\GetPDFResponse|\Alhoqbani\SmsaWebService\Soap\Type\GetPDFSinoResponse|\Alhoqbani\SmsaWebService\Soap\Type\GetRTLCitiesResponse|\Alhoqbani\SmsaWebService\Soap\Type\GetRTLRetailsResponse|\Alhoqbani\SmsaWebService\Soap\Type\GetShipUpdatesResponse|\Alhoqbani\SmsaWebService\Soap\Type\GetStatusByRefResponse|\Alhoqbani\SmsaWebService\Soap\Type\GetStatusResponse|\Alhoqbani\SmsaWebService\Soap\Type\GetTrackingByRefResponse|\Alhoqbani\SmsaWebService\Soap\Type\GetTrackingResponse|\Alhoqbani\SmsaWebService\Soap\Type\GetTrackingwithRefResponse|\Alhoqbani\SmsaWebService\Soap\Type\SaphOrderReadyResponse|\Alhoqbani\SmsaWebService\Soap\Type\StoShipmentResponse
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
