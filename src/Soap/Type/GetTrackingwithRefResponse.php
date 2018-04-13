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
 * This class stands for getTrackingwithRefResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetTrackingwithRefResponse extends AbstractStructBase
{
    /**
     * The getTrackingwithRefResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResult
     */
    public $getTrackingwithRefResult;

    /**
     * Constructor method for getTrackingwithRefResponse
     *
     * @uses GetTrackingwithRefResponse::setGetTrackingwithRefResult()
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResult $getTrackingwithRefResult
     */
    public function __construct(\Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResult $getTrackingwithRefResult = null)
    {
        $this
            ->setGetTrackingwithRefResult($getTrackingwithRefResult);
    }

    /**
     * Get getTrackingwithRefResult value
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResult|null
     */
    public function getGetTrackingwithRefResult()
    {
        return $this->getTrackingwithRefResult;
    }

    /**
     * Set getTrackingwithRefResult value
     *
     * @param \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResult $getTrackingwithRefResult
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResponse
     */
    public function setGetTrackingwithRefResult(\Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResult $getTrackingwithRefResult = null)
    {
        $this->getTrackingwithRefResult = $getTrackingwithRefResult;

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
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResponse
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
