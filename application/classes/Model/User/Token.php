<?php

class Model_User_Token extends Model_Auth_User_Token {
	protected $_table_columns = array(
		'id' => NULL,
		'user_id' => NULL,
		'user_agent' => NULL,
		'token' => NULL,
		'created' => NULL,
		'expires' => NULL,
	);

	protected $_table_name = 'user_tokens';

} // End User Token Model