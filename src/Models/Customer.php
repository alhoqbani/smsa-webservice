<?php

namespace Alhoqbani\SmsaWebService\Models;


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
    private $addressLine2 = '';
    /**
     * Zip Code.
     * Optional
     * Correspond to (cZip)
     *
     * @var string
     */
    private $zipCode = '';
    /**
     * PO Box.
     * Optional
     * Correspond to (cPOBox)
     *
     * @var string
     */
    private $POBox = '';
    /**
     * Telephone 1.
     * Optional
     * Correspond to cTel1
     *
     * @var string
     */
    private $Tel1 = '';
    /**
     * Telephone 2.
     * Optional
     * Correspond to cTel2
     *
     * @var string
     */
    private $Tel2 = '';
    /**
     * Email Address.
     * Optional
     * Correspond to (cEmail)
     *
     * @var string
     */
    private $email = '';
    
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
        string $name, string $mobile, string $addressLine1, string $city, string $country = 'KSA'
    ) {
        $this->name         = $name;
        $this->mobile       = $mobile;
        $this->addressLine1 = $addressLine1;
        $this->city         = $city;
        $this->country      = $country;
    }
}
