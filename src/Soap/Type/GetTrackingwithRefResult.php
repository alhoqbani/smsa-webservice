<?php

namespace Alhoqbani\SMSAWebService\Soap\Type;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTrackingwithRefResult Type
 * @subpackage Structs
 * @date 2018/04/06
 * @codeVersion 0.0.1
 */
class GetTrackingwithRefResult extends AbstractStructBase
{
    /**
     * The schema
     * Meta informations extracted from the WSDL
     * - ref: s:schema
     * @var \DOMDocument
     */
    public $schema;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for getTrackingwithRefResult
     * @uses GetTrackingwithRefResult::setSchema()
     * @uses GetTrackingwithRefResult::setAny()
     * @param \DOMDocument $schema
     * @param \DOMDocument $any
     */
    public function __construct(\DOMDocument $schema = null, \DOMDocument $any = null)
    {
        $this
            ->setSchema($schema)
            ->setAny($any);
    }
    /**
     * Get schema value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResult::setSchema()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getSchema($asString = true)
    {
        if (!empty($this->schema) && !($this->schema instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->schema)) {
                $this->setSchema($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->schema instanceof \DOMDocument) && $this->schema->hasChildNodes()) ? $this->schema->saveXML($this->schema->childNodes->item(0)) : $this->schema;
    }
    /**
     * Set schema value
     * @param \DOMDocument $schema
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResult
     */
    public function setSchema(\DOMDocument $schema = null)
    {
        $this->schema = $schema;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResult::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResult
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Alhoqbani\SMSAWebService\Soap\Type\GetTrackingwithRefResult
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
