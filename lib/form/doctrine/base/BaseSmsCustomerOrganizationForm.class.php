<?php

/**
 * SmsCustomerOrganization form base class.
 *
 * @method SmsCustomerOrganization getObject() Returns the current form's model object
 *
 * @package    sms
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSmsCustomerOrganizationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                          => new sfWidgetFormInputHidden(),
      'customer_id'                                 => new sfWidgetFormInputText(),
      'customer_organization_tin_number'            => new sfWidgetFormInputText(),
      'customer_oraganization_name'                 => new sfWidgetFormInputText(),
      'customer_oraganization_acronym'              => new sfWidgetFormInputText(),
      'customer_oraganization_head_office_name'     => new sfWidgetFormInputText(),
      'customer_oraganization_head_office_phone'    => new sfWidgetFormInputText(),
      'customer_oraganization_chief_executive_name' => new sfWidgetFormInputText(),
      'customer_oraganization_contact_person'       => new sfWidgetFormInputText(),
      'customer_oraganization_designation'          => new sfWidgetFormInputText(),
      'customer_oraganization_place'                => new sfWidgetFormInputText(),
      'customer_oraganization_email'                => new sfWidgetFormInputText(),
      'customer_oraganization_phone_number'         => new sfWidgetFormInputText(),
      'customer_oraganization_fax'                  => new sfWidgetFormInputText(),
      'customer_oraganization_web_site'             => new sfWidgetFormInputText(),
      'customer_oraganization_global_head_count'    => new sfWidgetFormInputText(),
      'customer_oraganization_local_head_count'     => new sfWidgetFormInputText(),
      'customer_oraganization_founded_date'         => new sfWidgetFormDate(),
      'ownership'                                   => new sfWidgetFormInputText(),
      'created_at'                                  => new sfWidgetFormDateTime(),
      'updated_at'                                  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                                          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'customer_id'                                 => new sfValidatorString(array('max_length' => 255)),
      'customer_organization_tin_number'            => new sfValidatorString(array('max_length' => 255)),
      'customer_oraganization_name'                 => new sfValidatorString(array('max_length' => 255)),
      'customer_oraganization_acronym'              => new sfValidatorString(array('max_length' => 255)),
      'customer_oraganization_head_office_name'     => new sfValidatorString(array('max_length' => 255)),
      'customer_oraganization_head_office_phone'    => new sfValidatorString(array('max_length' => 255)),
      'customer_oraganization_chief_executive_name' => new sfValidatorString(array('max_length' => 255)),
      'customer_oraganization_contact_person'       => new sfValidatorString(array('max_length' => 255)),
      'customer_oraganization_designation'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer_oraganization_place'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer_oraganization_email'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer_oraganization_phone_number'         => new sfValidatorString(array('max_length' => 255)),
      'customer_oraganization_fax'                  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer_oraganization_web_site'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer_oraganization_global_head_count'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer_oraganization_local_head_count'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'customer_oraganization_founded_date'         => new sfValidatorDate(array('required' => false)),
      'ownership'                                   => new sfValidatorString(array('max_length' => 255)),
      'created_at'                                  => new sfValidatorDateTime(),
      'updated_at'                                  => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'SmsCustomerOrganization', 'column' => array('customer_id')))
    );

    $this->widgetSchema->setNameFormat('sms_customer_organization[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SmsCustomerOrganization';
  }

}
