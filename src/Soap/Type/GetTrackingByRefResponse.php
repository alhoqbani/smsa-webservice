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
 * This class stands for getTrackingByRefResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetTrackingByRefResponse extends AbstractStructBase
{
    /**
     * The getTrackingByRefResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingByRefResult
     */
    public $getTrackingByRefResult;

    /**
     * Constructor method for getTrackingByRefResponse
     *
     * @uses GetTrackingByRefResponse::setGetTrackingByRefResult()
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingByRefResult $getTrackingByRefResult
     */
    public function __construct(\Alhoqbani\SmsaWebService\Soap\Type\GetTrackingByRefResult $getTrackingByRefResult = null)
    {
        $this
            ->setGetTrackingByRefResult($getTrackingByRefResult);
    }

    /**
     * Get getTrackingByRefResult value
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingByRefResult|null
     */
    public function getGetTrackingByRefResult()
    {
        return $this->getTrackingByRefResult;
    }

    /**
     * Set getTrackingByRefResult value
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingByRefResult $getTrackingByRefResult
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingByRefResponse
     */
    public function setGetTrackingByRefResult(\Alhoqbani\SmsaWebService\Soap\Type\GetTrackingByRefResult $getTrackingByRefResult = null)
    {
        $this->getTrackingByRefResult = $getTrackingByRefResult;

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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingByRefResponse
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
