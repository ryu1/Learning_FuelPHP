<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/19
 * Time: 16:00
 * To change this template use File | Settings | File Templates.
 */

class Controller_Viewsample3 extends \Fuel\Core\Controller {


	public function action_index()
	{
		// View オブジェクトを生成する
		$view = \Fuel\Core\View::forge('viewsample');

		// Viewに変数をセットする
		$view->set('title', 'ビューのサンプル3');
		$view->set_safe('username', '<del>Azuyan</del>Azusa');
		//$view->set('username', '<del>Azunyan</del>Azusa', false);

		// Viewオブジェクトを返す
		return $view;
	}
}