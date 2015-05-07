<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Roles_Users extends ORM {

	protected $_table_columns = array(
		'user_id' => NULL,
		'role_id' => NULL,
	);

	protected $_table_name = 'roles_users';


	public function create_user_roles($user_id,$user_role = 1){
		$this->user_id = $user_id;
		$this->role_id = $user_role;
		return $this->save();
	}

}//end of class