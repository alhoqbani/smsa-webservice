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
 * This class stands for addShipMPSResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class AddShipMPSResponse extends AbstractStructBase
{
    /**
     * The addShipMPSResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $addShipMPSResult;

    /**
     * Constructor method for addShipMPSResponse
     *
     * @uses AddShipMPSResponse::setAddShipMPSResult()
     *
     * @param string $addShipMPSResult
     */
    public function __construct($addShipMPSResult = null)
    {
        $this
            ->setAddShipMPSResult($addShipMPSResult);
    }

    /**
     * Get addShipMPSResult value
     *
     * @return string|null
     */
    public function getAddShipMPSResult()
    {
        return $this->addShipMPSResult;
    }

    /**
     * Set addShipMPSResult value
     *
     * @param string $addShipMPSResult
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\AddShipMPSResponse
     */
    public function setAddShipMPSResult($addShipMPSResult = null)
    {
        // validation for constraint: string
        if (!is_null($addShipMPSResult) && !is_string($addShipMPSResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addShipMPSResult)), __LINE__);
        }
        $this->addShipMPSResult = $addShipMPSResult;

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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\AddShipMPSResponse
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
