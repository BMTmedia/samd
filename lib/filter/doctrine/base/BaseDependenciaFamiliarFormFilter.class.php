<?php

/**
 * DependenciaFamiliar filter form base class.
 *
 * @package    samd
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDependenciaFamiliarFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('dependencia_familiar_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DependenciaFamiliar';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'titular_id' => 'Number',
      'anexo_id'   => 'Number',
    );
  }
}
