<?php

/*
 * This file is part of SMSA WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SMSAWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for stoShipment Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class StoShipment extends AbstractStructBase
{
    /**
     * The awbNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $awbNo;
    /**
     * The passkey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $passkey;

    /**
     * Constructor method for stoShipment
     *
     * @uses StoShipment::setAwbNo()
     * @uses StoShipment::setPasskey()
     *
     * @param string $awbNo
     * @param string $passkey
     */
    public function __construct($awbNo = null, $passkey = null)
    {
        $this
            ->setAwbNo($awbNo)
            ->setPasskey($passkey);
    }

    /**
     * Get awbNo value
     *
     * @return string|null
     */
    public function getAwbNo()
    {
        return $this->awbNo;
    }

    /**
     * Set awbNo value
     *
     * @param string $awbNo
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\StoShipment
     */
    public function setAwbNo($awbNo = null)
    {
        // validation for constraint: string
        if (!is_null($awbNo) && !is_string($awbNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($awbNo)), __LINE__);
        }
        $this->awbNo = $awbNo;

        return $this;
    }

    /**
     * Get passkey value
     *
     * @return string|null
     */
    public function getPasskey()
    {
        return $this->passkey;
    }

    /**
     * Set passkey value
     *
     * @param string $passkey
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\StoShipment
     */
    public function setPasskey($passkey = null)
    {
        // validation for constraint: string
        if (!is_null($passkey) && !is_string($passkey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passkey)), __LINE__);
        }
        $this->passkey = $passkey;

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
     * @return \Alhoqbani\SMSAWebService\Soap\Type\StoShipment
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
