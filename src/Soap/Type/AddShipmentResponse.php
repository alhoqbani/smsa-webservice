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
 * This class stands for addShipmentResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class AddShipmentResponse extends AbstractStructBase
{
    /**
     * The addShipmentResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $addShipmentResult;

    /**
     * Constructor method for addShipmentResponse
     *
     * @uses AddShipmentResponse::setAddShipmentResult()
     *
     * @param string $addShipmentResult
     */
    public function __construct($addShipmentResult = null)
    {
        $this
            ->setAddShipmentResult($addShipmentResult);
    }

    /**
     * Get addShipmentResult value
     *
     * @return string|null
     */
    public function getAddShipmentResult()
    {
        return $this->addShipmentResult;
    }

    /**
     * Set addShipmentResult value
     *
     * @param string $addShipmentResult
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\AddShipmentResponse
     */
    public function setAddShipmentResult($addShipmentResult = null)
    {
        // validation for constraint: string
        if (!is_null($addShipmentResult) && !is_string($addShipmentResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addShipmentResult)), __LINE__);
        }
        $this->addShipmentResult = $addShipmentResult;

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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\AddShipmentResponse
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
