<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/06/20
 * Time: 22:47
 * To change this template use File | Settings | File Templates.
 */

class Model_Club extends \Orm\Model
{
	protected static $_properties = array(
		'club_id',
		'club_name',
	);

	protected static $_primary_key = array('club_id');

	protected static $_table_name = 'clubs';

	protected static $_belongs_to = array(
		'relations' => array(
			'key_from' => 'club_id',
			'model_to' => 'Model_Relation',
			'key_to' => 'club_id',
			'cascade_save' => true,
			'cascade_delete' => false,
		)
	);
}