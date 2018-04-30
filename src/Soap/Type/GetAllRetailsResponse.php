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
 * This class stands for getAllRetailsResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetAllRetailsResponse extends AbstractStructBase
{
    /**
     * The getAllRetailsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Alhoqbani\SmsaWebService\Soap\Type\GetAllRetailsResult
     */
    public $getAllRetailsResult;

    /**
     * Constructor method for getAllRetailsResponse
     *
     * @uses GetAllRetailsResponse::setGetAllRetailsResult()
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetAllRetailsResult $getAllRetailsResult
     */
    public function __construct(\Alhoqbani\SmsaWebService\Soap\Type\GetAllRetailsResult $getAllRetailsResult = null)
    {
        $this
            ->setGetAllRetailsResult($getAllRetailsResult);
    }

    /**
     * Get getAllRetailsResult value
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetAllRetailsResult|null
     */
    public function getGetAllRetailsResult()
    {
        return $this->getAllRetailsResult;
    }

    /**
     * Set getAllRetailsResult value
     *
     * @param \Alhoqbani\SmsaWebService\Soap\Type\GetAllRetailsResult $getAllRetailsResult
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetAllRetailsResponse
     */
    public function setGetAllRetailsResult(\Alhoqbani\SmsaWebService\Soap\Type\GetAllRetailsResult $getAllRetailsResult = null)
    {
        $this->getAllRetailsResult = $getAllRetailsResult;

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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetAllRetailsResponse
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
