<?php

/**
 * SmsReturn filter form base class.
 *
 * @package    sms
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSmsReturnFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'return_type'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'exit_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SmsIssue'), 'add_empty' => true)),
      'item_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'return_number'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'employee_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'store_keeper_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'quantity'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'return_type'     => new sfValidatorPass(array('required' => false)),
      'exit_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SmsIssue'), 'column' => 'id')),
      'item_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'return_number'   => new sfValidatorPass(array('required' => false)),
      'employee_id'     => new sfValidatorPass(array('required' => false)),
      'store_keeper_id' => new sfValidatorPass(array('required' => false)),
      'quantity'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'     => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sms_return_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SmsReturn';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'return_type'     => 'Text',
      'exit_id'         => 'ForeignKey',
      'item_id'         => 'Number',
      'return_number'   => 'Text',
      'employee_id'     => 'Text',
      'store_keeper_id' => 'Text',
      'quantity'        => 'Number',
      'description'     => 'Text',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
