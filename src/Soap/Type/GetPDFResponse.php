<?php

namespace Alhoqbani\SMSAWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPDFResponse Type
 * @subpackage Structs
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetPDFResponse extends AbstractStructBase
{
    /**
     * The getPDFResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $getPDFResult;
    /**
     * Constructor method for getPDFResponse
     * @uses GetPDFResponse::setGetPDFResult()
     * @param string $getPDFResult
     */
    public function __construct($getPDFResult = null)
    {
        $this
            ->setGetPDFResult($getPDFResult);
    }
    /**
     * Get getPDFResult value
     * @return string|null
     */
    public function getGetPDFResult()
    {
        return $this->getPDFResult;
    }
    /**
     * Set getPDFResult value
     * @param string $getPDFResult
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetPDFResponse
     */
    public function setGetPDFResult($getPDFResult = null)
    {
        // validation for constraint: string
        if (!is_null($getPDFResult) && !is_string($getPDFResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getPDFResult)), __LINE__);
        }
        $this->getPDFResult = $getPDFResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetPDFResponse
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
