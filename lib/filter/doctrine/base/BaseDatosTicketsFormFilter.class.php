<?php

/**
 * DatosTickets filter form base class.
 *
 * @package    samd
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDatosTicketsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha_actualizacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'unidosis'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'fecha_actualizacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'unidosis'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('datos_tickets_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatosTickets';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'registro_id'         => 'Number',
      'fecha_actualizacion' => 'Date',
      'metodo_solicitud_id' => 'Number',
      'usuario_atm_id'      => 'Number',
      'sintoma_id'          => 'Number',
      'estado_ticket_id'    => 'Number',
      'prioridad_id'        => 'Number',
      'foto_id'             => 'Number',
      'firma_id'            => 'Number',
      'unidosis'            => 'Text',
      'traslado_id'         => 'Number',
      'receta_medica_id'    => 'Number',
    );
  }
}
