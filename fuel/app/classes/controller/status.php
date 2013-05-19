<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/19
 * Time: 16:28
 * To change this template use File | Settings | File Templates.
 */

class Controller_Status extends \Fuel\Core\Controller
{
	public function action_index() {
		// Statusモデルから結果を取得する
		$results = Model_Status::find_body_by_username('foo');

		// $resultsをダンプして確認する
		\Fuel\Core\Debug::dump($results);

		return '';	// 返り値がないとエラーになるため
	}
}