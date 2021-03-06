<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Alhoqbani\SmsaWebService\Models\Customer;
use Alhoqbani\SmsaWebService\Models\Shipment;
use Alhoqbani\SmsaWebService\Models\Shipper;
use Alhoqbani\SmsaWebService\Smsa;

require_once __DIR__.'/../vendor/autoload.php';

$smsa = new Smsa($passKey = 'Testing0');

$smsa->shouldUseExceptions = true;

//
//$cities = $smsa->cities();
//var_dump($cities->jsonSerialize()); die();

$retails = $smsa->retails();
var_dump($retails); die();

//$retailsIn = $smsa->retailsIn('TUU');
//var_dump($retailsIn->jsonSerialize()); die();
//
//$status = $smsa->status('290019315792');
//var_dump($status); die();

//$track = $smsa->track('290019315810');
//var_dump($track, $track->jsonSerialize()); die();

//$pdf = $smsa->awbPDF('290019315810');
//header('Content-type: application/octet-stream');
//header('Content-disposition: attachment;filename=YOURFILE.pdf');
//echo $pdf->data; die();

//$cancel = $smsa->cancel('290019319804', 'Test Cancellation');
//var_dump($cancel); die();

//$trackByReference = $smsa->trackByReference('1524923607');
//var_dump($trackByReference->jsonSerialize()); die();

// Create a shipment
$customer = new Customer(
    'Customer Name',
    '0500000000',
    '10 King Fahad Road',
    'Jeddah'
);

$customer
    ->setEmail('customer@example.com')
    ->setAddressLine2('Building 10, Apartment 1')
    ->setPOBox('12345')
    ->setZipCode('11411')
    ->setTel1('0110000000')
    ->setTel2('0120000000');

$shipment = new Shipment(time(), $customer, Shipment::TYPE_DLV);

$shipment
    ->setId(123)
    ->setDescription('Products ordered from our website')
    ->setSentDate('1988/1')
    ->setCashOnDelivery(100)
    ->setValue(300)
    ->setValueCurrency('SAR')
    ->setCustoms(40.3)
    ->setDefaultCurrency('USD');

$shipper = new Shipper(
    'Shipper Name (LLC)',
    'Shipper Employee',
    '1 Main Road',
    'Riyadh',
    'Saudi Arabia',
    '0110000000'
);

$shipper->setAddressLine2('Shipper Building, Floor 4, Office 9');

//$shipment->setShipper($shipper);

$result = $smsa->createShipment($shipment);

var_dump($result->jsonSerialize());
