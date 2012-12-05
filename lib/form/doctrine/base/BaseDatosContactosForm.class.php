<?php

/**
 * DatosContactos form base class.
 *
 * @method DatosContactos getObject() Returns the current form's model object
 *
 * @package    samd
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDatosContactosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'company_id'          => new sfWidgetFormInputHidden(),
      'usuario_id'          => new sfWidgetFormInputHidden(),
      'direccion_principal' => new sfWidgetFormTextarea(),
      'direccion_2'         => new sfWidgetFormTextarea(),
      'telefono_principal'  => new sfWidgetFormInputText(),
      'telefono_2'          => new sfWidgetFormInputText(),
      'telefono_3'          => new sfWidgetFormInputText(),
      'email_principal'     => new sfWidgetFormInputText(),
      'email_2'             => new sfWidgetFormInputText(),
      'email_3'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'company_id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('company_id')), 'empty_value' => $this->getObject()->get('company_id'), 'required' => false)),
      'usuario_id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('usuario_id')), 'empty_value' => $this->getObject()->get('usuario_id'), 'required' => false)),
      'direccion_principal' => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'direccion_2'         => new sfValidatorString(array('max_length' => 500, 'required' => false)),
      'telefono_principal'  => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'telefono_2'          => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'telefono_3'          => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'email_principal'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'email_2'             => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'email_3'             => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('datos_contactos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatosContactos';
  }

}
