<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
//			'dsn'        => 'mysql:host=ec2-175-41-209-150.ap-northeast-1.compute.amazonaws.com;port=3307;dbname=fuel_db_devel;charset=utf-8',
			'hostname'	=> 'ec2-175-41-209-150.ap-northeast-1.compute.amazonaws.com',
			'port'		=> '3306',
			'database'	=> 'fuel_db_devel',
			'username'   => 'ryu',
			'password'   => 'gozaemon',
		),
	),
);
