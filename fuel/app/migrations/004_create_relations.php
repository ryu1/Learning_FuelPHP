<?php

namespace Fuel\Migrations;

class Create_relations
{
	public function up()
	{
		\DBUtil::create_table('relations', array(
			'club_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
			'student_id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
		),
		array('club_id', 'student_id'), false, 'InnoDB', 'utf8_unicode_ci',
		array(
			array(
				'key' => 'club_id',
				'reference' => array(
					'table' => 'clubs',
					'column' => 'club_id'
				)
			),
			array(
				'key' => 'student_id',
				'reference' => array(
					'table' => 'students',
					'column' => 'student_id'
				)
			),
		)
		);
	}

	public function down()
	{
		\DBUtil::drop_table('relations');
	}
}