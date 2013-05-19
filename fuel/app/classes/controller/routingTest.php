<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/19
 * Time: 16:47
 * To change this template use File | Settings | File Templates.
 */

class Controller_RoutingTest extends \Fuel\Core\Controller
{
	public function router($method, $params) {

		// ルート情報を表示
		\Fuel\Core\Debug::dump($this->request->route);

		// 名前付きパラメータの一覧を表示
		\Fuel\Core\Debug::dump($this->params());

		return '';
	}
}