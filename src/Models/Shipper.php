<?php
/**
 * Created by PhpStorm.
 * User: hamoud
 * Date: 4/7/18
 * Time: 1:10 AM
 */

namespace Alhoqbani\SmsaWebService\Models;


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
     * Mandatory
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
     * @param string $addressLine2
     * @param string $city
     * @param string $country
     * @param string $phone
     */
    public function __construct(
        string $name,
        string $contactName,
        string $addressLine1,
        string $addressLine2,
        string $city,
        string $country,
        string $phone
    ) {
        $this->name         = $name;
        $this->contactName  = $contactName;
        $this->addressLine1 = $addressLine1;
        $this->addressLine2 = $addressLine2;
        $this->city         = $city;
        $this->country      = $country;
        $this->phone        = $phone;
    }
}
