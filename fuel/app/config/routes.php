<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	//'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),

	// 正規表現によるルーティング
	'blog/(:any)'		=> 'routingtest/entry/$1',
	'(:segment)/about'	=> 'routingtest/about/$1',
	'([0-9]{3})/detail'	=> 'routingtest/id/$1',

	// 名前付きルート
	//'dashboard' => array('admin/index', 'name' => 'admin'),
	'admin/dashboard' => array('admin/index', 'name' => 'admin'),
);