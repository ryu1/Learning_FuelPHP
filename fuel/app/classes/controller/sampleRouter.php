<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/19
 * Time: 1:13
 * To change this template use File | Settings | File Templates.
 */
/**
 * Class Controller_SampleRouter
 */
class Controller_SampleRouter extends \Fuel\Core\Controller
{
	public function router($method, $params)
	{
		if ($method === 'abc')
		{
			return $this->action_test($params);
		}
		else
		{
			return $this->action_index($params);
		}
	}

	public function before()
	{
		$this->current_user = 'Mio';
	}

	public function action_index($params)
	{
		$output = $this->current_user . 'さん、';
		$output .= __METHOD__ . 'が実行されました。<br />';
		$output .= var_export($params, true);
		return $output;
	}

	/**
	 * test
	 * @return string
	 */
	public function action_test()
	{
		$output = $this->current_user . 'さん、';
		$output .= __METHOD__ . 'が実行されました。<br />';
		$output .= var_export($params, true);
		return $output;
	}

}