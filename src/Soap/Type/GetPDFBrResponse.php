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
 * This class stands for getPDFBrResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetPDFBrResponse extends AbstractStructBase
{
    /**
     * The getPDFBrResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $getPDFBrResult;

    /**
     * Constructor method for getPDFBrResponse
     *
     * @uses GetPDFBrResponse::setGetPDFBrResult()
     *
     * @param string $getPDFBrResult
     */
    public function __construct($getPDFBrResult = null)
    {
        $this
            ->setGetPDFBrResult($getPDFBrResult);
    }

    /**
     * Get getPDFBrResult value
     *
     * @return string|null
     */
    public function getGetPDFBrResult()
    {
        return $this->getPDFBrResult;
    }

    /**
     * Set getPDFBrResult value
     *
     * @param string $getPDFBrResult
     *
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetPDFBrResponse
     */
    public function setGetPDFBrResult($getPDFBrResult = null)
    {
        // validation for constraint: string
        if (!is_null($getPDFBrResult) && !is_string($getPDFBrResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getPDFBrResult)), __LINE__);
        }
        $this->getPDFBrResult = $getPDFBrResult;

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
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetPDFBrResponse
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
