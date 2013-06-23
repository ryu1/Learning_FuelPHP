<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/06/20
 * Time: 23:28
 * To change this template use File | Settings | File Templates.
 */

/**
 * Class Test_Model_Student
 *
 * @group App
 */
class Test_Model_Student extends DbTestCase
{

	protected $tables = array(
		// テーブル名 => YAMLファイル名
		'clubs' => 'club',
		'students' => 'student',
		'relations' => 'relation',
	);

//	public function test_find()
//	{
//		echo __METHOD__ . PHP_EOL;
//		$data = Model_Student::find('all');
//		print_r($data);
//
//		foreach($data as $key => $value)
//		{
//			echo $key . PHP_EOL;
//		}
//
//	}

	public function test_get_students_has_many()
	{
		echo __METHOD__ . PHP_EOL;
		$data = Model_Student::get_students_has_many();
		print_r($data);
		echo PHP_EOL;
	}

	public function test_get_students_many_to_many()
	{
		echo __METHOD__ . PHP_EOL;
		$data = Model_Student::get_students_many_to_many();
		print_r($data);
		echo PHP_EOL;
	}

}