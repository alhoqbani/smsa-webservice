<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShipUpdates Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetShipUpdates extends AbstractStructBase
{
    /**
     * The rowId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $rowId;
    /**
     * The passKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $passKey;

    /**
     * Constructor method for getShipUpdates
     *
     * @uses GetShipUpdates::setRowId()
     * @uses GetShipUpdates::setPassKey()
     *
     * @param int    $rowId
     * @param string $passKey
     */
    public function __construct($rowId = null, $passKey = null)
    {
        $this
            ->setRowId($rowId)
            ->setPassKey($passKey);
    }

    /**
     * Get rowId value
     *
     * @return int
     */
    public function getRowId()
    {
        return $this->rowId;
    }

    /**
     * Set rowId value
     *
     * @param int $rowId
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetShipUpdates
     */
    public function setRowId($rowId = null)
    {
        // validation for constraint: int
        if (!is_null($rowId) && !is_numeric($rowId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rowId)), __LINE__);
        }
        $this->rowId = $rowId;

        return $this;
    }

    /**
     * Get passKey value
     *
     * @return string|null
     */
    public function getPassKey()
    {
        return $this->passKey;
    }

    /**
     * Set passKey value
     *
     * @param string $passKey
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetShipUpdates
     */
    public function setPassKey($passKey = null)
    {
        // validation for constraint: string
        if (!is_null($passKey) && !is_string($passKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passKey)), __LINE__);
        }
        $this->passKey = $passKey;

        return $this;
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see AbstractStructBase::__set_state()
     *
     * @uses AbstractStructBase::__set_state()
     *
     * @param array $array the exported values
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetShipUpdates
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }

    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
