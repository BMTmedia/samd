<?php

/**
 * Traslado form base class.
 *
 * @method Traslado getObject() Returns the current form's model object
 *
 * @package    samd
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTrasladoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'fecha_inicio'   => new sfWidgetFormDateTime(),
      'direccion'      => new sfWidgetFormTextarea(),
      'fecha_fin'      => new sfWidgetFormDateTime(),
      'vehiculo_id'    => new sfWidgetFormInputHidden(),
      'usuario_atm_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fecha_inicio'   => new sfValidatorDateTime(),
      'direccion'      => new sfValidatorString(array('max_length' => 500)),
      'fecha_fin'      => new sfValidatorDateTime(array('required' => false)),
      'vehiculo_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('vehiculo_id')), 'empty_value' => $this->getObject()->get('vehiculo_id'), 'required' => false)),
      'usuario_atm_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('usuario_atm_id')), 'empty_value' => $this->getObject()->get('usuario_atm_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('traslado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Traslado';
  }

}
