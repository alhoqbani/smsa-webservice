<?php

namespace Alhoqbani\SMSAWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTrackingResponse Type
 * @subpackage Structs
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetTrackingResponse extends AbstractStructBase
{
    /**
     * The getTrackingResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingResult
     */
    public $getTrackingResult;
    /**
     * Constructor method for getTrackingResponse
     * @uses GetTrackingResponse::setGetTrackingResult()
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingResult $getTrackingResult
     */
    public function __construct(\Alhoqbani\SMSAWebService\Soap\Type\GetTrackingResult $getTrackingResult = null)
    {
        $this
            ->setGetTrackingResult($getTrackingResult);
    }
    /**
     * Get getTrackingResult value
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingResult|null
     */
    public function getGetTrackingResult()
    {
        return $this->getTrackingResult;
    }
    /**
     * Set getTrackingResult value
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingResult $getTrackingResult
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingResponse
     */
    public function setGetTrackingResult(\Alhoqbani\SMSAWebService\Soap\Type\GetTrackingResult $getTrackingResult = null)
    {
        $this->getTrackingResult = $getTrackingResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingResponse
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
