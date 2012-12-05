<?php

/**
 * RecetaMedica filter form base class.
 *
 * @package    samd
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRecetaMedicaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha_inicio'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'medicamento'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_fin'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'fecha_inicio'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'medicamento'    => new sfValidatorPass(array('required' => false)),
      'direccion'      => new sfValidatorPass(array('required' => false)),
      'fecha_fin'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('receta_medica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RecetaMedica';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'fecha_inicio'   => 'Date',
      'medicamento'    => 'Text',
      'direccion'      => 'Text',
      'fecha_fin'      => 'Date',
      'vehiculo_id'    => 'Number',
      'usuario_atm_id' => 'Number',
    );
  }
}
