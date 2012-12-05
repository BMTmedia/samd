<?php

/**
 * Sintomas filter form base class.
 *
 * @package    samd
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSintomasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcion'        => new sfWidgetFormFilterInput(),
      'frecuencia'         => new sfWidgetFormFilterInput(),
      'intensidad'         => new sfWidgetFormFilterInput(),
      'inicio_sintoma'     => new sfWidgetFormFilterInput(),
      'sintomas_asociados' => new sfWidgetFormFilterInput(),
      'comentarios'        => new sfWidgetFormFilterInput(),
      'adicionales'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'descripcion'        => new sfValidatorPass(array('required' => false)),
      'frecuencia'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'intensidad'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'inicio_sintoma'     => new sfValidatorPass(array('required' => false)),
      'sintomas_asociados' => new sfValidatorPass(array('required' => false)),
      'comentarios'        => new sfValidatorPass(array('required' => false)),
      'adicionales'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sintomas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sintomas';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'ubicacion_dolor_id' => 'Number',
      'descripcion'        => 'Text',
      'frecuencia'         => 'Number',
      'intensidad'         => 'Number',
      'inicio_sintoma'     => 'Text',
      'sintomas_asociados' => 'Text',
      'comentarios'        => 'Text',
      'adicionales'        => 'Text',
    );
  }
}
