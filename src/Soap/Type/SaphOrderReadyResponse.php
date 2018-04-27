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
 * This class stands for saphOrderReadyResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class SaphOrderReadyResponse extends AbstractStructBase
{
    /**
     * The saphOrderReadyResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $saphOrderReadyResult;

    /**
     * Constructor method for saphOrderReadyResponse
     *
     * @uses SaphOrderReadyResponse::setSaphOrderReadyResult()
     *
     * @param string $saphOrderReadyResult
     */
    public function __construct($saphOrderReadyResult = null)
    {
        $this
            ->setSaphOrderReadyResult($saphOrderReadyResult);
    }

    /**
     * Get saphOrderReadyResult value
     *
     * @return string|null
     */
    public function getSaphOrderReadyResult()
    {
        return $this->saphOrderReadyResult;
    }

    /**
     * Set saphOrderReadyResult value
     *
     * @param string $saphOrderReadyResult
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\SaphOrderReadyResponse
     */
    public function setSaphOrderReadyResult($saphOrderReadyResult = null)
    {
        // validation for constraint: string
        if (!is_null($saphOrderReadyResult) && !is_string($saphOrderReadyResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($saphOrderReadyResult)), __LINE__);
        }
        $this->saphOrderReadyResult = $saphOrderReadyResult;

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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\SaphOrderReadyResponse
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
