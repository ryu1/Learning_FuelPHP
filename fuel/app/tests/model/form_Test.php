<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/06/02
 * Time: 17:30
 * To change this template use File | Settings | File Templates.
 */

/**
 * Class Test_Model_Form
 *
 * @group App
 */
class Test_Model_Form extends DbTestCase
{

	protected $tables = array(
		// テーブル名 => YAMLファイル名
		'form' => 'form',
	);

	public function test_find_one_by_id() {

		foreach ($this->form_fixt as $row)
		{
			$form= Model_Form::find_by_pk($row['id']);

			foreach ($row as $field => $value)
			{
				$test = $form->$field;
				$expected = $row[$field];
				$this->assertEquals($expected, $test);
			}
		}
	}

	public function test_save_insert()
	{
		$data = array(
			'name' => '藤原義孝',
			'email' => 'yoshitaka@example.jp',
			'comment' => '君がため 惜しからざりし 命さえ 長くもがな 思いけるかな',
			'ip_address' => '10.11.12.13',
			'user_agent' => 'Mozilla/2.02 (Macintosh; I; PPC)',
		);

		$form = Model_Form::forge()->set($data);

		// 新規データをデータベースに挿入
		list($id, $rows) = $form->save();

		// 挿入されたデータをデータベースから検索
		$form = Model_Form::find_by_pk($id);

		foreach($data as $field => $value)
		{
			$this->assertEquals($value, $form[$field]);
		}
	}
}