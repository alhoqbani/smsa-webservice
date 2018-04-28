<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Alhoqbani\SmsaWebService\Models\Shipment;
use Alhoqbani\SmsaWebService\Models\Shipper;

require_once __DIR__.'/../vendor/autoload.php';

$smsa = new \Alhoqbani\SmsaWebService\Smsa();

$customer = new \Alhoqbani\SmsaWebService\Models\Customer(
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
    'Shipper Building, Floor 4, Office 9',
    'Riyadh',
    'Saudi Arabia',
    '0110000000'
);

$shipment->setShipper($shipper);

$result = $smsa->createShipment($shipment);

print_r($result);
