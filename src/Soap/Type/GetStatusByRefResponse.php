<?php

namespace Alhoqbani\SMSAWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStatusByRefResponse Type
 * @subpackage Structs
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetStatusByRefResponse extends AbstractStructBase
{
    /**
     * The getStatusByRefResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $getStatusByRefResult;
    /**
     * Constructor method for getStatusByRefResponse
     * @uses GetStatusByRefResponse::setGetStatusByRefResult()
     * @param string $getStatusByRefResult
     */
    public function __construct($getStatusByRefResult = null)
    {
        $this
            ->setGetStatusByRefResult($getStatusByRefResult);
    }
    /**
     * Get getStatusByRefResult value
     * @return string|null
     */
    public function getGetStatusByRefResult()
    {
        return $this->getStatusByRefResult;
    }
    /**
     * Set getStatusByRefResult value
     * @param string $getStatusByRefResult
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetStatusByRefResponse
     */
    public function setGetStatusByRefResult($getStatusByRefResult = null)
    {
        // validation for constraint: string
        if (!is_null($getStatusByRefResult) && !is_string($getStatusByRefResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getStatusByRefResult)), __LINE__);
        }
        $this->getStatusByRefResult = $getStatusByRefResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetStatusByRefResponse
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
