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
 * Amazon\Reports\Model\RequestReportResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>ReportRequestInfo: Amazon\Reports\Model\ReportRequestInfo</li>
 *
 * </ul>
 */ 
class RequestReportResult extends Model
{


    /**
     * Construct new Amazon\Reports\Model\RequestReportResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ReportRequestInfo: Amazon\Reports\Model\ReportRequestInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array
        (
            'ReportRequestInfo' => array('FieldValue' => null, 'FieldType' => '\Amazon\Reports\Model\ReportRequestInfo'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ReportRequestInfo.
     * 
     * @return ReportRequestInfo ReportRequestInfo
     */
    public function getReportRequestInfo() 
    {
        return $this->fields['ReportRequestInfo']['FieldValue'];
    }

    /**
     * Sets the value of the ReportRequestInfo.
     * 
     * @param ReportRequestInfo ReportRequestInfo
     * @return void
     */
    public function setReportRequestInfo($value) 
    {
        $this->fields['ReportRequestInfo']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ReportRequestInfo  and returns this instance
     * 
     * @param ReportRequestInfo $value ReportRequestInfo
     * @return Amazon\Reports\Model\RequestReportResult instance
     */
    public function withReportRequestInfo($value)
    {
        $this->setReportRequestInfo($value);
        return $this;
    }


    /**
     * Checks if ReportRequestInfo  is set
     * 
     * @return bool true if ReportRequestInfo property is set
     */
    public function isSetReportRequestInfo()
    {
        return !is_null($this->fields['ReportRequestInfo']['FieldValue']);

    }




}