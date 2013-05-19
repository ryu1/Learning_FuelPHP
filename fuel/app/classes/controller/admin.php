<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/19
 * Time: 17:17
 * To change this template use File | Settings | File Templates.
 */

class Controller_Admin extends \Fuel\Core\Controller {

	public function action_index()
	{
		return \Fuel\Core\Html::anchor(\Fuel\Core\Router::get('admin'), '管理ページ');
	}
}