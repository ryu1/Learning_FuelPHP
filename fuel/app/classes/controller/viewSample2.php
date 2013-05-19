<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/19
 * Time: 15:47
 * To change this template use File | Settings | File Templates.
 */

class Controller_viewSample2 extends \Fuel\Core\Controller {

	public function action_index()
	{
		// View オブジェクトを生成する
		$view = \Fuel\Core\View::forge('viewsample');

		// View に変数をセットする
		$view->set('title', 'ビューのサンプル2');
		$view->set('username', 'Mugi');

		return $view;
	}
}