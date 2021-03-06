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
     * @var \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingwithRefResult
     */
    public $getTrackingwithRefResult;

    /**
     * Constructor method for getTrackingwithRefResponse
     *
     * @uses GetTrackingwithRefResponse::setGetTrackingwithRefResult()
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingwithRefResult $getTrackingwithRefResult
     */
    public function __construct(\Alhoqbani\SmsaWebService\Soap\Type\GetTrackingwithRefResult $getTrackingwithRefResult = null)
    {
        $this
            ->setGetTrackingwithRefResult($getTrackingwithRefResult);
    }

    /**
     * Get getTrackingwithRefResult value
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingwithRefResult|null
     */
    public function getGetTrackingwithRefResult()
    {
        return $this->getTrackingwithRefResult;
    }

    /**
     * Set getTrackingwithRefResult value
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingwithRefResult $getTrackingwithRefResult
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingwithRefResponse
     */
    public function setGetTrackingwithRefResult(\Alhoqbani\SmsaWebService\Soap\Type\GetTrackingwithRefResult $getTrackingwithRefResult = null)
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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingwithRefResponse
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
