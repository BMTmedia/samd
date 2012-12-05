<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatosContactos', 'doctrine');

/**
 * BaseDatosContactos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $company_id
 * @property integer $usuario_id
 * @property string $direccion_principal
 * @property string $direccion_2
 * @property string $telefono_principal
 * @property string $telefono_2
 * @property string $telefono_3
 * @property string $email_principal
 * @property string $email_2
 * @property string $email_3
 * 
 * @method integer        getId()                  Returns the current record's "id" value
 * @method integer        getCompanyId()           Returns the current record's "company_id" value
 * @method integer        getUsuarioId()           Returns the current record's "usuario_id" value
 * @method string         getDireccionPrincipal()  Returns the current record's "direccion_principal" value
 * @method string         getDireccion2()          Returns the current record's "direccion_2" value
 * @method string         getTelefonoPrincipal()   Returns the current record's "telefono_principal" value
 * @method string         getTelefono2()           Returns the current record's "telefono_2" value
 * @method string         getTelefono3()           Returns the current record's "telefono_3" value
 * @method string         getEmailPrincipal()      Returns the current record's "email_principal" value
 * @method string         getEmail2()              Returns the current record's "email_2" value
 * @method string         getEmail3()              Returns the current record's "email_3" value
 * @method DatosContactos setId()                  Sets the current record's "id" value
 * @method DatosContactos setCompanyId()           Sets the current record's "company_id" value
 * @method DatosContactos setUsuarioId()           Sets the current record's "usuario_id" value
 * @method DatosContactos setDireccionPrincipal()  Sets the current record's "direccion_principal" value
 * @method DatosContactos setDireccion2()          Sets the current record's "direccion_2" value
 * @method DatosContactos setTelefonoPrincipal()   Sets the current record's "telefono_principal" value
 * @method DatosContactos setTelefono2()           Sets the current record's "telefono_2" value
 * @method DatosContactos setTelefono3()           Sets the current record's "telefono_3" value
 * @method DatosContactos setEmailPrincipal()      Sets the current record's "email_principal" value
 * @method DatosContactos setEmail2()              Sets the current record's "email_2" value
 * @method DatosContactos setEmail3()              Sets the current record's "email_3" value
 * 
 * @package    samd
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDatosContactos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('datos_contactos');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('company_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('direccion_principal', 'string', 500, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 500,
             ));
        $this->hasColumn('direccion_2', 'string', 500, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 500,
             ));
        $this->hasColumn('telefono_principal', 'string', 11, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('telefono_2', 'string', 11, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('telefono_3', 'string', 11, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('email_principal', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('email_2', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('email_3', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}