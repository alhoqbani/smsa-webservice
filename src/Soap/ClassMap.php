<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService\Soap;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     *
     * @return string[]
     */
    final public static function get()
    {
        return [
            'addShipment'                => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\AddShipment',
            'addShipmentResponse'        => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\AddShipmentResponse',
            'addShip'                    => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\AddShip',
            'addShipResponse'            => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\AddShipResponse',
            'addShipMPS'                 => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\AddShipMPS',
            'addShipMPSResponse'         => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\AddShipMPSResponse',
            'stoShipment'                => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\StoShipment',
            'stoShipmentResponse'        => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\StoShipmentResponse',
            'addShipmentDelv'            => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\AddShipmentDelv',
            'addShipmentDelvResponse'    => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\AddShipmentDelvResponse',
            'getTracking'                => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetTracking',
            'getTrackingResponse'        => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetTrackingResponse',
            'getTrackingResult'          => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetTrackingResult',
            'getTrackingwithRef'         => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetTrackingwithRef',
            'getTrackingwithRefResponse' => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetTrackingwithRefResponse',
            'getTrackingwithRefResult'   => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetTrackingwithRefResult',
            'getStatus'                  => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetStatus',
            'getStatusResponse'          => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetStatusResponse',
            'saphOrderReady'             => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\SaphOrderReady',
            'ArrayOfOrderLineItem'       => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\ArrayOfOrderLineItem',
            'OrderLineItem'              => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\OrderLineItem',
            'saphOrderReadyResponse'     => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\SaphOrderReadyResponse',
            'getStatusByRef'             => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetStatusByRef',
            'getStatusByRefResponse'     => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetStatusByRefResponse',
            'getTrackingByRef'           => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetTrackingByRef',
            'getTrackingByRefResponse'   => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetTrackingByRefResponse',
            'getTrackingByRefResult'     => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetTrackingByRefResult',
            'getShipUpdates'             => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetShipUpdates',
            'getShipUpdatesResponse'     => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetShipUpdatesResponse',
            'getShipUpdatesResult'       => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetShipUpdatesResult',
            'cancelShipment'             => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\CancelShipment',
            'cancelShipmentResponse'     => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\CancelShipmentResponse',
            'getRTLCities'               => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetRTLCities',
            'getRTLCitiesResponse'       => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetRTLCitiesResponse',
            'getRTLCitiesResult'         => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetRTLCitiesResult',
            'getRTLRetails'              => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetRTLRetails',
            'getRTLRetailsResponse'      => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetRTLRetailsResponse',
            'getRTLRetailsResult'        => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetRTLRetailsResult',
            'getAllRetails'              => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetAllRetails',
            'getAllRetailsResponse'      => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetAllRetailsResponse',
            'getAllRetailsResult'        => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetAllRetailsResult',
            'getPDF'                     => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetPDF',
            'getPDFResponse'             => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetPDFResponse',
            'getPDFSino'                 => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetPDFSino',
            'getPDFSinoResponse'         => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetPDFSinoResponse',
            'getPDFBr'                   => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetPDFBr',
            'getPDFBrResponse'           => '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\GetPDFBrResponse',
        ];
    }
}
