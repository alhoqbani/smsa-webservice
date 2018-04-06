<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://track.smsaexpress.com/SECOM/SMSAwebService.asmx?WSDL',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 * ################################################################################
 * Don't forget to add wsdltophp/packagebase:dev-master to your main composer.json.
 * ################################################################################
 */
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://track.smsaexpress.com/SECOM/SMSAwebService.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Alhoqbani\SMSAWebService\Soap\ClassMap::get(),
);
/**
 * Samples for Service ServiceType
 */
$service = new \Alhoqbani\SMSAWebService\Soap\Service($options);
/**
 * Sample call for addShipment operation/method
 */
if ($service->addShipment(new \Alhoqbani\SMSAWebService\Soap\Type\AddShipment()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for addShip operation/method
 */
if ($service->addShip(new \Alhoqbani\SMSAWebService\Soap\Type\AddShip()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for addShipMPS operation/method
 */
if ($service->addShipMPS(new \Alhoqbani\SMSAWebService\Soap\Type\AddShipMPS()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for stoShipment operation/method
 */
if ($service->stoShipment(new \Alhoqbani\SMSAWebService\Soap\Type\StoShipment()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for addShipmentDelv operation/method
 */
if ($service->addShipmentDelv(new \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getTracking operation/method
 */
if ($service->getTracking(new \Alhoqbani\SMSAWebService\Soap\Type\GetTracking()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getTrackingwithRef operation/method
 */
if ($service->getTrackingwithRef(new \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRef()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getStatus operation/method
 */
if ($service->getStatus(new \Alhoqbani\SMSAWebService\Soap\Type\GetStatus()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for saphOrderReady operation/method
 */
if ($service->saphOrderReady(new \Alhoqbani\SMSAWebService\Soap\Type\SaphOrderReady()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getStatusByRef operation/method
 */
if ($service->getStatusByRef(new \Alhoqbani\SMSAWebService\Soap\Type\GetStatusByRef()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getTrackingByRef operation/method
 */
if ($service->getTrackingByRef(new \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingByRef()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getShipUpdates operation/method
 */
if ($service->getShipUpdates(new \Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdates()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for cancelShipment operation/method
 */
if ($service->cancelShipment(new \Alhoqbani\SMSAWebService\Soap\Type\CancelShipment()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getRTLCities operation/method
 */
if ($service->getRTLCities(new \Alhoqbani\SMSAWebService\Soap\Type\GetRTLCities()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getRTLRetails operation/method
 */
if ($service->getRTLRetails(new \Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetails()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getAllRetails operation/method
 */
if ($service->getAllRetails(new \Alhoqbani\SMSAWebService\Soap\Type\GetAllRetails()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getPDF operation/method
 */
if ($service->getPDF(new \Alhoqbani\SMSAWebService\Soap\Type\GetPDF()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getPDFSino operation/method
 */
if ($service->getPDFSino(new \Alhoqbani\SMSAWebService\Soap\Type\GetPDFSino()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for getPDFBr operation/method
 */
if ($service->getPDFBr(new \Alhoqbani\SMSAWebService\Soap\Type\GetPDFBr()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
