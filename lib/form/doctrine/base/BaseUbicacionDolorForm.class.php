<?php

/**
 * UbicacionDolor form base class.
 *
 * @method UbicacionDolor getObject() Returns the current form's model object
 *
 * @package    samd
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUbicacionDolorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'lugar_dolor_id' => new sfWidgetFormInputHidden(),
      'nombre'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'lugar_dolor_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lugar_dolor_id')), 'empty_value' => $this->getObject()->get('lugar_dolor_id'), 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 20)),
    ));

    $this->widgetSchema->setNameFormat('ubicacion_dolor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UbicacionDolor';
  }

}
