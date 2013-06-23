<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/06/20
 * Time: 22:54
 * To change this template use File | Settings | File Templates.
 */

class Model_Student extends \Orm\Model
{
	protected static $_properties = array(
		'student_id',
		'student_name',
	);

	protected static $_primary_key = array('student_id');

	protected static $_table_name = 'students';

	protected static $_has_many = array(
		'relations' => array(
			'key_from' => 'student_id',
			'model_to' => 'Model_Relation',
			'key_to' => 'student_id',
			'cascade_save' => true,
			'cascade_delete' => false,
		));

	protected static $_many_many = array(
		'clubs' => array(
			'key_from' => 'student_id',
			'key_through_from' => 'student_id', // テーブル間のカラム1は、posts.idと一致する必要があります
			'table_through' => 'relations', // アルファベット順に接頭辞なしの複数のmodel双方に
			'key_through_to' => 'club_id', // テーブル間のカラム2は、users.idと一致する必要があります
			'model_to' => 'Model_Club',
			'key_to' => 'club_id',
			'cascade_save' => true,
			'cascade_delete' => false,
		)
	);

	public static function get_students_has_many()
	{
		$data = static::find('all', array(
			'related' => array(
				'relations' => array(
					'related' => array('clubs'),
					),
				),
			)
		);
		return $data;
	}

	public static function get_students_many_to_many()
	{
		$data = static::find('all', array(
				'related' => array(
					'clubs',
				),
			)
		);
		return $data;
	}
}