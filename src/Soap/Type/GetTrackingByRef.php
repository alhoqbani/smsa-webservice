<?php

namespace Alhoqbani\SMSAWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTrackingByRef Type
 * @subpackage Structs
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetTrackingByRef extends AbstractStructBase
{
    /**
     * The refNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $refNo;
    /**
     * The passkey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $passkey;
    /**
     * Constructor method for getTrackingByRef
     * @uses GetTrackingByRef::setRefNo()
     * @uses GetTrackingByRef::setPasskey()
     * @param string $refNo
     * @param string $passkey
     */
    public function __construct($refNo = null, $passkey = null)
    {
        $this
            ->setRefNo($refNo)
            ->setPasskey($passkey);
    }
    /**
     * Get refNo value
     * @return string|null
     */
    public function getRefNo()
    {
        return $this->refNo;
    }
    /**
     * Set refNo value
     * @param string $refNo
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingByRef
     */
    public function setRefNo($refNo = null)
    {
        // validation for constraint: string
        if (!is_null($refNo) && !is_string($refNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refNo)), __LINE__);
        }
        $this->refNo = $refNo;
        return $this;
    }
    /**
     * Get passkey value
     * @return string|null
     */
    public function getPasskey()
    {
        return $this->passkey;
    }
    /**
     * Set passkey value
     * @param string $passkey
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingByRef
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
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingByRef
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
