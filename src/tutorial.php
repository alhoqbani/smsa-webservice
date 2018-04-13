<?php

/*
 * This file is part of SMSA WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Minimal options
 */
$options = [
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL      => 'http://track.smsaexpress.com/SECOM/SMSAwebService.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Alhoqbani\SMSAWebService\Soap\ClassMap::get(),
];
/**
 * Samples for Service ServiceType
 */
$service = new \Alhoqbani\SMSAWebService\Soap\Service($options);
/*
 * Sample call for addShipment operation/method
 */
if (false !== $service->addShipment(new \Alhoqbani\SMSAWebService\Soap\Type\AddShipment())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for addShip operation/method
 */
if (false !== $service->addShip(new \Alhoqbani\SMSAWebService\Soap\Type\AddShip())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for addShipMPS operation/method
 */
if (false !== $service->addShipMPS(new \Alhoqbani\SMSAWebService\Soap\Type\AddShipMPS())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for stoShipment operation/method
 */
if (false !== $service->stoShipment(new \Alhoqbani\SMSAWebService\Soap\Type\StoShipment())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for addShipmentDelv operation/method
 */
if (false !== $service->addShipmentDelv(new \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getTracking operation/method
 */
if (false !== $service->getTracking(new \Alhoqbani\SMSAWebService\Soap\Type\GetTracking())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getTrackingwithRef operation/method
 */
if (false !== $service->getTrackingwithRef(new \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRef())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getStatus operation/method
 */
if (false !== $service->getStatus(new \Alhoqbani\SMSAWebService\Soap\Type\GetStatus())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for saphOrderReady operation/method
 */
if (false !== $service->saphOrderReady(new \Alhoqbani\SMSAWebService\Soap\Type\SaphOrderReady())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getStatusByRef operation/method
 */
if (false !== $service->getStatusByRef(new \Alhoqbani\SMSAWebService\Soap\Type\GetStatusByRef())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getTrackingByRef operation/method
 */
if (false !== $service->getTrackingByRef(new \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingByRef())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getShipUpdates operation/method
 */
if (false !== $service->getShipUpdates(new \Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdates())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for cancelShipment operation/method
 */
if (false !== $service->cancelShipment(new \Alhoqbani\SMSAWebService\Soap\Type\CancelShipment())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getRTLCities operation/method
 */
if (false !== $service->getRTLCities(new \Alhoqbani\SMSAWebService\Soap\Type\GetRTLCities())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getRTLRetails operation/method
 */
if (false !== $service->getRTLRetails(new \Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetails())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getAllRetails operation/method
 */
if (false !== $service->getAllRetails(new \Alhoqbani\SMSAWebService\Soap\Type\GetAllRetails())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getPDF operation/method
 */
if (false !== $service->getPDF(new \Alhoqbani\SMSAWebService\Soap\Type\GetPDF())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getPDFSino operation/method
 */
if (false !== $service->getPDFSino(new \Alhoqbani\SMSAWebService\Soap\Type\GetPDFSino())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/*
 * Sample call for getPDFBr operation/method
 */
if (false !== $service->getPDFBr(new \Alhoqbani\SMSAWebService\Soap\Type\GetPDFBr())) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
