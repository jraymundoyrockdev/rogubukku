<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Model Users Roles
 *
 * Users Roles Instance table
 */
class Model_Roles_Users extends Model_AbstractModel
{
    protected $_primary_key = 'user_id';

    protected $_table_columns = array(
        'user_id' => null,
        'role_id' => null,
    );

    protected $_fillable = array('user_id','role_id');

    protected $_table_name = 'roles_users';

    protected $_has_one = array(
        'users' => array(
            'model' => 'Users',
            'foreign_key' => 'id',
        ),
    );

    public function roguSave($fields)
    {
        return $this->_prepareSave($fields, $this->_fillable, $this->_primary_key);
    }


}//end of class