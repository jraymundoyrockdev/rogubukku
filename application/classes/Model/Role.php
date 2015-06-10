<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Model Role
 *
 * Role Instance table
 */
class Model_Role extends Model_Auth_Role
{

    protected $_table_columns = array(
        'id' => null,
        'name' => null,
        'description' => null,
    );

    protected $_table_name = 'roles';

    public function roguSave($fields)
    {
        return $this->_prepareSave($fields, $this->_fillable, $this->_primary_key);
    }
}