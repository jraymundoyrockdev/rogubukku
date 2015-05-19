<?php defined('SYSPATH') OR die('No direct access allowed.');

	# copy this into application/config/database.php
	return array
	(
		'default' => array(
			'type'       => 'PDO_MySQL',
			'connection' => array(
				'dsn'        => 'mysql:host=localhost;dbname=rogubukku',
				'username'   => 'root',
				'password'   => '',
				'persistent' => FALSE,
			),
			'table_prefix' => '',
			'charset'      => 'utf8',
			'caching'      => FALSE,
		),
	);