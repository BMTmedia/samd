<?php

/**
 * Sintomas form base class.
 *
 * @method Sintomas getObject() Returns the current form's model object
 *
 * @package    samd
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSintomasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'ubicacion_dolor_id' => new sfWidgetFormInputHidden(),
      'descripcion'        => new sfWidgetFormInputText(),
      'frecuencia'         => new sfWidgetFormInputText(),
      'intensidad'         => new sfWidgetFormInputText(),
      'inicio_sintoma'     => new sfWidgetFormInputText(),
      'sintomas_asociados' => new sfWidgetFormTextarea(),
      'comentarios'        => new sfWidgetFormTextarea(),
      'adicionales'        => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'ubicacion_dolor_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ubicacion_dolor_id')), 'empty_value' => $this->getObject()->get('ubicacion_dolor_id'), 'required' => false)),
      'descripcion'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'frecuencia'         => new sfValidatorInteger(array('required' => false)),
      'intensidad'         => new sfValidatorInteger(array('required' => false)),
      'inicio_sintoma'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'sintomas_asociados' => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'comentarios'        => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'adicionales'        => new sfValidatorString(array('max_length' => 500, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sintomas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sintomas';
  }

}
