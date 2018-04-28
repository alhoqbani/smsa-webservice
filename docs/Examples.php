<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Alhoqbani\SmsaWebService\Models\Shipment;

require_once __DIR__.'/../vendor/autoload.php';

$smsa = new \Alhoqbani\SmsaWebService\Smsa();

$customer = new \Alhoqbani\SmsaWebService\Models\Customer(
    'Customer Name',
    '966500000000',
    '10 King Fahad Road',
    'Jeddah'
);

$shipment = new Shipment(time(), Shipment::TYPE_DLV, $customer);

$result = $smsa->createShipment($shipment);

dump($result);
