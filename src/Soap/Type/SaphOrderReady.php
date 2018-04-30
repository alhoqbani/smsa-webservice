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
 * This class stands for saphOrderReady Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class SaphOrderReady extends AbstractStructBase
{
    /**
     * The passKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $passKey;
    /**
     * The refId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $refId;
    /**
     * The orderLineItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Alhoqbani\SmsaWebService\Soap\Type\ArrayOfOrderLineItem
     */
    public $orderLineItems;

    /**
     * Constructor method for saphOrderReady
     *
     * @uses SaphOrderReady::setPassKey()
     * @uses SaphOrderReady::setRefId()
     * @uses SaphOrderReady::setOrderLineItems()
     *
     * @param string                                                   $passKey
     * @param string                                                   $refId
     * @param \Alhoqbani\SmsaWebService\Soap\Type\ArrayOfOrderLineItem $orderLineItems
     */
    public function __construct($passKey = null, $refId = null, \Alhoqbani\SmsaWebService\Soap\Type\ArrayOfOrderLineItem $orderLineItems = null)
    {
        $this
            ->setPassKey($passKey)
            ->setRefId($refId)
            ->setOrderLineItems($orderLineItems);
    }

    /**
     * Get passKey value
     *
     * @return string|null
     */
    public function getPassKey()
    {
        return $this->passKey;
    }

    /**
     * Set passKey value
     *
     * @param string $passKey
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\SaphOrderReady
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
     * Get refId value
     *
     * @return string|null
     */
    public function getRefId()
    {
        return $this->refId;
    }

    /**
     * Set refId value
     *
     * @param string $refId
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\SaphOrderReady
     */
    public function setRefId($refId = null)
    {
        // validation for constraint: string
        if (!is_null($refId) && !is_string($refId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refId)), __LINE__);
        }
        $this->refId = $refId;

        return $this;
    }

    /**
     * Get orderLineItems value
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\ArrayOfOrderLineItem|null
     */
    public function getOrderLineItems()
    {
        return $this->orderLineItems;
    }

    /**
     * Set orderLineItems value
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\ArrayOfOrderLineItem $orderLineItems
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\SaphOrderReady
     */
    public function setOrderLineItems(\Alhoqbani\SmsaWebService\Soap\Type\ArrayOfOrderLineItem $orderLineItems = null)
    {
        $this->orderLineItems = $orderLineItems;

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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\SaphOrderReady
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
