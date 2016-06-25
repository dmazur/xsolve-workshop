<?php

/* Example Column Options:
$column = array(
	'type' => 'primary|string|integer|boolean|decimal|datetime',
	'length' => NULL,
	'index' => FALSE,
	'null' => TRUE,
	'default' => NULL,
	'unique' => FALSE,
	'precision' => 0, // (optional, default 0) The precision for a decimal (exact numeric) column. (Applies only if a decimal column is used.)
	'scale' => 0, // (optional, default 0) The scale for a decimal (exact numeric) column. (Applies only if a decimal column is used.)
);
*/

$config = array(

		'dorm' => array(
		'id' => array('type' => 'primary'),
		'name' => array('type' => 'string'),
		'created' => array('type' => 'datetime'),
		'modified' => array('type' => 'datetime'),
	),

	'student' => array(
		'id' => array('type' => 'primary'),
		'name' => array('type' => 'string'),
		'dorm_id' => array('type' => 'integer'),
	),

	'car' => array(
		'id' => array('type' => 'primary'),
		'name' => array('type' => 'string'),
		'student_id' => array('type' => 'integer'),
	),

	'membership' => array(
		'id' => array('type' => 'primary'),
		'student_id' => array('type' => 'integer'),
		'club_id' => array('type' => 'integer'),
	),

	'club' => array(
		'id' => array('type' => 'primary'),
		'name' => array('type' => 'string'),
	),

);
