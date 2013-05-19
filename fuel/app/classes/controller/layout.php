<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/19
 * Time: 16:12
 * To change this template use File | Settings | File Templates.
 */

class Controller_Layout extends \Fuel\Core\Controller_Template {

	public function before() {
		// 必ず親クラスのbefore()メソッドを実行する
		parent::before();

		$this->current_user = 'Sawako';
	}

	public function action_index() {
		// ビューファイル全体に$title をセットする
		$this->template->set_global('title', 'レイアウト機能のサンプル');

		$data = array('user' => $this->current_user);
		$this->template->content = View::forge('layout/index', $data);
		$this->template->footer = View::forge('layout/footer');
	}
}