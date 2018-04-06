<?php

namespace Alhoqbani\SMSAWebService\Soap;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'addShipment' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\AddShipment',
            'addShipmentResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\AddShipmentResponse',
            'addShip' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\AddShip',
            'addShipResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\AddShipResponse',
            'addShipMPS' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\AddShipMPS',
            'addShipMPSResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\AddShipMPSResponse',
            'stoShipment' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\StoShipment',
            'stoShipmentResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\StoShipmentResponse',
            'addShipmentDelv' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\AddShipmentDelv',
            'addShipmentDelvResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\AddShipmentDelvResponse',
            'getTracking' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetTracking',
            'getTrackingResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetTrackingResponse',
            'getTrackingResult' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetTrackingResult',
            'getTrackingwithRef' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetTrackingwithRef',
            'getTrackingwithRefResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetTrackingwithRefResponse',
            'getTrackingwithRefResult' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetTrackingwithRefResult',
            'getStatus' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetStatus',
            'getStatusResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetStatusResponse',
            'saphOrderReady' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\SaphOrderReady',
            'ArrayOfOrderLineItem' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\ArrayOfOrderLineItem',
            'OrderLineItem' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\OrderLineItem',
            'saphOrderReadyResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\SaphOrderReadyResponse',
            'getStatusByRef' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetStatusByRef',
            'getStatusByRefResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetStatusByRefResponse',
            'getTrackingByRef' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetTrackingByRef',
            'getTrackingByRefResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetTrackingByRefResponse',
            'getTrackingByRefResult' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetTrackingByRefResult',
            'getShipUpdates' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetShipUpdates',
            'getShipUpdatesResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetShipUpdatesResponse',
            'getShipUpdatesResult' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetShipUpdatesResult',
            'cancelShipment' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\CancelShipment',
            'cancelShipmentResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\CancelShipmentResponse',
            'getRTLCities' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetRTLCities',
            'getRTLCitiesResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetRTLCitiesResponse',
            'getRTLCitiesResult' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetRTLCitiesResult',
            'getRTLRetails' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetRTLRetails',
            'getRTLRetailsResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetRTLRetailsResponse',
            'getRTLRetailsResult' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetRTLRetailsResult',
            'getAllRetails' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetAllRetails',
            'getAllRetailsResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetAllRetailsResponse',
            'getAllRetailsResult' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetAllRetailsResult',
            'getPDF' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetPDF',
            'getPDFResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetPDFResponse',
            'getPDFSino' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetPDFSino',
            'getPDFSinoResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetPDFSinoResponse',
            'getPDFBr' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetPDFBr',
            'getPDFBrResponse' => '\\Alhoqbani\\SMSAWebService\\Soap\\Type\\GetPDFBrResponse',
        );
    }
}
