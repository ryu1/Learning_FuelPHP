<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/06/20
 * Time: 22:30
 * To change this template use File | Settings | File Templates.
 */

class Model_Relation extends \Orm\Model
{

	protected static $_properties = array(
		'club_id',
		'student_id',
	);

	protected static $_primary_key = array('club_id', 'student_id');

	protected static $_table_name = 'relations';

	protected static $_has_one = array(
		'clubs' => array(
			'key_from' => 'club_id',
			'model_to' => 'Model_Club',
			'key_to' => 'club_id',
			'cascade_save' => true,
			'cascade_delete' => false,
		));

	protected static $_belongs_to = array(
		'students' => array(
			'key_from' => 'student_id',
			'model_to' => 'Model_Student',
			'key_to' => 'student_id',
			'cascade_save' => true,
			'cascade_delete' => false,
		)
	);
}