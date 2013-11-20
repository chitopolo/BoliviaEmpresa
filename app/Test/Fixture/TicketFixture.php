<?php
/**
 * TicketFixture
 *
 */
class TicketFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'number' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'deadline' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'groups_user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'deal_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'customer_id' => array('column' => 'groups_user_id', 'unique' => 0),
			'deal_id' => array('column' => 'deal_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'number' => 1,
			'created' => '2013-11-01 05:21:04',
			'modified' => '2013-11-01 05:21:04',
			'deadline' => '2013-11-01 05:21:04',
			'groups_user_id' => 1,
			'deal_id' => 1
		),
	);

}
