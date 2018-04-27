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
 * This class stands for cancelShipment Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class CancelShipment extends AbstractStructBase
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
     * The reas
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $reas;

    /**
     * Constructor method for cancelShipment
     *
     * @uses CancelShipment::setAwbNo()
     * @uses CancelShipment::setPasskey()
     * @uses CancelShipment::setReas()
     *
     * @param string $awbNo
     * @param string $passkey
     * @param string $reas
     */
    public function __construct($awbNo = null, $passkey = null, $reas = null)
    {
        $this
            ->setAwbNo($awbNo)
            ->setPasskey($passkey)
            ->setReas($reas);
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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\CancelShipment
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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\CancelShipment
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
     * Get reas value
     *
     * @return string|null
     */
    public function getReas()
    {
        return $this->reas;
    }

    /**
     * Set reas value
     *
     * @param string $reas
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\CancelShipment
     */
    public function setReas($reas = null)
    {
        // validation for constraint: string
        if (!is_null($reas) && !is_string($reas)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reas)), __LINE__);
        }
        $this->reas = $reas;

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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\CancelShipment
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
