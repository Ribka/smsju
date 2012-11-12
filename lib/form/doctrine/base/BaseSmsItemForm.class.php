<?php

/**
 * SmsItem form base class.
 *
 * @method SmsItem getObject() Returns the current form's model object
 *
 * @package    sms
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSmsItemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'item_name'           => new sfWidgetFormInputText(),
      'group_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SmsGroup'), 'add_empty' => false)),
      'family_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SmsFamily'), 'add_empty' => false)),
      'item_code'           => new sfWidgetFormInputText(),
      'item_type'           => new sfWidgetFormInputText(),
      'item_quantity'       => new sfWidgetFormInputText(),
      'item_measuring_unit' => new sfWidgetFormInputText(),
      'item_description'    => new sfWidgetFormTextarea(),
      'item_store_id'       => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'item_name'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'group_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SmsGroup'))),
      'family_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SmsFamily'))),
      'item_code'           => new sfValidatorString(array('max_length' => 255)),
      'item_type'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'item_quantity'       => new sfValidatorInteger(),
      'item_measuring_unit' => new sfValidatorString(array('max_length' => 255)),
      'item_description'    => new sfValidatorString(array('max_length' => 4000)),
      'item_store_id'       => new sfValidatorString(array('max_length' => 255)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'SmsItem', 'column' => array('item_code'))),
        new sfValidatorDoctrineUnique(array('model' => 'SmsItem', 'column' => array('item_store_id'))),
      ))
    );

    $this->widgetSchema->setNameFormat('sms_item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SmsItem';
  }

}
