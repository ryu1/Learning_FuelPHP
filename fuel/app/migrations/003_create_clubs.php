<?php

namespace Fuel\Migrations;

class Create_clubs
{
	public function up()
	{
		\DBUtil::create_table('clubs', array(
			//'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'club_id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			//'club_id' => array('type' => 'text'),
			'club_name' => array('constraint' => 50, 'type' => 'varchar'),

		//), array('id'));
		), array('club_id'));
	}

	public function down()
	{
		\DBUtil::drop_table('clubs');
	}
}