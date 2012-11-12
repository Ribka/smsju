<?php

/**
 * SmsCustomerOrganization filter form base class.
 *
 * @package    sms
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSmsCustomerOrganizationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'customer_id'                                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'customer_organization_tin_number'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'customer_oraganization_name'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'customer_oraganization_acronym'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'customer_oraganization_head_office_name'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'customer_oraganization_head_office_phone'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'customer_oraganization_chief_executive_name' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'customer_oraganization_contact_person'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'customer_oraganization_designation'          => new sfWidgetFormFilterInput(),
      'customer_oraganization_place'                => new sfWidgetFormFilterInput(),
      'customer_oraganization_email'                => new sfWidgetFormFilterInput(),
      'customer_oraganization_phone_number'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'customer_oraganization_fax'                  => new sfWidgetFormFilterInput(),
      'customer_oraganization_web_site'             => new sfWidgetFormFilterInput(),
      'customer_oraganization_global_head_count'    => new sfWidgetFormFilterInput(),
      'customer_oraganization_local_head_count'     => new sfWidgetFormFilterInput(),
      'customer_oraganization_founded_date'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'ownership'                                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'                                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'customer_id'                                 => new sfValidatorPass(array('required' => false)),
      'customer_organization_tin_number'            => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_name'                 => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_acronym'              => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_head_office_name'     => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_head_office_phone'    => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_chief_executive_name' => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_contact_person'       => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_designation'          => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_place'                => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_email'                => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_phone_number'         => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_fax'                  => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_web_site'             => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_global_head_count'    => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_local_head_count'     => new sfValidatorPass(array('required' => false)),
      'customer_oraganization_founded_date'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'ownership'                                   => new sfValidatorPass(array('required' => false)),
      'created_at'                                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('sms_customer_organization_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SmsCustomerOrganization';
  }

  public function getFields()
  {
    return array(
      'id'                                          => 'Number',
      'customer_id'                                 => 'Text',
      'customer_organization_tin_number'            => 'Text',
      'customer_oraganization_name'                 => 'Text',
      'customer_oraganization_acronym'              => 'Text',
      'customer_oraganization_head_office_name'     => 'Text',
      'customer_oraganization_head_office_phone'    => 'Text',
      'customer_oraganization_chief_executive_name' => 'Text',
      'customer_oraganization_contact_person'       => 'Text',
      'customer_oraganization_designation'          => 'Text',
      'customer_oraganization_place'                => 'Text',
      'customer_oraganization_email'                => 'Text',
      'customer_oraganization_phone_number'         => 'Text',
      'customer_oraganization_fax'                  => 'Text',
      'customer_oraganization_web_site'             => 'Text',
      'customer_oraganization_global_head_count'    => 'Text',
      'customer_oraganization_local_head_count'     => 'Text',
      'customer_oraganization_founded_date'         => 'Date',
      'ownership'                                   => 'Text',
      'created_at'                                  => 'Date',
      'updated_at'                                  => 'Date',
    );
  }
}
