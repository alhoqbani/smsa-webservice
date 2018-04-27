<?php

/*
 * This file is part of Smsa WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SmsaWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOrderLineItem Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class ArrayOfOrderLineItem extends AbstractStructArrayBase
{
    /**
     * The OrderLineItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem[]
     */
    public $OrderLineItem;

    /**
     * Constructor method for ArrayOfOrderLineItem
     *
     * @uses ArrayOfOrderLineItem::setOrderLineItem()
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem[] $orderLineItem
     */
    public function __construct(array $orderLineItem = [])
    {
        $this
            ->setOrderLineItem($orderLineItem);
    }

    /**
     * Get OrderLineItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem[]|null
     */
    public function getOrderLineItem()
    {
        return isset($this->OrderLineItem) ? $this->OrderLineItem : null;
    }

    /**
     * Set OrderLineItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem[] $orderLineItem
     *
     * @throws \InvalidArgumentException
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\ArrayOfOrderLineItem
     */
    public function setOrderLineItem(array $orderLineItem = [])
    {
        foreach ($orderLineItem as $arrayOfOrderLineItemOrderLineItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrderLineItemOrderLineItemItem instanceof \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem) {
                throw new \InvalidArgumentException(sprintf('The OrderLineItem property can only contain items of \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem, "%s" given', is_object($arrayOfOrderLineItemOrderLineItemItem) ? get_class($arrayOfOrderLineItemOrderLineItemItem) : gettype($arrayOfOrderLineItemOrderLineItemItem)), __LINE__);
            }
        }
        if (is_null($orderLineItem) || (is_array($orderLineItem) && empty($orderLineItem))) {
            unset($this->OrderLineItem);
        } else {
            $this->OrderLineItem = $orderLineItem;
        }

        return $this;
    }

    /**
     * Add item to OrderLineItem value
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem $item
     *
     * @throws \InvalidArgumentException
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\ArrayOfOrderLineItem
     */
    public function addToOrderLineItem(\Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem) {
            throw new \InvalidArgumentException(sprintf('The OrderLineItem property can only contain items of \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OrderLineItem[] = $item;

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem|null
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @see AbstractStructArrayBase::item()
     *
     * @param int $index
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem|null
     */
    public function first()
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem|null
     */
    public function last()
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @see AbstractStructArrayBase::offsetGet()
     *
     * @param int $offset
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\OrderLineItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string OrderLineItem
     */
    public function getAttributeName()
    {
        return 'OrderLineItem';
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see AbstractStructArrayBase::__set_state()
     *
     * @uses AbstractStructArrayBase::__set_state()
     *
     * @param array $array the exported values
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\ArrayOfOrderLineItem
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
