<?php

namespace Fuel\Migrations;

class Create_students
{
	public function up()
	{
		\DBUtil::create_table('students', array(
			//'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'student_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			//'student_id' => array('type' => 'text'),
			'student_name' => array('constraint' => 50, 'type' => 'varchar'),

//		), array('id'));
		), array('student_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('students');
	}
}