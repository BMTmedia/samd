<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DependenciaFamiliar', 'doctrine');

/**
 * BaseDependenciaFamiliar
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $titular_id
 * @property integer $anexo_id
 * 
 * @method integer             getId()         Returns the current record's "id" value
 * @method integer             getTitularId()  Returns the current record's "titular_id" value
 * @method integer             getAnexoId()    Returns the current record's "anexo_id" value
 * @method DependenciaFamiliar setId()         Sets the current record's "id" value
 * @method DependenciaFamiliar setTitularId()  Sets the current record's "titular_id" value
 * @method DependenciaFamiliar setAnexoId()    Sets the current record's "anexo_id" value
 * 
 * @package    samd
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDependenciaFamiliar extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dependencia_familiar');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('titular_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('anexo_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}