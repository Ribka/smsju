<?php

/**
 * SmsStockReciept form base class.
 *
 * @method SmsStockReciept getObject() Returns the current form's model object
 *
 * @package    sms
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSmsStockRecieptForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'recived_number'        => new sfWidgetFormInputText(),
      'item_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SmsItem'), 'add_empty' => false)),
      'rf_id'                 => new sfWidgetFormInputText(),
      'cust_id'               => new sfWidgetFormInputText(),
      'reciever_stockeper_id' => new sfWidgetFormInputText(),
      'quantity'              => new sfWidgetFormInputText(),
      'unite_price'           => new sfWidgetFormInputText(),
      'total_price'           => new sfWidgetFormInputText(),
      'description'           => new sfWidgetFormTextarea(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'recived_number'        => new sfValidatorString(array('max_length' => 250)),
      'item_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SmsItem'))),
      'rf_id'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cust_id'               => new sfValidatorString(array('max_length' => 255)),
      'reciever_stockeper_id' => new sfValidatorString(array('max_length' => 255)),
      'quantity'              => new sfValidatorInteger(),
      'unite_price'           => new sfValidatorNumber(),
      'total_price'           => new sfValidatorNumber(),
      'description'           => new sfValidatorString(array('max_length' => 400, 'required' => false)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'SmsStockReciept', 'column' => array('recived_number')))
    );

    $this->widgetSchema->setNameFormat('sms_stock_reciept[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SmsStockReciept';
  }

}
