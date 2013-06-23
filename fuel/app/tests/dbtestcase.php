<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/06/02
 * Time: 16:55
 * To change this template use File | Settings | File Templates.
 */

use Fuel\Core\TestCase;

abstract class DbTestCase extends TestCase
{
	// フィクスチャデータ
	protected $tables = array(
		// テーブル名 => ファイル名
	);

	protected function setUp()
	{
		parent::setUp();

		if (! empty($this->tables))
		{
			$this->dbfixt($this->tables);
		}
	}

	protected function dbfixt($tables)
	{
		// $this->dbfixt('table1', 'table2', ...)という形式もサポート
		$tables = is_string($tables) ? func_get_args() : $tables;

		foreach (array_reverse($tables, true) as $table => $file)
		{
			DbFixture::empty_table($table);
		}

		foreach ($tables as $table => $file)
		{
			$fixt_name = $file . '_fixt';
			$this->$fixt_name = DbFixture::load($table, $file);
		}
	}

}