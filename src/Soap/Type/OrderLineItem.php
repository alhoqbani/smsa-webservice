<?php

namespace Alhoqbani\SMSAWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderLineItem Type
 * @subpackage Structs
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class OrderLineItem extends AbstractStructBase
{
    /**
     * The iSKU
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $iSKU;
    /**
     * The iQty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $iQty;
    /**
     * The iSerial
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $iSerial;
    /**
     * Constructor method for OrderLineItem
     * @uses OrderLineItem::setISKU()
     * @uses OrderLineItem::setIQty()
     * @uses OrderLineItem::setISerial()
     * @param string $iSKU
     * @param string $iQty
     * @param string $iSerial
     */
    public function __construct($iSKU = null, $iQty = null, $iSerial = null)
    {
        $this
            ->setISKU($iSKU)
            ->setIQty($iQty)
            ->setISerial($iSerial);
    }
    /**
     * Get iSKU value
     * @return string|null
     */
    public function getISKU()
    {
        return $this->iSKU;
    }
    /**
     * Set iSKU value
     * @param string $iSKU
     * @return \Alhoqbani\SMSAWebService\Soap\Type\OrderLineItem
     */
    public function setISKU($iSKU = null)
    {
        // validation for constraint: string
        if (!is_null($iSKU) && !is_string($iSKU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iSKU)), __LINE__);
        }
        $this->iSKU = $iSKU;
        return $this;
    }
    /**
     * Get iQty value
     * @return string|null
     */
    public function getIQty()
    {
        return $this->iQty;
    }
    /**
     * Set iQty value
     * @param string $iQty
     * @return \Alhoqbani\SMSAWebService\Soap\Type\OrderLineItem
     */
    public function setIQty($iQty = null)
    {
        // validation for constraint: string
        if (!is_null($iQty) && !is_string($iQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iQty)), __LINE__);
        }
        $this->iQty = $iQty;
        return $this;
    }
    /**
     * Get iSerial value
     * @return string|null
     */
    public function getISerial()
    {
        return $this->iSerial;
    }
    /**
     * Set iSerial value
     * @param string $iSerial
     * @return \Alhoqbani\SMSAWebService\Soap\Type\OrderLineItem
     */
    public function setISerial($iSerial = null)
    {
        // validation for constraint: string
        if (!is_null($iSerial) && !is_string($iSerial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iSerial)), __LINE__);
        }
        $this->iSerial = $iSerial;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Alhoqbani\SMSAWebService\Soap\Type\OrderLineItem
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
