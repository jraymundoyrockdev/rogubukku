<?php defined('APPPATH') OR die('No direct access allowed.');

# application/Model/User.php
class Model_Users extends Model_User {

     // This class can be replaced or extended
     protected $_table_columns = array(
        'id' => NULL,
        'full_name' => NULL,
		'username' => NULL,
		'password' => NULL,
		'logins' => NULL,
		'last_login' => NULL,
     );

	protected $_table_name = 'users';

    final public function rules()
    {
        return array(
        	'full_name' => array(
                array('not_empty'),
            ),
            'username' => array(
                array('not_empty'),
                array(array($this, 'unique'), array('username', ':value')),
            ),
            'password' => array(
                array('not_empty'),
            ),
        );
    }
} // End User Model