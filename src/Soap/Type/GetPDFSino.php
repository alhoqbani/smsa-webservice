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
 * This class stands for getPDFSino Type
 *
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetPDFSino extends AbstractStructBase
{
    /**
     * The awbNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $awbNo;
    /**
     * The passKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $passKey;

    /**
     * Constructor method for getPDFSino
     *
     * @uses GetPDFSino::setAwbNo()
     * @uses GetPDFSino::setPassKey()
     *
     * @param string $awbNo
     * @param string $passKey
     */
    public function __construct($awbNo = null, $passKey = null)
    {
        $this
            ->setAwbNo($awbNo)
            ->setPassKey($passKey);
    }

    /**
     * Get awbNo value
     *
     * @return string|null
     */
    public function getAwbNo()
    {
        return $this->awbNo;
    }

    /**
     * Set awbNo value
     *
     * @param string $awbNo
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetPDFSino
     */
    public function setAwbNo($awbNo = null)
    {
        // validation for constraint: string
        if (!is_null($awbNo) && !is_string($awbNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($awbNo)), __LINE__);
        }
        $this->awbNo = $awbNo;

        return $this;
    }

    /**
     * Get passKey value
     *
     * @return string|null
     */
    public function getPassKey()
    {
        return $this->passKey;
    }

    /**
     * Set passKey value
     *
     * @param string $passKey
     *
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetPDFSino
     */
    public function setPassKey($passKey = null)
    {
        // validation for constraint: string
        if (!is_null($passKey) && !is_string($passKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passKey)), __LINE__);
        }
        $this->passKey = $passKey;

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
     * @return \Alhoqbani\SmsaWebService\Soap\Type\GetPDFSino
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
