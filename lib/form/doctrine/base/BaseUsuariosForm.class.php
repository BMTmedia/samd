<?php

/**
 * Usuarios form base class.
 *
 * @method Usuarios getObject() Returns the current form's model object
 *
 * @package    samd
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuariosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cedula'     => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'apellido'   => new sfWidgetFormInputText(),
      'fecha_nac'  => new sfWidgetFormDate(),
      'username'   => new sfWidgetFormInputText(),
      'password'   => new sfWidgetFormInputText(),
      'company_id' => new sfWidgetFormInputText(),
      'rol_id'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cedula'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cedula')), 'empty_value' => $this->getObject()->get('cedula'), 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 50)),
      'apellido'   => new sfValidatorString(array('max_length' => 50)),
      'fecha_nac'  => new sfValidatorDate(),
      'username'   => new sfValidatorString(array('max_length' => 50)),
      'password'   => new sfValidatorString(array('max_length' => 150)),
      'company_id' => new sfValidatorInteger(),
      'rol_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('rol_id')), 'empty_value' => $this->getObject()->get('rol_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuarios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios';
  }

}
