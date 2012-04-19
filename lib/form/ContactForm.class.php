<?php
// lib/form/ContactForm.class.php
class ContactForm extends BaseForm
{
  protected static $subjects = array('Subject A', 'Subject B', 'Subject C');
 
  public function configure()
  {
    $this->setWidgets(array(
      'name'    => new sfWidgetFormInputText(),
      'email'   => new sfWidgetFormInputText(),
      'subject' => new sfWidgetFormSelect(array('choices' => self::$subjects)),
      'message' => new sfWidgetFormTextarea(),
      'file'    => new sfWidgetFormInputFile(),
    ));
    $this->widgetSchema->setNameFormat('contact[%s]');
 
    $this->setValidators(array(
      'name'    => new sfValidatorString(array('required' => false)),
      'email'   => new sfValidatorEmail(),
      'subject' => new sfValidatorChoice(array('choices' => array_keys(self::$subjects))),
      'message' => new sfValidatorString(array('min_length' => 4)),
      'file'    => new sfValidatorFile(),
    ));
  }
}

?>