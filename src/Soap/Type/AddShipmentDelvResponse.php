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
 * This class stands for addShipmentDelvResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class AddShipmentDelvResponse extends AbstractStructBase
{
    /**
     * The addShipmentDelvResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $addShipmentDelvResult;

    /**
     * Constructor method for addShipmentDelvResponse
     *
     * @uses AddShipmentDelvResponse::setAddShipmentDelvResult()
     *
     * @param string $addShipmentDelvResult
     */
    public function __construct($addShipmentDelvResult = null)
    {
        $this
            ->setAddShipmentDelvResult($addShipmentDelvResult);
    }

    /**
     * Get addShipmentDelvResult value
     *
     * @return string|null
     */
    public function getAddShipmentDelvResult()
    {
        return $this->addShipmentDelvResult;
    }

    /**
     * Set addShipmentDelvResult value
     *
     * @param string $addShipmentDelvResult
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\AddShipmentDelvResponse
     */
    public function setAddShipmentDelvResult($addShipmentDelvResult = null)
    {
        // validation for constraint: string
        if (!is_null($addShipmentDelvResult) && !is_string($addShipmentDelvResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addShipmentDelvResult)), __LINE__);
        }
        $this->addShipmentDelvResult = $addShipmentDelvResult;

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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\AddShipmentDelvResponse
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
