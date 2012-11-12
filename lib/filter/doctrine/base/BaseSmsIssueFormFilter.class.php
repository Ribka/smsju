<?php

/**
 * SmsIssue filter form base class.
 *
 * @package    sms
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSmsIssueFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'exit_number'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'issue_type'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'item_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SmsItem'), 'add_empty' => true)),
      'reciept_referrence_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SmsStockReciept'), 'add_empty' => true)),
      'serial_number'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'storekeeper_id'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'borrower_id'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'quantity'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'           => new sfWidgetFormFilterInput(),
      'created_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'exit_number'           => new sfValidatorPass(array('required' => false)),
      'issue_type'            => new sfValidatorPass(array('required' => false)),
      'item_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SmsItem'), 'column' => 'id')),
      'reciept_referrence_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SmsStockReciept'), 'column' => 'id')),
      'serial_number'         => new sfValidatorPass(array('required' => false)),
      'storekeeper_id'        => new sfValidatorPass(array('required' => false)),
      'borrower_id'           => new sfValidatorPass(array('required' => false)),
      'quantity'              => new sfValidatorPass(array('required' => false)),
      'description'           => new sfValidatorPass(array('required' => false)),
      'created_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sms_issue_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SmsIssue';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'exit_number'           => 'Text',
      'issue_type'            => 'Text',
      'item_id'               => 'ForeignKey',
      'reciept_referrence_id' => 'ForeignKey',
      'serial_number'         => 'Text',
      'storekeeper_id'        => 'Text',
      'borrower_id'           => 'Text',
      'quantity'              => 'Text',
      'description'           => 'Text',
      'created_at'            => 'Date',
      'updated_at'            => 'Date',
    );
  }
}
