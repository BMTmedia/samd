<?php

/**
 * DependenciaFamiliar form base class.
 *
 * @method DependenciaFamiliar getObject() Returns the current form's model object
 *
 * @package    samd
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDependenciaFamiliarForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'titular_id' => new sfWidgetFormInputHidden(),
      'anexo_id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'titular_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('titular_id')), 'empty_value' => $this->getObject()->get('titular_id'), 'required' => false)),
      'anexo_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('anexo_id')), 'empty_value' => $this->getObject()->get('anexo_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dependencia_familiar[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DependenciaFamiliar';
  }

}
