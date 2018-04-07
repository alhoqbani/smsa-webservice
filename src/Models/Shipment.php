<?php

namespace Alhoqbani\SMSAWebService\Models;


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
     * @var string
     */
    private $referenceNumber;
    /**
     * DLV for normal Shipments for other special cases we will provide.
     * Mandatory Value from DLV,VAL,HAL or BLT
     * Correspond to (shipType)
     * @var string
     */
    private $type;
    /**
     * No. of Pieces.
     * Mandatory Integer
     * Correspond to (PCs)
     * @var int
     */
    private $itemsCount;
    /**
     * Weight of the Shipment
     * It has to be numeric, but will be converted string.
     * @var int
     */
    private $weight;

    /** Optional Properties */

    /**
     * Id.
     * Optional
     * Correspond to (idNo)
     * @var string
     */
    private $id = '';
    /**
     * Description of the items present in shipment.
     * Optional
     * Correspond to (itemDesc)
     * @var string
     */
    private $description = '';
    /**
     * Shipment Sent Date.
     * Optional
     * @var string
     */
    private $sentDate = '';
    /**
     * Preferred Delivery date in case of future or delayed delivery.
     * Optional
     * Correspond to (prefDelvDate)
     * @var string
     */
    private $deliveryDate = '';
    /**
     * Google GPS points separated by comma for delivery to customer by Google maps
     * Optional
     * @var string
     */
    private $gpsPoints = '';


    /**
     * Shipment constructor.
     *
     * @param string $referenceNumber
     * @param string $type
     * @param int    $itemsCount
     * @param int    $weight
     */
    public function __construct(
        string $referenceNumber, string $type = self::TYPE_DLV, int $itemsCount = 1, int $weight = 0
    ) {
        $this->referenceNumber = $referenceNumber;
        $this->type            = $type;
        $this->itemsCount      = $itemsCount;
        $this->weight          = $weight;
    }
}
