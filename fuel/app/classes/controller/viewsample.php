<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/19
 * Time: 15:37
 * To change this template use File | Settings | File Templates.
 */

class Controller_Viewsample extends \Fuel\Core\Controller
{


	public function action_index()
	{
		// ビューに渡す変数
		$data = array();
		$data['title'] = 'ビューのサンプル';
		$data['username'] = 'Ritsu';

		// Viewオブジェクトを生成して返す
		return \Fuel\Core\View::forge('viewsample', $data);
	}
}