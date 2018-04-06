<?php

namespace Alhoqbani\SMSAWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPDFBr Type
 * @subpackage Structs
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetPDFBr extends AbstractStructBase
{
    /**
     * The awbNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $awbNo;
    /**
     * The passKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $passKey;
    /**
     * The forwrdr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $forwrdr;
    /**
     * Constructor method for getPDFBr
     * @uses GetPDFBr::setAwbNo()
     * @uses GetPDFBr::setPassKey()
     * @uses GetPDFBr::setForwrdr()
     * @param string $awbNo
     * @param string $passKey
     * @param string $forwrdr
     */
    public function __construct($awbNo = null, $passKey = null, $forwrdr = null)
    {
        $this
            ->setAwbNo($awbNo)
            ->setPassKey($passKey)
            ->setForwrdr($forwrdr);
    }
    /**
     * Get awbNo value
     * @return string|null
     */
    public function getAwbNo()
    {
        return $this->awbNo;
    }
    /**
     * Set awbNo value
     * @param string $awbNo
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetPDFBr
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
     * Get passKey value
     * @return string|null
     */
    public function getPassKey()
    {
        return $this->passKey;
    }
    /**
     * Set passKey value
     * @param string $passKey
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetPDFBr
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
     * Get forwrdr value
     * @return string|null
     */
    public function getForwrdr()
    {
        return $this->forwrdr;
    }
    /**
     * Set forwrdr value
     * @param string $forwrdr
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetPDFBr
     */
    public function setForwrdr($forwrdr = null)
    {
        // validation for constraint: string
        if (!is_null($forwrdr) && !is_string($forwrdr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forwrdr)), __LINE__);
        }
        $this->forwrdr = $forwrdr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetPDFBr
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
