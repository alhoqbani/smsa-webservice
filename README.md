# smsa-webservice

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

[SMSAExpress](http://smsaexpress.com/index.html) tracking web service.

# Under development. Don't use for production.

This library provides fluent and intuitive mechanism to interact with [SMSAExpress][link-smsa] eCommerce Web API: [SMSAwebService][link-smsa-webservice].

Through this API you can cretate new shipments, track shipments, and cancel shipments programmatically. 

The API follows [SOAP](https://en.wikipedia.org/wiki/SOAP) protocol specifications, and it's not straight forward to follow or use with PHP.

>>> This is unoffocial libary and has no affiliation with [SMSAExpress][link-smsa]. Usage of [SMSAwebService][link-smsa-webservice] is subject to its terms and conditions.

### Credentials:
Before using the API you need to obtain a `passKey` from [SMSAExpress][link-smsa].

## Install

Via Composer

``` bash
$ composer require alhoqbani/smsa-webservice
```

## Usage

``` php
<?php

use \Alhoqbani\SmsaWebService\Smsa;

$smsa = new Smsa($passKey);
```

### Get Status:
Get current Status of Shipment by Air waybill Number
```php
$result = $smsa->status('290019315792');
var_dump($smsa->data);
```

### Get Tracking
Get Tracking of Shipment by Air waybill Number
```php
$track = $smsa->track('290019315792');

if (track->success) {
    var_dump($track->data);
} else {
    var_dump($track->error);
}
```

### Get AWB Print in PDF
Get AWB Print in PDF
```php
try {
    $pdf = $smsa->awbPDF('290019315810');
    header('Content-type: application/octet-stream');
    header('Content-disposition: attachment;filename=awb.pdf');
    echo $pdf->data; die();

} catch (\Alhoqbani\SmsaWebService\Exceptions\RequestError $e) {
    echo $e->getMessage();
    var_dump($e->smsaResponse)
}
```

### Create new shipment:
Create Shipment and get SMSA AWB Number

You create an object of `Shipment` and pass it to `$smsa->createShipment()` The shipment requeires an instance of `Customer` and optionally a `Shipper` object.

```php
<?php

use \Alhoqbani\SmsaWebService\Smsa;
use \Alhoqbani\SmsaWebService\Models\Shipment;
use \Alhoqbani\SmsaWebService\Models\Customer;
use \Alhoqbani\SmsaWebService\Models\Shipper;

$smsa = new Smsa($passKey);
// Create a customer
$customer = new Customer(
    'Customer Name', //customer name
    '0500000000', // mobile number. must be > 9 digits
    '10 King Fahad Road', // street address
    'Jeddah' // city
);

$shipment = new Shipment(
    time(), // Refrence number
    $customer, // Customer object
    Shipment::TYPE_DLV // Shipment type.
      );

$awb = $smsa->createShipment($shipment);

echo $awb->data; // 290019315792

```

To add additional fields
```php 
$customer
    ->setEmail('customer@example.com')
    ->setAddressLine2('Building 10, Apartment 1')
    ->setPOBox('12345')
    ->setZipCode('11411')
    ->setTel1('0110000000')
    ->setTel2('0120000000');

// To add shipper details to the shipment
$shipper = new Shipper(
    'Shipper Name (LLC)', // shipper name
    'Shipper Employee', // contact name
    '1 Main Road', // address line 1
    'Riyadh', // city
    'Saudi Arabia', // country
    '0110000000' // phone
);

$shipment->setShipper($shipper);
```

### Cancel shipment:
Cancel a Shipment by Air waybill Number
```php
$result = $smsa->cancel('AWB NUMBER')
var_dump($result->jsonSerialize())
```

### Get Cities
Get List of Cities for Retails list
```php
$smsa->shouldUseExceptions = false; // Disable throwing exceptions by the library

$cities = $smsa->cities();

if( $cities->success) {
    var_dump($cities->data)
} else {
    var_dump($cities->error)
}
```

### Get Retails
Get Retails list by each city
```php
$retails = $smsa->retails();
var_dump($retails); 
// or by city (route code):
$retails =  $smsa->retailsIn('TUU');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

Not yet :(

## TODO
- [ ] Testing!!
- [ ] Complete remaining operations. 

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Credits

- [Hamoud Alhoqbani][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-smsa]:
http://smsaexpress.com

[link-smsa-webservice]:
http://track.smsaexpress.com/SECOM/SMSAwebService.asmx


[ico-version]: https://img.shields.io/packagist/v/alhoqbani/smsa-webservice.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/alhoqbani/smsa-webservice/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/alhoqbani/smsa-webservice.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/alhoqbani/smsa-webservice.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/alhoqbani/smsa-webservice.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/alhoqbani/smsa-webservice
[link-travis]: https://travis-ci.org/alhoqbani/smsa-webservice
[link-scrutinizer]: https://scrutinizer-ci.com/g/alhoqbani/smsa-webservice/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/alhoqbani/smsa-webservice
[link-downloads]: https://packagist.org/packages/alhoqbani/smsa-webservice
[link-author]: https://github.com/alhoqbani
[link-contributors]: ../../contributors
