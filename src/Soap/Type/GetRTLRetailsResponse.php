<?php

namespace Alhoqbani\SMSAWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRTLRetailsResponse Type
 * @subpackage Structs
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetRTLRetailsResponse extends AbstractStructBase
{
    /**
     * The getRTLRetailsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetailsResult
     */
    public $getRTLRetailsResult;
    /**
     * Constructor method for getRTLRetailsResponse
     * @uses GetRTLRetailsResponse::setGetRTLRetailsResult()
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetailsResult $getRTLRetailsResult
     */
    public function __construct(\Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetailsResult $getRTLRetailsResult = null)
    {
        $this
            ->setGetRTLRetailsResult($getRTLRetailsResult);
    }
    /**
     * Get getRTLRetailsResult value
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetailsResult|null
     */
    public function getGetRTLRetailsResult()
    {
        return $this->getRTLRetailsResult;
    }
    /**
     * Set getRTLRetailsResult value
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetailsResult $getRTLRetailsResult
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetailsResponse
     */
    public function setGetRTLRetailsResult(\Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetailsResult $getRTLRetailsResult = null)
    {
        $this->getRTLRetailsResult = $getRTLRetailsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetRTLRetailsResponse
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
