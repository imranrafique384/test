<?php

/**
 * Phone_data form base class.
 *
 * @method Phone_data getObject() Returns the current form's model object
 *
 * @package    test1
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePhone_dataForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'phone_id'   => new sfWidgetFormInputHidden(),
      'user_id'    => new sfWidgetFormInputText(),
      'first_name' => new sfWidgetFormInputText(),
      'last_name'  => new sfWidgetFormInputText(),
      'phone'      => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'phone_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('phone_id')), 'empty_value' => $this->getObject()->get('phone_id'), 'required' => false)),
      'user_id'    => new sfValidatorInteger(array('required' => false)),
      'first_name' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'last_name'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('phone_data[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Phone_data';
  }

}
