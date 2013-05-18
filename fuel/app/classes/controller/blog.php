<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/18
 * Time: 22:37
 * To change this template use File | Settings | File Templates.
 */

class Controller_Blog extends Controller
{
	public function action_category($cat = 'php', $page = '1')
	{
		return __FILE__ . '<br />' . $cat . '<br />' . $page;
	}
}