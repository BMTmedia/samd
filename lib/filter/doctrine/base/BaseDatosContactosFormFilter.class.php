<?php

/**
 * DatosContactos filter form base class.
 *
 * @package    samd
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDatosContactosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'direccion_principal' => new sfWidgetFormFilterInput(),
      'direccion_2'         => new sfWidgetFormFilterInput(),
      'telefono_principal'  => new sfWidgetFormFilterInput(),
      'telefono_2'          => new sfWidgetFormFilterInput(),
      'telefono_3'          => new sfWidgetFormFilterInput(),
      'email_principal'     => new sfWidgetFormFilterInput(),
      'email_2'             => new sfWidgetFormFilterInput(),
      'email_3'             => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'direccion_principal' => new sfValidatorPass(array('required' => false)),
      'direccion_2'         => new sfValidatorPass(array('required' => false)),
      'telefono_principal'  => new sfValidatorPass(array('required' => false)),
      'telefono_2'          => new sfValidatorPass(array('required' => false)),
      'telefono_3'          => new sfValidatorPass(array('required' => false)),
      'email_principal'     => new sfValidatorPass(array('required' => false)),
      'email_2'             => new sfValidatorPass(array('required' => false)),
      'email_3'             => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('datos_contactos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatosContactos';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'company_id'          => 'Number',
      'usuario_id'          => 'Number',
      'direccion_principal' => 'Text',
      'direccion_2'         => 'Text',
      'telefono_principal'  => 'Text',
      'telefono_2'          => 'Text',
      'telefono_3'          => 'Text',
      'email_principal'     => 'Text',
      'email_2'             => 'Text',
      'email_3'             => 'Text',
    );
  }
}
