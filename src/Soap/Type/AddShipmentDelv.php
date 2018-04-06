<?php

namespace Alhoqbani\SMSAWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addShipmentDelv Type
 * @subpackage Structs
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class AddShipmentDelv extends AbstractStructBase
{
    /**
     * The PCs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $PCs;
    /**
     * The passKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $passKey;
    /**
     * The refNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $refNo;
    /**
     * The sentDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $sentDate;
    /**
     * The idNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $idNo;
    /**
     * The cName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cName;
    /**
     * The cntry
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cntry;
    /**
     * The cCity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cCity;
    /**
     * The cZip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cZip;
    /**
     * The cPOBox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cPOBox;
    /**
     * The cMobile
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cMobile;
    /**
     * The cTel1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cTel1;
    /**
     * The cTel2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cTel2;
    /**
     * The cAddr1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cAddr1;
    /**
     * The cAddr2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cAddr2;
    /**
     * The shipType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $shipType;
    /**
     * The cEmail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cEmail;
    /**
     * The carrValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $carrValue;
    /**
     * The carrCurr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $carrCurr;
    /**
     * The codAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $codAmt;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $weight;
    /**
     * The custVal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $custVal;
    /**
     * The custCurr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $custCurr;
    /**
     * The insrAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $insrAmt;
    /**
     * The insrCurr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $insrCurr;
    /**
     * The itemDesc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $itemDesc;
    /**
     * The prefDelvDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $prefDelvDate;
    /**
     * The gpsPoints
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $gpsPoints;
    /**
     * Constructor method for addShipmentDelv
     * @uses AddShipmentDelv::setPCs()
     * @uses AddShipmentDelv::setPassKey()
     * @uses AddShipmentDelv::setRefNo()
     * @uses AddShipmentDelv::setSentDate()
     * @uses AddShipmentDelv::setIdNo()
     * @uses AddShipmentDelv::setCName()
     * @uses AddShipmentDelv::setCntry()
     * @uses AddShipmentDelv::setCCity()
     * @uses AddShipmentDelv::setCZip()
     * @uses AddShipmentDelv::setCPOBox()
     * @uses AddShipmentDelv::setCMobile()
     * @uses AddShipmentDelv::setCTel1()
     * @uses AddShipmentDelv::setCTel2()
     * @uses AddShipmentDelv::setCAddr1()
     * @uses AddShipmentDelv::setCAddr2()
     * @uses AddShipmentDelv::setShipType()
     * @uses AddShipmentDelv::setCEmail()
     * @uses AddShipmentDelv::setCarrValue()
     * @uses AddShipmentDelv::setCarrCurr()
     * @uses AddShipmentDelv::setCodAmt()
     * @uses AddShipmentDelv::setWeight()
     * @uses AddShipmentDelv::setCustVal()
     * @uses AddShipmentDelv::setCustCurr()
     * @uses AddShipmentDelv::setInsrAmt()
     * @uses AddShipmentDelv::setInsrCurr()
     * @uses AddShipmentDelv::setItemDesc()
     * @uses AddShipmentDelv::setPrefDelvDate()
     * @uses AddShipmentDelv::setGpsPoints()
     * @param int $pCs
     * @param string $passKey
     * @param string $refNo
     * @param string $sentDate
     * @param string $idNo
     * @param string $cName
     * @param string $cntry
     * @param string $cCity
     * @param string $cZip
     * @param string $cPOBox
     * @param string $cMobile
     * @param string $cTel1
     * @param string $cTel2
     * @param string $cAddr1
     * @param string $cAddr2
     * @param string $shipType
     * @param string $cEmail
     * @param string $carrValue
     * @param string $carrCurr
     * @param string $codAmt
     * @param string $weight
     * @param string $custVal
     * @param string $custCurr
     * @param string $insrAmt
     * @param string $insrCurr
     * @param string $itemDesc
     * @param string $prefDelvDate
     * @param string $gpsPoints
     */
    public function __construct($pCs = null, $passKey = null, $refNo = null, $sentDate = null, $idNo = null, $cName = null, $cntry = null, $cCity = null, $cZip = null, $cPOBox = null, $cMobile = null, $cTel1 = null, $cTel2 = null, $cAddr1 = null, $cAddr2 = null, $shipType = null, $cEmail = null, $carrValue = null, $carrCurr = null, $codAmt = null, $weight = null, $custVal = null, $custCurr = null, $insrAmt = null, $insrCurr = null, $itemDesc = null, $prefDelvDate = null, $gpsPoints = null)
    {
        $this
            ->setPCs($pCs)
            ->setPassKey($passKey)
            ->setRefNo($refNo)
            ->setSentDate($sentDate)
            ->setIdNo($idNo)
            ->setCName($cName)
            ->setCntry($cntry)
            ->setCCity($cCity)
            ->setCZip($cZip)
            ->setCPOBox($cPOBox)
            ->setCMobile($cMobile)
            ->setCTel1($cTel1)
            ->setCTel2($cTel2)
            ->setCAddr1($cAddr1)
            ->setCAddr2($cAddr2)
            ->setShipType($shipType)
            ->setCEmail($cEmail)
            ->setCarrValue($carrValue)
            ->setCarrCurr($carrCurr)
            ->setCodAmt($codAmt)
            ->setWeight($weight)
            ->setCustVal($custVal)
            ->setCustCurr($custCurr)
            ->setInsrAmt($insrAmt)
            ->setInsrCurr($insrCurr)
            ->setItemDesc($itemDesc)
            ->setPrefDelvDate($prefDelvDate)
            ->setGpsPoints($gpsPoints);
    }
    /**
     * Get PCs value
     * @return int
     */
    public function getPCs()
    {
        return $this->PCs;
    }
    /**
     * Set PCs value
     * @param int $pCs
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setPCs($pCs = null)
    {
        // validation for constraint: int
        if (!is_null($pCs) && !is_numeric($pCs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pCs)), __LINE__);
        }
        $this->PCs = $pCs;
        return $this;
    }
    /**
     * Get passKey value
     * @return string|null
     */
    public function getPassKey()
    {
        return $this->passKey;
    }
    /**
     * Set passKey value
     * @param string $passKey
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
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
     * Get refNo value
     * @return string|null
     */
    public function getRefNo()
    {
        return $this->refNo;
    }
    /**
     * Set refNo value
     * @param string $refNo
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setRefNo($refNo = null)
    {
        // validation for constraint: string
        if (!is_null($refNo) && !is_string($refNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refNo)), __LINE__);
        }
        $this->refNo = $refNo;
        return $this;
    }
    /**
     * Get sentDate value
     * @return string|null
     */
    public function getSentDate()
    {
        return $this->sentDate;
    }
    /**
     * Set sentDate value
     * @param string $sentDate
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setSentDate($sentDate = null)
    {
        // validation for constraint: string
        if (!is_null($sentDate) && !is_string($sentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sentDate)), __LINE__);
        }
        $this->sentDate = $sentDate;
        return $this;
    }
    /**
     * Get idNo value
     * @return string|null
     */
    public function getIdNo()
    {
        return $this->idNo;
    }
    /**
     * Set idNo value
     * @param string $idNo
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setIdNo($idNo = null)
    {
        // validation for constraint: string
        if (!is_null($idNo) && !is_string($idNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($idNo)), __LINE__);
        }
        $this->idNo = $idNo;
        return $this;
    }
    /**
     * Get cName value
     * @return string|null
     */
    public function getCName()
    {
        return $this->cName;
    }
    /**
     * Set cName value
     * @param string $cName
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCName($cName = null)
    {
        // validation for constraint: string
        if (!is_null($cName) && !is_string($cName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cName)), __LINE__);
        }
        $this->cName = $cName;
        return $this;
    }
    /**
     * Get cntry value
     * @return string|null
     */
    public function getCntry()
    {
        return $this->cntry;
    }
    /**
     * Set cntry value
     * @param string $cntry
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCntry($cntry = null)
    {
        // validation for constraint: string
        if (!is_null($cntry) && !is_string($cntry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cntry)), __LINE__);
        }
        $this->cntry = $cntry;
        return $this;
    }
    /**
     * Get cCity value
     * @return string|null
     */
    public function getCCity()
    {
        return $this->cCity;
    }
    /**
     * Set cCity value
     * @param string $cCity
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCCity($cCity = null)
    {
        // validation for constraint: string
        if (!is_null($cCity) && !is_string($cCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cCity)), __LINE__);
        }
        $this->cCity = $cCity;
        return $this;
    }
    /**
     * Get cZip value
     * @return string|null
     */
    public function getCZip()
    {
        return $this->cZip;
    }
    /**
     * Set cZip value
     * @param string $cZip
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCZip($cZip = null)
    {
        // validation for constraint: string
        if (!is_null($cZip) && !is_string($cZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cZip)), __LINE__);
        }
        $this->cZip = $cZip;
        return $this;
    }
    /**
     * Get cPOBox value
     * @return string|null
     */
    public function getCPOBox()
    {
        return $this->cPOBox;
    }
    /**
     * Set cPOBox value
     * @param string $cPOBox
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCPOBox($cPOBox = null)
    {
        // validation for constraint: string
        if (!is_null($cPOBox) && !is_string($cPOBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cPOBox)), __LINE__);
        }
        $this->cPOBox = $cPOBox;
        return $this;
    }
    /**
     * Get cMobile value
     * @return string|null
     */
    public function getCMobile()
    {
        return $this->cMobile;
    }
    /**
     * Set cMobile value
     * @param string $cMobile
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCMobile($cMobile = null)
    {
        // validation for constraint: string
        if (!is_null($cMobile) && !is_string($cMobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cMobile)), __LINE__);
        }
        $this->cMobile = $cMobile;
        return $this;
    }
    /**
     * Get cTel1 value
     * @return string|null
     */
    public function getCTel1()
    {
        return $this->cTel1;
    }
    /**
     * Set cTel1 value
     * @param string $cTel1
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCTel1($cTel1 = null)
    {
        // validation for constraint: string
        if (!is_null($cTel1) && !is_string($cTel1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cTel1)), __LINE__);
        }
        $this->cTel1 = $cTel1;
        return $this;
    }
    /**
     * Get cTel2 value
     * @return string|null
     */
    public function getCTel2()
    {
        return $this->cTel2;
    }
    /**
     * Set cTel2 value
     * @param string $cTel2
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCTel2($cTel2 = null)
    {
        // validation for constraint: string
        if (!is_null($cTel2) && !is_string($cTel2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cTel2)), __LINE__);
        }
        $this->cTel2 = $cTel2;
        return $this;
    }
    /**
     * Get cAddr1 value
     * @return string|null
     */
    public function getCAddr1()
    {
        return $this->cAddr1;
    }
    /**
     * Set cAddr1 value
     * @param string $cAddr1
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCAddr1($cAddr1 = null)
    {
        // validation for constraint: string
        if (!is_null($cAddr1) && !is_string($cAddr1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cAddr1)), __LINE__);
        }
        $this->cAddr1 = $cAddr1;
        return $this;
    }
    /**
     * Get cAddr2 value
     * @return string|null
     */
    public function getCAddr2()
    {
        return $this->cAddr2;
    }
    /**
     * Set cAddr2 value
     * @param string $cAddr2
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCAddr2($cAddr2 = null)
    {
        // validation for constraint: string
        if (!is_null($cAddr2) && !is_string($cAddr2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cAddr2)), __LINE__);
        }
        $this->cAddr2 = $cAddr2;
        return $this;
    }
    /**
     * Get shipType value
     * @return string|null
     */
    public function getShipType()
    {
        return $this->shipType;
    }
    /**
     * Set shipType value
     * @param string $shipType
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setShipType($shipType = null)
    {
        // validation for constraint: string
        if (!is_null($shipType) && !is_string($shipType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipType)), __LINE__);
        }
        $this->shipType = $shipType;
        return $this;
    }
    /**
     * Get cEmail value
     * @return string|null
     */
    public function getCEmail()
    {
        return $this->cEmail;
    }
    /**
     * Set cEmail value
     * @param string $cEmail
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCEmail($cEmail = null)
    {
        // validation for constraint: string
        if (!is_null($cEmail) && !is_string($cEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cEmail)), __LINE__);
        }
        $this->cEmail = $cEmail;
        return $this;
    }
    /**
     * Get carrValue value
     * @return string|null
     */
    public function getCarrValue()
    {
        return $this->carrValue;
    }
    /**
     * Set carrValue value
     * @param string $carrValue
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCarrValue($carrValue = null)
    {
        // validation for constraint: string
        if (!is_null($carrValue) && !is_string($carrValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrValue)), __LINE__);
        }
        $this->carrValue = $carrValue;
        return $this;
    }
    /**
     * Get carrCurr value
     * @return string|null
     */
    public function getCarrCurr()
    {
        return $this->carrCurr;
    }
    /**
     * Set carrCurr value
     * @param string $carrCurr
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCarrCurr($carrCurr = null)
    {
        // validation for constraint: string
        if (!is_null($carrCurr) && !is_string($carrCurr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrCurr)), __LINE__);
        }
        $this->carrCurr = $carrCurr;
        return $this;
    }
    /**
     * Get codAmt value
     * @return string|null
     */
    public function getCodAmt()
    {
        return $this->codAmt;
    }
    /**
     * Set codAmt value
     * @param string $codAmt
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCodAmt($codAmt = null)
    {
        // validation for constraint: string
        if (!is_null($codAmt) && !is_string($codAmt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codAmt)), __LINE__);
        }
        $this->codAmt = $codAmt;
        return $this;
    }
    /**
     * Get weight value
     * @return string|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param string $weight
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get custVal value
     * @return string|null
     */
    public function getCustVal()
    {
        return $this->custVal;
    }
    /**
     * Set custVal value
     * @param string $custVal
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCustVal($custVal = null)
    {
        // validation for constraint: string
        if (!is_null($custVal) && !is_string($custVal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custVal)), __LINE__);
        }
        $this->custVal = $custVal;
        return $this;
    }
    /**
     * Get custCurr value
     * @return string|null
     */
    public function getCustCurr()
    {
        return $this->custCurr;
    }
    /**
     * Set custCurr value
     * @param string $custCurr
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setCustCurr($custCurr = null)
    {
        // validation for constraint: string
        if (!is_null($custCurr) && !is_string($custCurr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custCurr)), __LINE__);
        }
        $this->custCurr = $custCurr;
        return $this;
    }
    /**
     * Get insrAmt value
     * @return string|null
     */
    public function getInsrAmt()
    {
        return $this->insrAmt;
    }
    /**
     * Set insrAmt value
     * @param string $insrAmt
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setInsrAmt($insrAmt = null)
    {
        // validation for constraint: string
        if (!is_null($insrAmt) && !is_string($insrAmt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insrAmt)), __LINE__);
        }
        $this->insrAmt = $insrAmt;
        return $this;
    }
    /**
     * Get insrCurr value
     * @return string|null
     */
    public function getInsrCurr()
    {
        return $this->insrCurr;
    }
    /**
     * Set insrCurr value
     * @param string $insrCurr
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setInsrCurr($insrCurr = null)
    {
        // validation for constraint: string
        if (!is_null($insrCurr) && !is_string($insrCurr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insrCurr)), __LINE__);
        }
        $this->insrCurr = $insrCurr;
        return $this;
    }
    /**
     * Get itemDesc value
     * @return string|null
     */
    public function getItemDesc()
    {
        return $this->itemDesc;
    }
    /**
     * Set itemDesc value
     * @param string $itemDesc
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setItemDesc($itemDesc = null)
    {
        // validation for constraint: string
        if (!is_null($itemDesc) && !is_string($itemDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemDesc)), __LINE__);
        }
        $this->itemDesc = $itemDesc;
        return $this;
    }
    /**
     * Get prefDelvDate value
     * @return string|null
     */
    public function getPrefDelvDate()
    {
        return $this->prefDelvDate;
    }
    /**
     * Set prefDelvDate value
     * @param string $prefDelvDate
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setPrefDelvDate($prefDelvDate = null)
    {
        // validation for constraint: string
        if (!is_null($prefDelvDate) && !is_string($prefDelvDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefDelvDate)), __LINE__);
        }
        $this->prefDelvDate = $prefDelvDate;
        return $this;
    }
    /**
     * Get gpsPoints value
     * @return string|null
     */
    public function getGpsPoints()
    {
        return $this->gpsPoints;
    }
    /**
     * Set gpsPoints value
     * @param string $gpsPoints
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public function setGpsPoints($gpsPoints = null)
    {
        // validation for constraint: string
        if (!is_null($gpsPoints) && !is_string($gpsPoints)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gpsPoints)), __LINE__);
        }
        $this->gpsPoints = $gpsPoints;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Alhoqbani\SMSAWebService\Soap\Type\AddShipmentDelv
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
