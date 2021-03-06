<?php

/**
 * BaseProperty
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $keey
 * @property clob $value
 * 
 * @method string   getKeey()  Returns the current record's "keey" value
 * @method clob     getValue() Returns the current record's "value" value
 * @method Property setKeey()  Sets the current record's "keey" value
 * @method Property setValue() Sets the current record's "value" value
 * 
 * @package    siwapp
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProperty extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('property');
        $this->hasColumn('keey', 'string', 50, array(
             'type' => 'string',
             'primary' => true,
             'length' => 50,
             ));
        $this->hasColumn('value', 'clob', null, array(
             'type' => 'clob',
             ));

        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}