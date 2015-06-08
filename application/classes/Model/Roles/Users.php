<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Model Users Roles
 *
 * Users Roles Instance table
 */
class Model_Roles_Users extends ORM
{
    protected $_primary_key = 'user_id';

    protected $_table_columns = array(
        'user_id' => null,
        'role_id' => null,
    );

    protected $_table_name = 'roles_users';

    protected $_has_one = array(
        'users' => array(
            'model' => 'Users',
            'foreign_key' => 'id',
        ),
    );

    public function create_user_roles($user_id, $user_role = 1)
    {
        $this->user_id = $user_id;
        $this->role_id = $user_role;

        return $this->save();
    }

}//end of class