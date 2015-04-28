<?php defined('SYSPATH') OR die('No direct access allowed.');

# applications/config/auth.php
return array(
	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => 'asdfjsiefjoasfjiwef8wefsofjaoisdf',
	'lifetime'     => 1209600, #2 weeks
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for Auth File driver
	'users' => array(),
);