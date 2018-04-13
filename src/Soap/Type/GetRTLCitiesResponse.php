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
 * This class stands for getRTLCitiesResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetRTLCitiesResponse extends AbstractStructBase
{
    /**
     * The getRTLCitiesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Alhoqbani\SMSAWebService\Soap\Type\GetRTLCitiesResult
     */
    public $getRTLCitiesResult;

    /**
     * Constructor method for getRTLCitiesResponse
     *
     * @uses GetRTLCitiesResponse::setGetRTLCitiesResult()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetRTLCitiesResult $getRTLCitiesResult
     */
    public function __construct(\Alhoqbani\SMSAWebService\Soap\Type\GetRTLCitiesResult $getRTLCitiesResult = null)
    {
        $this
            ->setGetRTLCitiesResult($getRTLCitiesResult);
    }

    /**
     * Get getRTLCitiesResult value
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetRTLCitiesResult|null
     */
    public function getGetRTLCitiesResult()
    {
        return $this->getRTLCitiesResult;
    }

    /**
     * Set getRTLCitiesResult value
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetRTLCitiesResult $getRTLCitiesResult
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetRTLCitiesResponse
     */
    public function setGetRTLCitiesResult(\Alhoqbani\SMSAWebService\Soap\Type\GetRTLCitiesResult $getRTLCitiesResult = null)
    {
        $this->getRTLCitiesResult = $getRTLCitiesResult;

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
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetRTLCitiesResponse
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
