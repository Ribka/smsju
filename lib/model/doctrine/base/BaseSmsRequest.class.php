<?php

/**
 * BaseSmsRequest
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $requested_by
 * @property string $email
 * @property string $requested_item
 * @property integer $requested_quantity
 * @property string $description
 * @property string $request_status
 * @property integer $given_quantity
 * 
 * @method string     getRequestedBy()        Returns the current record's "requested_by" value
 * @method string     getEmail()              Returns the current record's "email" value
 * @method string     getRequestedItem()      Returns the current record's "requested_item" value
 * @method integer    getRequestedQuantity()  Returns the current record's "requested_quantity" value
 * @method string     getDescription()        Returns the current record's "description" value
 * @method string     getRequestStatus()      Returns the current record's "request_status" value
 * @method integer    getGivenQuantity()      Returns the current record's "given_quantity" value
 * @method SmsRequest setRequestedBy()        Sets the current record's "requested_by" value
 * @method SmsRequest setEmail()              Sets the current record's "email" value
 * @method SmsRequest setRequestedItem()      Sets the current record's "requested_item" value
 * @method SmsRequest setRequestedQuantity()  Sets the current record's "requested_quantity" value
 * @method SmsRequest setDescription()        Sets the current record's "description" value
 * @method SmsRequest setRequestStatus()      Sets the current record's "request_status" value
 * @method SmsRequest setGivenQuantity()      Sets the current record's "given_quantity" value
 * 
 * @package    sms
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSmsRequest extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sms_request');
        $this->hasColumn('requested_by', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('requested_item', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('requested_quantity', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('description', 'string', 4000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 4000,
             ));
        $this->hasColumn('request_status', 'string', 250, array(
             'type' => 'string',
             'notnull' => true,
             'default' => 'not-viewed',
             'length' => 250,
             ));
        $this->hasColumn('given_quantity', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}