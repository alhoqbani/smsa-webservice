<?php

namespace Alhoqbani\SMSAWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStatusResponse Type
 * @subpackage Structs
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetStatusResponse extends AbstractStructBase
{
    /**
     * The getStatusResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $getStatusResult;
    /**
     * Constructor method for getStatusResponse
     * @uses GetStatusResponse::setGetStatusResult()
     * @param string $getStatusResult
     */
    public function __construct($getStatusResult = null)
    {
        $this
            ->setGetStatusResult($getStatusResult);
    }
    /**
     * Get getStatusResult value
     * @return string|null
     */
    public function getGetStatusResult()
    {
        return $this->getStatusResult;
    }
    /**
     * Set getStatusResult value
     * @param string $getStatusResult
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetStatusResponse
     */
    public function setGetStatusResult($getStatusResult = null)
    {
        // validation for constraint: string
        if (!is_null($getStatusResult) && !is_string($getStatusResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getStatusResult)), __LINE__);
        }
        $this->getStatusResult = $getStatusResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetStatusResponse
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
