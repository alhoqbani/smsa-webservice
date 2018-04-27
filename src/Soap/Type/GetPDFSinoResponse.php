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
 * This class stands for getPDFSinoResponse Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetPDFSinoResponse extends AbstractStructBase
{
    /**
     * The getPDFSinoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $getPDFSinoResult;

    /**
     * Constructor method for getPDFSinoResponse
     *
     * @uses GetPDFSinoResponse::setGetPDFSinoResult()
     *
     * @param string $getPDFSinoResult
     */
    public function __construct($getPDFSinoResult = null)
    {
        $this
            ->setGetPDFSinoResult($getPDFSinoResult);
    }

    /**
     * Get getPDFSinoResult value
     *
     * @return string|null
     */
    public function getGetPDFSinoResult()
    {
        return $this->getPDFSinoResult;
    }

    /**
     * Set getPDFSinoResult value
     *
     * @param string $getPDFSinoResult
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetPDFSinoResponse
     */
    public function setGetPDFSinoResult($getPDFSinoResult = null)
    {
        // validation for constraint: string
        if (!is_null($getPDFSinoResult) && !is_string($getPDFSinoResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getPDFSinoResult)), __LINE__);
        }
        $this->getPDFSinoResult = $getPDFSinoResult;

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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetPDFSinoResponse
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
