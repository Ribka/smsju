<?php

/**
 * BaseSmsfamily
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $family_name
 * @property string $family_code
 * @property string $description
 * @property Doctrine_Collection $SmsItem
 * 
 * @method string              getFamilyName()  Returns the current record's "family_name" value
 * @method string              getFamilyCode()  Returns the current record's "family_code" value
 * @method string              getDescription() Returns the current record's "description" value
 * @method Doctrine_Collection getSmsItem()     Returns the current record's "SmsItem" collection
 * @method Smsfamily           setFamilyName()  Sets the current record's "family_name" value
 * @method Smsfamily           setFamilyCode()  Sets the current record's "family_code" value
 * @method Smsfamily           setDescription() Sets the current record's "description" value
 * @method Smsfamily           setSmsItem()     Sets the current record's "SmsItem" collection
 * 
 * @package    sms
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSmsfamily extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('smsfamily');
        $this->hasColumn('family_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('family_code', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('SmsItem', array(
             'local' => 'id',
             'foreign' => 'family_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}