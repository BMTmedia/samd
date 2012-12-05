<?php

/**
 * DatosTickets form base class.
 *
 * @method DatosTickets getObject() Returns the current form's model object
 *
 * @package    samd
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDatosTicketsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'registro_id'         => new sfWidgetFormInputHidden(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
      'metodo_solicitud_id' => new sfWidgetFormInputHidden(),
      'usuario_atm_id'      => new sfWidgetFormInputHidden(),
      'sintoma_id'          => new sfWidgetFormInputHidden(),
      'estado_ticket_id'    => new sfWidgetFormInputHidden(),
      'prioridad_id'        => new sfWidgetFormInputHidden(),
      'foto_id'             => new sfWidgetFormInputHidden(),
      'firma_id'            => new sfWidgetFormInputHidden(),
      'unidosis'            => new sfWidgetFormTextarea(),
      'traslado_id'         => new sfWidgetFormInputHidden(),
      'receta_medica_id'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'registro_id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('registro_id')), 'empty_value' => $this->getObject()->get('registro_id'), 'required' => false)),
      'fecha_actualizacion' => new sfValidatorDateTime(),
      'metodo_solicitud_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('metodo_solicitud_id')), 'empty_value' => $this->getObject()->get('metodo_solicitud_id'), 'required' => false)),
      'usuario_atm_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('usuario_atm_id')), 'empty_value' => $this->getObject()->get('usuario_atm_id'), 'required' => false)),
      'sintoma_id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('sintoma_id')), 'empty_value' => $this->getObject()->get('sintoma_id'), 'required' => false)),
      'estado_ticket_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('estado_ticket_id')), 'empty_value' => $this->getObject()->get('estado_ticket_id'), 'required' => false)),
      'prioridad_id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('prioridad_id')), 'empty_value' => $this->getObject()->get('prioridad_id'), 'required' => false)),
      'foto_id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('foto_id')), 'empty_value' => $this->getObject()->get('foto_id'), 'required' => false)),
      'firma_id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('firma_id')), 'empty_value' => $this->getObject()->get('firma_id'), 'required' => false)),
      'unidosis'            => new sfValidatorString(array('max_length' => 500)),
      'traslado_id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('traslado_id')), 'empty_value' => $this->getObject()->get('traslado_id'), 'required' => false)),
      'receta_medica_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('receta_medica_id')), 'empty_value' => $this->getObject()->get('receta_medica_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('datos_tickets[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatosTickets';
  }

}
