<?php

/**
 * SmsIssue form base class.
 *
 * @method SmsIssue getObject() Returns the current form's model object
 *
 * @package    sms
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSmsIssueForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'exit_number'           => new sfWidgetFormInputText(),
      'issue_type'            => new sfWidgetFormInputText(),
      'item_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SmsItem'), 'add_empty' => false)),
      'reciept_referrence_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SmsStockReciept'), 'add_empty' => false)),
      'serial_number'         => new sfWidgetFormInputText(),
      'storekeeper_id'        => new sfWidgetFormInputText(),
      'borrower_id'           => new sfWidgetFormInputText(),
      'quantity'              => new sfWidgetFormInputText(),
      'description'           => new sfWidgetFormTextarea(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'exit_number'           => new sfValidatorString(array('max_length' => 255)),
      'issue_type'            => new sfValidatorString(array('max_length' => 255)),
      'item_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SmsItem'))),
      'reciept_referrence_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SmsStockReciept'))),
      'serial_number'         => new sfValidatorString(array('max_length' => 255)),
      'storekeeper_id'        => new sfValidatorString(array('max_length' => 255)),
      'borrower_id'           => new sfValidatorString(array('max_length' => 255)),
      'quantity'              => new sfValidatorString(array('max_length' => 255)),
      'description'           => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sms_issue[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SmsIssue';
  }

}
