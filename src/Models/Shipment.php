<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService\Models;

use Alhoqbani\SmsaWebService\Soap\Type\AddShip;
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
    private $id;
    /**
     * Description of the items present in shipment.
     * Optional
     * Correspond to (itemDesc)
     *
     * @var string
     */
    private $description;
    /**
     * Shipment Sent Date.
     * Optional
     *
     * @var string
     */
    private $sentDate;

    /** Value Properties */

    /**
     * Value Either 0 or greater than 0 in case of COD.
     * Required if CASH ON DELIVERY
     * Correspond to (codAmt)
     *
     * @var int
     */
    private $cashOnDelivery = 0;

    /**
     * A default currency for value, insurance and customs .
     *
     * This value will be used when either of value, insurance or customs are set without specifying specific currency.
     *
     * @var string
     */
    private $defaultCurrency;
    /**
     * Carriage Value.
     * Optional
     * Correspond to (carrValue)
     *
     * @var string
     */
    private $value;
    /**
     * Carriage Currency.
     * Optional
     * Correspond to (carrCurr)
     *
     * @var string
     */
    private $valueCurrency;
    /**
     * Customs Value.
     * Optional
     * Correspond to (custVal)
     *
     * @var string
     */
    private $customs;
    /**
     * Customs Currency.
     * Optional
     * Correspond to (custCurr)
     *
     * @var string
     */
    private $customsCurrency;
    /**
     * Insurance Value.
     * Optional
     * Correspond to (insrAmt)
     *
     * @var string
     */
    private $insurance;
    /**
     * Insurance Currency.
     * Optional
     * Correspond to (insrCurr)
     *
     * @var string
     */
    private $insuranceCurrency;

    /**
     * Preferred Delivery date in case of future or delayed delivery.
     * Optional
     * Correspond to (prefDelvDate)
     *
     * @var string
     */
    private $deliveryDate;
    /**
     * Google GPS points separated by comma for delivery to customer by Google maps
     * Optional
     *
     * @var string
     */
    private $gpsPoints;

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
     * @param \Alhoqbani\SmsaWebService\Models\Customer $customer
     * @param string                                    $type
     */
    public function __construct(
        string $referenceNumber,
        Customer $customer,
        string $type = self::TYPE_DLV
    ) {
        $this->referenceNumber = $referenceNumber;
        $this->customer = $customer;
        $this->type = $type;
    }

    public function getTypeObject(string $passKey): AbstractStructBase
    {
        $shipmentObject = $this->createShipmentObject();

        // We set the properties that are available in all Shipments types.
        $shipmentObject
            // Mandatory fields
            ->setPassKey($passKey)
            ->setRefNo($this->referenceNumber)
            ->setPCs($this->itemsCount)
            ->setShipType($this->type)
            ->setWeight((string) $this->weight)// Must be string intval

            // Optional
            ->setSentDate($this->sentDate ?? '')
            ->setIdNo($this->id ?? '')
            ->setItemDesc($this->description ?? '')

            // Values
            // Cash on delivery must be >= 0 and must be a string.
            ->setCodAmt((string) $this->cashOnDelivery)

            // Set the values and currencies only when they are provided.
            // This code is hard to read. Should be refactored !!
            ->setCarrValue($this->value ?? '')
            ->setCarrCurr(!is_null($this->value) ? $this->valueCurrency ?? $this->defaultCurrency ?? '' : $this->valueCurrency ?? '')
            ->setCustVal($this->customs ?? '')
            ->setCustCurr(!is_null($this->customs) ? $this->customsCurrency ?? $this->defaultCurrency ?? '' : $this->customsCurrency ?? '')
            ->setInsrAmt($this->insurance ?? '')
            ->setInsrCurr(!is_null($this->insurance) ? $this->insuranceCurrency ?? $this->defaultCurrency ?? '' : $this->insuranceCurrency ?? '');

        $shipmentObject = $this->customer->prepareForShipment($shipmentObject);

        // If the shipment has a shipper, then we have extra parameters to assign to the request.
        if ($this->hasShipper() && method_exists($shipmentObject, 'setPrefDelvDate')) {
            $shipmentObject = $this->shipper->prepareForShipment($shipmentObject);
            $shipmentObject->setPrefDelvDate($this->deliveryDate ?? '');
            $shipmentObject->setGpsPoints($this->gpsPoints ?? '');
        }

        return $shipmentObject;
    }

    /**
     * Determines the SOAP type and method used to create the shipment
     *
     * @return string
     */
    public function getServiceMethod(): string
    {
        // If we don't have a shipper, we want to create a shipment without shipper.
        return $this->hasShipper() ? 'addShip' : 'addShipment';
    }

    /**
     * Create an instance of the shipment type.
     *
     * If we have a shipper, we create an instance of (AddShip), otherwise (AddShipment)
     *
     * @return AddShip|AddShipment
     */
    private function createShipmentObject()
    {
        $class = '\\Alhoqbani\\SmsaWebService\\Soap\\Type\\'.$this->getServiceMethod();

        return new $class;
    }

    /**
     * Check if we have a shipper to attach to the shipment
     *
     * @return bool
     */
    private function hasShipper()
    {
        return !is_null($this->shipper);
    }

    /** **************************************************************************************************************
     *  Setters and Getters
     * **************************************************************************************************************/

    /**
     * @return string
     */
    public function getReferenceNumber(): string
    {
        return $this->referenceNumber;
    }

    /**
     * @param string $referenceNumber
     *
     * @return Shipment
     */
    public function setReferenceNumber(string $referenceNumber): self
    {
        $this->referenceNumber = $referenceNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Shipment
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemsCount(): int
    {
        return $this->itemsCount;
    }

    /**
     * @param int $itemsCount
     *
     * @return Shipment
     */
    public function setItemsCount(int $itemsCount): self
    {
        $this->itemsCount = $itemsCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     *
     * @return Shipment
     */
    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Shipment
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Shipment
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getSentDate(): string
    {
        return $this->sentDate;
    }

    /**
     * @param string $sentDate
     *
     * @return Shipment
     */
    public function setSentDate(string $sentDate): self
    {
        $this->sentDate = $sentDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getCashOnDelivery(): int
    {
        return $this->cashOnDelivery;
    }

    /**
     * @param int $cashOnDelivery
     *
     * @return Shipment
     */
    public function setCashOnDelivery(int $cashOnDelivery): self
    {
        $this->cashOnDelivery = $cashOnDelivery;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultCurrency(): string
    {
        return $this->defaultCurrency;
    }

    /**
     * @param string $defaultCurrency
     *
     * @return Shipment
     */
    public function setDefaultCurrency(string $defaultCurrency): self
    {
        $this->defaultCurrency = $defaultCurrency;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return Shipment
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getValueCurrency(): string
    {
        return $this->valueCurrency;
    }

    /**
     * @param string $valueCurrency
     *
     * @return Shipment
     */
    public function setValueCurrency(string $valueCurrency): self
    {
        $this->valueCurrency = $valueCurrency;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustoms(): string
    {
        return $this->customs;
    }

    /**
     * @param string $customs
     *
     * @return Shipment
     */
    public function setCustoms(string $customs): self
    {
        $this->customs = $customs;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomsCurrency(): string
    {
        return $this->customsCurrency;
    }

    /**
     * @param string $customsCurrency
     *
     * @return Shipment
     */
    public function setCustomsCurrency(string $customsCurrency): self
    {
        $this->customsCurrency = $customsCurrency;

        return $this;
    }

    /**
     * @return string
     */
    public function getInsurance(): string
    {
        return $this->insurance;
    }

    /**
     * @param string $insurance
     *
     * @return Shipment
     */
    public function setInsurance(string $insurance): self
    {
        $this->insurance = $insurance;

        return $this;
    }

    /**
     * @return string
     */
    public function getInsuranceCurrency(): string
    {
        return $this->insuranceCurrency;
    }

    /**
     * @param string $insuranceCurrency
     *
     * @return Shipment
     */
    public function setInsuranceCurrency(string $insuranceCurrency): self
    {
        $this->insuranceCurrency = $insuranceCurrency;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate(): string
    {
        return $this->deliveryDate;
    }

    /**
     * @param string $deliveryDate
     *
     * @return Shipment
     */
    public function setDeliveryDate(string $deliveryDate): self
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getGpsPoints(): string
    {
        return $this->gpsPoints;
    }

    /**
     * @param string $gpsPoints
     *
     * @return Shipment
     */
    public function setGpsPoints(string $gpsPoints): self
    {
        $this->gpsPoints = $gpsPoints;

        return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     *
     * @return Shipment
     */
    public function setCustomer(Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return Shipper
     */
    public function getShipper(): Shipper
    {
        return $this->shipper;
    }

    /**
     * @param Shipper $shipper
     *
     * @return Shipment
     */
    public function setShipper(Shipper $shipper): self
    {
        $this->shipper = $shipper;

        return $this;
    }
}
