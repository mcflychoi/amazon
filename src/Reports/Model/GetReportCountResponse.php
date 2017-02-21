<?php
namespace Amazon\Reports\Model;
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebService
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-01-01
 */
/******************************************************************************* 

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 * 
 */

/**
 *  @see Amazon\Reports\Model
 */

use Amazon\Reports\Model;  

    

/**
 * \Amazon\Reports\Model\GetReportCountResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetReportCountResult: \Amazon\Reports\Model\GetReportCountResult</li>
 * <li>ResponseMetadata: \Amazon\Reports\Model\ResponseMetadata</li>
 *
 * </ul>
 */ 
class GetReportCountResponse extends Model
{


    /**
     * Construct new \Amazon\Reports\Model\GetReportCountResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetReportCountResult: \Amazon\Reports\Model\GetReportCountResult</li>
     * <li>ResponseMetadata: \Amazon\Reports\Model\ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'GetReportCountResult' => array('FieldValue' => null, 'FieldType' => '\Amazon\Reports\Model\GetReportCountResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => '\Amazon\Reports\Model\ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct \Amazon\Reports\Model\GetReportCountResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return \Amazon\Reports\Model\GetReportCountResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetReportCountResponse');
        if ($response->length == 1) {
            return new \Amazon\Reports\Model\GetReportCountResponse(($response->item(0))); 
        } else {
            throw new \Exception ("Unable to construct \Amazon\Reports\Model\GetReportCountResponse from provided XML. 
                                  Make sure that GetReportCountResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetReportCountResult.
     * 
     * @return GetReportCountResult GetReportCountResult
     */
    public function getGetReportCountResult() 
    {
        return $this->fields['GetReportCountResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetReportCountResult.
     * 
     * @param GetReportCountResult GetReportCountResult
     * @return void
     */
    public function setGetReportCountResult($value) 
    {
        $this->fields['GetReportCountResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetReportCountResult  and returns this instance
     * 
     * @param GetReportCountResult $value GetReportCountResult
     * @return \Amazon\Reports\Model\GetReportCountResponse instance
     */
    public function withGetReportCountResult($value)
    {
        $this->setGetReportCountResult($value);
        return $this;
    }


    /**
     * Checks if GetReportCountResult  is set
     * 
     * @return bool true if GetReportCountResult property is set
     */
    public function isSetGetReportCountResult()
    {
        return !is_null($this->fields['GetReportCountResult']['FieldValue']);

    }

    /**
     * Gets the value of the ResponseMetadata.
     * 
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata() 
    {
        return $this->fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Sets the value of the ResponseMetadata.
     * 
     * @param ResponseMetadata ResponseMetadata
     * @return void
     */
    public function setResponseMetadata($value) 
    {
        $this->fields['ResponseMetadata']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ResponseMetadata  and returns this instance
     * 
     * @param ResponseMetadata $value ResponseMetadata
     * @return \Amazon\Reports\Model\GetReportCountResponse instance
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }


    /**
     * Checks if ResponseMetadata  is set
     * 
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->fields['ResponseMetadata']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<GetReportCountResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetReportCountResponse>";
        return $xml;
    }

    private $_responseHeaderMetadata = null;

    public function getResponseHeaderMetadata() {
      return $this->_responseHeaderMetadata;
    }

    public function setResponseHeaderMetadata($responseHeaderMetadata) {
      return $this->_responseHeaderMetadata = $responseHeaderMetadata;
    }
}
