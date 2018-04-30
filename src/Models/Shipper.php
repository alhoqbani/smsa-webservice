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

class Shipper
{

    /**
     * Shipper Name.
     * Mandatory
     * Correspond to (sName)
     *
     * @var string
     */
    private $name;
    /**
     * Shipper Contact name.
     * Mandatory
     * Correspond to (sContact)
     *
     * @var string
     */
    private $contactName;
    /**
     * Shipper Address Line 1.
     * Mandatory
     * Correspond to (sAddr1)
     *
     * @var string
     */
    private $addressLine1;
    /**
     * Shipper Address Line 2.
     * Optional
     * Correspond to (sAddr2)
     *
     * @var string
     */
    private $addressLine2;
    /**
     * Shipper City.
     * Mandatory
     * Correspond to (sCity)
     *
     * @var string
     */
    private $city;
    /**
     * Shipper country.
     * Mandatory
     * Correspond to (sCntry)
     *
     * @var string
     */
    private $country;
    /**
     * Shipper phone number.
     * Mandatory
     * Correspond to (sPhone)
     *
     * @var string
     */
    private $phone;

    /**
     * Shipper constructor.
     *
     * @param string $name
     * @param string $contactName
     * @param string $addressLine1
     * @param string $city
     * @param string $country
     * @param string $phone
     */
    public function __construct(
        string $name,
        string $contactName,
        string $addressLine1,
        string $city,
        string $country,
        string $phone
    ) {
        $this->name = $name;
        $this->contactName = $contactName;
        $this->addressLine1 = $addressLine1;
        $this->city = $city;
        $this->country = $country;
        $this->phone = $phone;
    }

    /**
     * Add customer details to the shipment object.
     *
     * @param AddShipment|AddShip $shipment
     *
     * @return AddShipment|AddShip
     */
    public function prepareForShipment($shipment): AbstractStructBase
    {
        return $shipment
            // Required fields
            ->setSName($this->name)
            ->setSContact($this->contactName)
            ->setSAddr1($this->addressLine1)
            ->setSAddr2($this->addressLine2)
            ->setSCity($this->city)
            ->setSCntry($this->country)
            ->setSCity($this->city)
            ->setSPhone($this->phone);
    }

    /* **************************************************************************************************************
     *  Setters and Getters
     * **************************************************************************************************************/

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Shipper
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getContactName(): string
    {
        return $this->contactName;
    }

    /**
     * @param string $contactName
     *
     * @return Shipper
     */
    public function setContactName(string $contactName): self
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }

    /**
     * @param string $addressLine1
     *
     * @return Shipper
     */
    public function setAddressLine1(string $addressLine1): self
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine2(): string
    {
        return $this->addressLine2;
    }

    /**
     * @param string $addressLine2
     *
     * @return Shipper
     */
    public function setAddressLine2(string $addressLine2): self
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return Shipper
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return Shipper
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return Shipper
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
