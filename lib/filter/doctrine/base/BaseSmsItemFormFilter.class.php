<?php

/**
 * SmsItem filter form base class.
 *
 * @package    sms
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSmsItemFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'item_name'           => new sfWidgetFormFilterInput(),
      'group_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SmsGroup'), 'add_empty' => true)),
      'family_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SmsFamily'), 'add_empty' => true)),
      'item_code'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'item_type'           => new sfWidgetFormFilterInput(),
      'item_quantity'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'item_measuring_unit' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'item_description'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'item_store_id'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'item_name'           => new sfValidatorPass(array('required' => false)),
      'group_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SmsGroup'), 'column' => 'id')),
      'family_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SmsFamily'), 'column' => 'id')),
      'item_code'           => new sfValidatorPass(array('required' => false)),
      'item_type'           => new sfValidatorPass(array('required' => false)),
      'item_quantity'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'item_measuring_unit' => new sfValidatorPass(array('required' => false)),
      'item_description'    => new sfValidatorPass(array('required' => false)),
      'item_store_id'       => new sfValidatorPass(array('required' => false)),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sms_item_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SmsItem';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'item_name'           => 'Text',
      'group_id'            => 'ForeignKey',
      'family_id'           => 'ForeignKey',
      'item_code'           => 'Text',
      'item_type'           => 'Text',
      'item_quantity'       => 'Number',
      'item_measuring_unit' => 'Text',
      'item_description'    => 'Text',
      'item_store_id'       => 'Text',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
