<?php

/**
 * SmsReturn form base class.
 *
 * @method SmsReturn getObject() Returns the current form's model object
 *
 * @package    sms
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSmsReturnForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'return_type'     => new sfWidgetFormInputText(),
      'exit_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SmsIssue'), 'add_empty' => false)),
      'item_id'         => new sfWidgetFormInputText(),
      'return_number'   => new sfWidgetFormInputText(),
      'employee_id'     => new sfWidgetFormInputText(),
      'store_keeper_id' => new sfWidgetFormInputText(),
      'quantity'        => new sfWidgetFormInputText(),
      'description'     => new sfWidgetFormTextarea(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'return_type'     => new sfValidatorString(array('max_length' => 255)),
      'exit_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SmsIssue'))),
      'item_id'         => new sfValidatorInteger(),
      'return_number'   => new sfValidatorString(array('max_length' => 255)),
      'employee_id'     => new sfValidatorString(array('max_length' => 255)),
      'store_keeper_id' => new sfValidatorString(array('max_length' => 255)),
      'quantity'        => new sfValidatorInteger(),
      'description'     => new sfValidatorString(array('max_length' => 4000)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sms_return[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SmsReturn';
  }

}
