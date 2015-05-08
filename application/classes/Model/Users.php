<?php defined('APPPATH') OR die('No direct access allowed.');

# application/Model/User.php
class Model_Users extends Model_User {

    protected $_primary_key = 'id';

    protected $_table_name = 'users';

    protected $_table_columns = array(
        'id' => NULL,
        'ministry_id' => NULL,
        'full_name' => NULL,
        'username' => NULL,
        'password' => NULL,
        'logins' => NULL,
        'last_login' => NULL,
    );


    protected $_belongs_to = array(
      'ministry' => array ('model' => 'Ministry',
                            'foreign_key' => 'ministry_id' )
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
        $is_exists = ORM::factory('User', array('username' => $username))->loaded();

        return ($is_exists) ? false : true;
    }


} // End User Model