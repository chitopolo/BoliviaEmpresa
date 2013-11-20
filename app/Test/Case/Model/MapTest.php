<?php
App::uses('Map', 'Model');

/**
 * Map Test Case
 *
 */
class MapTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.map',
		'app.branch',
		'app.city',
		'app.country',
		'app.company',
		'app.ad',
		'app.groups_user',
		'app.group',
		'app.user',
		'app.consultation',
		'app.ticket',
		'app.item',
		'app.companies_item',
		'app.sub_category',
		'app.category',
		'app.companies_sub_category',
		'app.tag',
		'app.companies_tag',
		'app.deal'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Map = ClassRegistry::init('Map');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Map);

		parent::tearDown();
	}

}
