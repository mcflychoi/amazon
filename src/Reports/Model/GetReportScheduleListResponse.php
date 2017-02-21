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
 * \Amazon\Reports\Model\GetReportScheduleListResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetReportScheduleListResult: \Amazon\Reports\Model\GetReportScheduleListResult</li>
 * <li>ResponseMetadata: \Amazon\Reports\Model\ResponseMetadata</li>
 *
 * </ul>
 */ 
class GetReportScheduleListResponse extends Model
{


    /**
     * Construct new \Amazon\Reports\Model\GetReportScheduleListResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetReportScheduleListResult: \Amazon\Reports\Model\GetReportScheduleListResult</li>
     * <li>ResponseMetadata: \Amazon\Reports\Model\ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'GetReportScheduleListResult' => array('FieldValue' => null, 'FieldType' => '\Amazon\Reports\Model\GetReportScheduleListResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => '\Amazon\Reports\Model\ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct \Amazon\Reports\Model\GetReportScheduleListResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return \Amazon\Reports\Model\GetReportScheduleListResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetReportScheduleListResponse');
        if ($response->length == 1) {
            return new \Amazon\Reports\Model\GetReportScheduleListResponse(($response->item(0))); 
        } else {
            throw new \Exception ("Unable to construct \Amazon\Reports\Model\GetReportScheduleListResponse from provided XML. 
                                  Make sure that GetReportScheduleListResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetReportScheduleListResult.
     * 
     * @return GetReportScheduleListResult GetReportScheduleListResult
     */
    public function getGetReportScheduleListResult() 
    {
        return $this->fields['GetReportScheduleListResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetReportScheduleListResult.
     * 
     * @param GetReportScheduleListResult GetReportScheduleListResult
     * @return void
     */
    public function setGetReportScheduleListResult($value) 
    {
        $this->fields['GetReportScheduleListResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetReportScheduleListResult  and returns this instance
     * 
     * @param GetReportScheduleListResult $value GetReportScheduleListResult
     * @return \Amazon\Reports\Model\GetReportScheduleListResponse instance
     */
    public function withGetReportScheduleListResult($value)
    {
        $this->setGetReportScheduleListResult($value);
        return $this;
    }


    /**
     * Checks if GetReportScheduleListResult  is set
     * 
     * @return bool true if GetReportScheduleListResult property is set
     */
    public function isSetGetReportScheduleListResult()
    {
        return !is_null($this->fields['GetReportScheduleListResult']['FieldValue']);

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
     * @return \Amazon\Reports\Model\GetReportScheduleListResponse instance
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
        $xml .= "<GetReportScheduleListResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetReportScheduleListResponse>";
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
