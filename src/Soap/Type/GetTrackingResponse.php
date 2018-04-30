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
 * This class stands for getTrackingResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetTrackingResponse extends AbstractStructBase
{
    /**
     * The getTrackingResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingResult
     */
    public $getTrackingResult;

    /**
     * Constructor method for getTrackingResponse
     *
     * @uses GetTrackingResponse::setGetTrackingResult()
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingResult $getTrackingResult
     */
    public function __construct(\Alhoqbani\SmsaWebService\Soap\Type\GetTrackingResult $getTrackingResult = null)
    {
        $this
            ->setGetTrackingResult($getTrackingResult);
    }

    /**
     * Get getTrackingResult value
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingResult|null
     */
    public function getGetTrackingResult()
    {
        return $this->getTrackingResult;
    }

    /**
     * Set getTrackingResult value
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingResult $getTrackingResult
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingResponse
     */
    public function setGetTrackingResult(\Alhoqbani\SmsaWebService\Soap\Type\GetTrackingResult $getTrackingResult = null)
    {
        $this->getTrackingResult = $getTrackingResult;

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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetTrackingResponse
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
