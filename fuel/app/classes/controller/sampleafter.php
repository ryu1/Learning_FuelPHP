<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/18
 * Time: 23:23
 * To change this template use File | Settings | File Templates.
 */

class Controller_Sampleafter extends Fuel\Core\Controller {

	function after($response) {
		$response .= __METHOD__ . "が実行されました。<br />";
		//print($response);
		//var_dump($response);
		//$response->body("aaaa");
		return parent::after($response);
		//return $response;
	}

	function action_index() {
		return __METHOD__ . "が実行されました。<br />";
	}

	function action_test() {
		return __METHOD__ . "が実行されました。<br />";
	}
}