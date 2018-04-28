<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService\Models;

use Alhoqbani\SmsaWebService\Soap\Type\AddShipment;

class Customer
{

    /**
     * Customer Name.
     * Cannot be Null
     * Correspond to (cName)
     *
     * @var string
     */
    private $name;
    /**
     * Mobile number.
     * Must be at least 9 digits
     * Mandatory
     * Correspond to (cMobile)
     *
     * @var string
     */
    private $mobile;
    /**
     * Address Line 1.
     * Either of Address fields to be filled duly
     * Correspond to (cAddr1)
     *
     * @var string
     */
    private $addressLine1;
    /**
     * Destination City Name.
     * Required
     * Correspond to (cCity)
     *
     * @var string
     */
    private $city;
    /**
     * Country.
     * Required
     * Correspond to (Cntry)
     *
     * @var string
     */
    private $country;

    /** Optional Properties */

    /**
     * Address Line 2.
     * Either of Address fields to be filled duly
     * Correspond to (cAddr2)
     *
     * @var string
     */
    private $addressLine2;
    /**
     * Zip Code.
     * Optional
     * Correspond to (cZip)
     *
     * @var string
     */
    private $zipCode;
    /**
     * PO Box.
     * Optional
     * Correspond to (cPOBox)
     *
     * @var string
     */
    private $POBox;
    /**
     * Telephone 1.
     * Optional
     * Correspond to cTel1
     *
     * @var string
     */
    private $tel1;
    /**
     * Telephone 2.
     * Optional
     * Correspond to cTel2
     *
     * @var string
     */
    private $tel2;
    /**
     * Email Address.
     * Optional
     * Correspond to (cEmail)
     *
     * @var string
     */
    private $email;

    /**
     * Customer constructor.
     *
     * @param        $name
     * @param        $mobile
     * @param        $addressLine1
     * @param        $city
     * @param string $country
     */
    public function __construct(
        string $name,
        string $mobile,
        string $addressLine1,
        string $city,
        string $country = 'KSA'
    ) {
        $this->name = $name;
        $this->mobile = $mobile;
        $this->addressLine1 = $addressLine1;
        $this->city = $city;
        $this->country = $country;
    }

    /**
     * Add customer details to the shipment object.
     *
     * @param AddShipment $shipment
     *
     * @return AddShipment
     */
    public function prepareForShipment(AddShipment $shipment): AddShipment
    {
        return $shipment
            // Required fields
            ->setCName($this->name)
            ->setCntry($this->country)
            ->setCCity($this->city)
            ->setCMobile($this->mobile)
            ->setCAddr1($this->addressLine1)
            // Optional fields
            ->setCAddr2($this->addressLine2 ?? '')
            ->setCZip($this->zipCode ?? '')
            ->setCPOBox($this->POBox ?? '')
            ->setCTel1($this->tel1 ?? '')
            ->setCTel2($this->tel2 ?? '')
            ->setCEmail($this->email ?? '');
    }

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
     * @return Customer
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     *
     * @return Customer
     */
    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

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
     * @return Customer
     */
    public function setAddressLine1(string $addressLine1): self
    {
        $this->addressLine1 = $addressLine1;

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
     * @return Customer
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
     * @return Customer
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;

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
     * @return Customer
     */
    public function setAddressLine2(string $addressLine2): self
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     *
     * @return Customer
     */
    public function setZipCode(string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPOBox(): string
    {
        return $this->POBox;
    }

    /**
     * @param string $POBox
     *
     * @return Customer
     */
    public function setPOBox(string $POBox): self
    {
        $this->POBox = $POBox;

        return $this;
    }

    /**
     * @return string
     */
    public function getTel1(): string
    {
        return $this->tel1;
    }

    /**
     * @param string $tel1
     *
     * @return Customer
     */
    public function setTel1(string $tel1): self
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * @return string
     */
    public function getTel2(): string
    {
        return $this->tel2;
    }

    /**
     * @param string $tel2
     *
     * @return Customer
     */
    public function setTel2(string $tel2): self
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Customer
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
