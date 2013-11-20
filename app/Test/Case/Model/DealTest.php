<?php
App::uses('Deal', 'Model');

/**
 * Deal Test Case
 *
 */
class DealTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.deal',
		'app.branch',
		'app.city',
		'app.country',
		'app.company',
		'app.groups_user',
		'app.group',
		'app.user',
		'app.consultation',
		'app.ticket',
		'app.ad',
		'app.companies_image',
		'app.item',
		'app.companies_item',
		'app.sub_category',
		'app.category',
		'app.companies_sub_category',
		'app.tag',
		'app.companies_tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Deal = ClassRegistry::init('Deal');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Deal);

		parent::tearDown();
	}

}
