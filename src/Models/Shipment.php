<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService\Models;

use Alhoqbani\SmsaWebService\Soap\Type\AddShipment;
use WsdlToPhp\PackageBase\AbstractStructBase;

class Shipment
{
    const TYPE_DLV = 'DLV';
    const TYPE_VAL = 'VAL';
    const TYPE_HAL = 'HAL';
    const TYPE_BLT = 'BLT';

    /**
     * Unique Number for each day (Required).
     * Cannot be Null
     * Correspond to (refNo)
     *
     * @var string
     */
    private $referenceNumber;
    /**
     * DLV for normal Shipments for other special cases we will provide.
     * Mandatory Value from DLV,VAL,HAL or BLT
     * Correspond to (shipType)
     *
     * @var string
     */
    private $type;
    /**
     * No. of Pieces.
     * Mandatory Integer
     * Correspond to (PCs)
     *
     * @var int
     */
    private $itemsCount = 1;
    /**
     * Weight of the Shipment
     * It has to be numeric, but will be converted string.
     *
     * @var int
     */
    private $weight = 0;

    /** Optional Properties */

    /**
     * Id.
     * Optional
     * Correspond to (idNo)
     *
     * @var string
     */
    private $id = '';
    /**
     * Description of the items present in shipment.
     * Optional
     * Correspond to (itemDesc)
     *
     * @var string
     */
    private $description = '';
    /**
     * Shipment Sent Date.
     * Optional
     *
     * @var string
     */
    private $sentDate = '';
    /**
     * Preferred Delivery date in case of future or delayed delivery.
     * Optional
     * Correspond to (prefDelvDate)
     *
     * @var string
     */
    private $deliveryDate = '';
    /**
     * Google GPS points separated by comma for delivery to customer by Google maps
     * Optional
     *
     * @var string
     */
    private $gpsPoints = '';

    /** Related Objects */

    /**
     * Customer associated with the shipment.
     *
     * @var \Alhoqbani\SmsaWebService\Models\Customer
     */
    private $customer;
    /**
     * Shipper associated with the shipment.
     *
     * @var \Alhoqbani\SmsaWebService\Models\Shipper
     */
    private $shipper;

    /**
     * Shipment constructor.
     *
     * @param string                                    $referenceNumber
     * @param string                                    $type
     * @param \Alhoqbani\SmsaWebService\Models\Customer $customer
     */
    public function __construct(
        string $referenceNumber,
        string $type = self::TYPE_DLV,
        Customer $customer
    ) {
        $this->referenceNumber = $referenceNumber;
        $this->type = $type;
        $this->customer = $customer;
    }

    public function getTypeObject(string $passKey): AbstractStructBase
    {
        $addShipment = (new AddShipment())
            // Mandatory fields
            ->setPassKey($passKey)
            ->setRefNo($this->referenceNumber)
            ->setPCs($this->itemsCount)
            ->setShipType($this->type)
            ->setWeight((string) $this->weight)// Must be string intval

            // Optional
            ->setSentDate($params['sentDate'] ?? '')
            ->setIdNo($params['idNo'] ?? '')
            ->setCarrValue($params['carrValue'] ?? '')
            ->setCarrCurr($params['carrCurr'] ?? '')
            ->setCodAmt($params['codAmt'] ?? '')
            ->setCustVal($params['custVal'] ?? '')
            ->setCustCurr($params['custCurr'] ?? '')
            ->setInsrAmt($params['insrAmt'] ?? '')
            ->setInsrCurr($params['insrCurr'] ?? '')
            ->setItemDesc($params['itemDesc'] ?? '');

        $this->customer->prepareForShipment($addShipment);

        dump('$addShipment jsonSerialize', $addShipment->jsonSerialize());

        return $addShipment;
    }

    public function getServiceMethod(): string
    {
        return 'addShipment';
    }
}
