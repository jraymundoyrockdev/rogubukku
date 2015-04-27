<?php defined('SYSPATH') OR die('No direct access allowed.');

# application/Model/Role.php
class Model_Role extends Model_Auth_Role {

	protected $_table_columns = array(
		'id' => NULL,
		'name' => NULL,
		'description' => NULL,
	);

	protected $_table_name = 'roles';

}