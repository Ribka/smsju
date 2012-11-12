<?php

/**
 * SmsRequest form base class.
 *
 * @method SmsRequest getObject() Returns the current form's model object
 *
 * @package    sms
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSmsRequestForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'requested_by'       => new sfWidgetFormInputText(),
      'email'              => new sfWidgetFormInputText(),
      'requested_item'     => new sfWidgetFormInputText(),
      'requested_quantity' => new sfWidgetFormInputText(),
      'description'        => new sfWidgetFormTextarea(),
      'request_status'     => new sfWidgetFormInputText(),
      'given_quantity'     => new sfWidgetFormInputText(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'requested_by'       => new sfValidatorString(array('max_length' => 255)),
      'email'              => new sfValidatorString(array('max_length' => 255)),
      'requested_item'     => new sfValidatorString(array('max_length' => 255)),
      'requested_quantity' => new sfValidatorInteger(),
      'description'        => new sfValidatorString(array('max_length' => 4000)),
      'request_status'     => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'given_quantity'     => new sfValidatorInteger(array('required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('sms_request[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SmsRequest';
  }

}
