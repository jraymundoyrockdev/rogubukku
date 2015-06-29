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

    /**
     * Derived from the AbstractModel
     *
     * Default mass assignment method for saving and updating tables.
     * @param $fields array payload of data coming form post send
     *
     * @return object
     */
    public function roguSave($fields)
    {
        return $this->_prepareSave($fields, $this->_fillable, $this->_primary_key);
    }
}