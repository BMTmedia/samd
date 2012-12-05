<?php

/**
 * Registro form base class.
 *
 * @method Registro getObject() Returns the current form's model object
 *
 * @package    samd
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRegistroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'fecha_creacion'     => new sfWidgetFormDateTime(),
      'cliente_id'         => new sfWidgetFormInputHidden(),
      'fecha_finalizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fecha_creacion'     => new sfValidatorDateTime(),
      'cliente_id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cliente_id')), 'empty_value' => $this->getObject()->get('cliente_id'), 'required' => false)),
      'fecha_finalizacion' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('registro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Registro';
  }

}
