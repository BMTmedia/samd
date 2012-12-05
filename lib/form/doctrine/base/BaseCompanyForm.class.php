<?php

/**
 * Company form base class.
 *
 * @method Company getObject() Returns the current form's model object
 *
 * @package    samd
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCompanyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rif'        => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'plan_id'    => new sfWidgetFormInputHidden(),
      'estatus_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'rif'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('rif')), 'empty_value' => $this->getObject()->get('rif'), 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 255)),
      'plan_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('plan_id')), 'empty_value' => $this->getObject()->get('plan_id'), 'required' => false)),
      'estatus_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('estatus_id')), 'empty_value' => $this->getObject()->get('estatus_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('company[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Company';
  }

}
