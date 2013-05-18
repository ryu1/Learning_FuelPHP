<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/18
 * Time: 23:16
 * To change this template use File | Settings | File Templates.
 */

class Controller_Samplebefore extends Controller {

	public function before() {
		// 例えば、認証済みでなかったらログインページへ飛ばす
		// 認証済みなら、ユーザ名をプロパティにセットする
		$this->current_user = 'Yui';
	}

	public function action_index() {
		$output = $this->current_user . 'さん、 ' . __METHOD__ . 'が実行されたました。<br />';
		return $output;
	}

	public function action_test() {
		$output = $this->current_user . 'さん、 ' . __METHOD__ . 'が実行されたました。<br />';
		return $output;
	}

}