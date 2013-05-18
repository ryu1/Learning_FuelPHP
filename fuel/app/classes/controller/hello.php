<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/18
 * Time: 22:37
 * To change this template use File | Settings | File Templates.
 */

class Controller_Hello extends Controller
{

	public function action_index() {
		// 文字列を返す
		return View::forge('hello');
	}
}