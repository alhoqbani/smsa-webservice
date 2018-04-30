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
 * This class stands for cancelShipmentResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class CancelShipmentResponse extends AbstractStructBase
{
    /**
     * The cancelShipmentResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $cancelShipmentResult;

    /**
     * Constructor method for cancelShipmentResponse
     *
     * @uses CancelShipmentResponse::setCancelShipmentResult()
     *
     * @param string $cancelShipmentResult
     */
    public function __construct($cancelShipmentResult = null)
    {
        $this
            ->setCancelShipmentResult($cancelShipmentResult);
    }

    /**
     * Get cancelShipmentResult value
     *
     * @return string|null
     */
    public function getCancelShipmentResult()
    {
        return $this->cancelShipmentResult;
    }

    /**
     * Set cancelShipmentResult value
     *
     * @param string $cancelShipmentResult
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\CancelShipmentResponse
     */
    public function setCancelShipmentResult($cancelShipmentResult = null)
    {
        // validation for constraint: string
        if (!is_null($cancelShipmentResult) && !is_string($cancelShipmentResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelShipmentResult)), __LINE__);
        }
        $this->cancelShipmentResult = $cancelShipmentResult;

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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\CancelShipmentResponse
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
