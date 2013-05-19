<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/19
 * Time: 16:24
 * To change this template use File | Settings | File Templates.
 */

class Model_Status extends \Fuel\Core\Model
{

	public static function find_body_by_username($username)
	{
		// 本来は、例えば、データベースを検索して結果を返す

		$data = array(
			array(
				'date' => '2012/04/08 12:33',
				'body' => 'イースターなう'
			),
			array(
				'date' => '2012/04/08 07:52',
				'body' => '花祭りなう',
			)
		);
		return $data;
	}
}