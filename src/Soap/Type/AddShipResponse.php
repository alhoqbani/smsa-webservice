<?php

/*
 * This file is part of SMSA WebService package.
 * (c) Hamoud Alhoqbani <h.alhoqbani@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alhoqbani\SMSAWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addShipResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class AddShipResponse extends AbstractStructBase
{
    /**
     * The addShipResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $addShipResult;

    /**
     * Constructor method for addShipResponse
     *
     * @uses AddShipResponse::setAddShipResult()
     *
     * @param string $addShipResult
     */
    public function __construct($addShipResult = null)
    {
        $this
            ->setAddShipResult($addShipResult);
    }

    /**
     * Get addShipResult value
     *
     * @return string|null
     */
    public function getAddShipResult()
    {
        return $this->addShipResult;
    }

    /**
     * Set addShipResult value
     *
     * @param string $addShipResult
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipResponse
     */
    public function setAddShipResult($addShipResult = null)
    {
        // validation for constraint: string
        if (!is_null($addShipResult) && !is_string($addShipResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addShipResult)), __LINE__);
        }
        $this->addShipResult = $addShipResult;

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
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipResponse
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
