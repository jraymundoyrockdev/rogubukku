<?php defined('APPPATH') OR die('No direct access allowed.');

# application/Model/User.php
class Model_Users extends Model_User
{

    protected $_primary_key = 'id';

    protected $_table_name = 'users';

    protected $_table_columns = array(
        'id' => null,
        'ministry_id' => null,
        'full_name' => null,
        'username' => null,
        'password' => null,
        'logins' => null,
        'last_login' => null,
        'created_date' => null,
        'active_flag' => null,
        'profile_pic' => null
    );


    protected $_belongs_to = array(
        'ministry' => array(
            'model' => 'Ministry',
            'foreign_key' => 'ministry_id'
        ),
        'rolesUsers' => array(
            'model' => 'Roles_Users',
            'foreign_key' => 'id'
        ),

    );

    public function rules()
    {
        return array(

            'full_name' => array(
                array('not_empty'),
                array('min_length', array(':value', 5)),
                array('max_length', array(':value', 30)),
            ),
            'username' => array(
                array('not_empty'),
                array('min_length', array(':value', 5)),
                array('max_length', array(':value', 30)),
                array(array($this, 'username_available')),
            ),
            'password' => array(
                array('not_empty'),
            ),
        );
    }


    public function username_available($username)
    {

        if (!Auth::instance()->logged_in()) {
            $is_exists = ORM::factory('Users', array('username' => $username))->loaded();

            return ($is_exists) ? false : true;
        }

        return true;
    }


    public function save_profile($user_id, $fields = array())
    {
        $user = ORM::factory('Users', $user_id);

        if ($user->loaded()) {
            $user->full_name = $fields['full_name'];
            $user->ministry_id = $fields['ministry'];

            return $user->save();
        }
    }


    public function save_password($user_id, $fields = array())
    {
        $user = ORM::factory('Users', $user_id);

        if ($user->loaded()) {

            if ($user->password == $fields['old_password']) {
                $user->password = $fields['new_password'];

                return $user->save();
            }

            return false;
        }
    }

    public function save_dp($user_id, $file_name)
    {
        $user = ORM::factory('Users', $user_id);
        $user->profile_pic = $file_name;

        return $user->save();
    }

} // End User Model