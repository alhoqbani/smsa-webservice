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
 * This class stands for getShipUpdatesResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetShipUpdatesResponse extends AbstractStructBase
{
    /**
     * The getShipUpdatesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdatesResult
     */
    public $getShipUpdatesResult;

    /**
     * Constructor method for getShipUpdatesResponse
     *
     * @uses GetShipUpdatesResponse::setGetShipUpdatesResult()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdatesResult $getShipUpdatesResult
     */
    public function __construct(\Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdatesResult $getShipUpdatesResult = null)
    {
        $this
            ->setGetShipUpdatesResult($getShipUpdatesResult);
    }

    /**
     * Get getShipUpdatesResult value
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdatesResult|null
     */
    public function getGetShipUpdatesResult()
    {
        return $this->getShipUpdatesResult;
    }

    /**
     * Set getShipUpdatesResult value
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdatesResult $getShipUpdatesResult
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdatesResponse
     */
    public function setGetShipUpdatesResult(\Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdatesResult $getShipUpdatesResult = null)
    {
        $this->getShipUpdatesResult = $getShipUpdatesResult;

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
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetShipUpdatesResponse
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
