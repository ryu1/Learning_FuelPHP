<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/19
 * Time: 13:30
 * To change this template use File | Settings | File Templates.
 */

class Controller_Weather extends Controller_Rest
{

	public function get_today()
	{
		// クエリ文字列から地名を代入
		$location = Input::get('loc');
		// 本来は、モデルから地名の今日の天気を検索して代入
		$weather = 'fine.';

		// レスポンスを返す
		return $this->response(array(
			'location' => $location,
			'weather' => $weather
		));
	}

	public function get_list()
	{
		return $this->response(array(
			'foo' => Input::get('foo'),
			'baz' => array(
				1, 50, 219
			),
			'empty' => null
		));
	}
}