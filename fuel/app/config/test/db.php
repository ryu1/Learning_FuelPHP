<?php
/**
 * The test database settings. These get merged with the global settings.
 *
 * This environment is primarily used by unit tests, to run on a controlled environment.
 */

return array(
	'default' => array(
		'connection'  => array(
			'hostname'	=> 'ec2-175-41-209-150.ap-northeast-1.compute.amazonaws.com',
			'port'		=> '3306',
			'database'	=> 'fuel_db_test',
			'username'   => 'ryu',
			'password'   => 'gozaemon',
		),
	),
);
