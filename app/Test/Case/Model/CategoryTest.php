<?php
App::uses('Category', 'Model');

/**
 * Category Test Case
 *
 */
class CategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.category',
		'app.sub_category',
		'app.company',
		'app.ad',
		'app.branch',
		'app.city',
		'app.country',
		'app.groups_user',
		'app.group',
		'app.user',
		'app.consultation',
		'app.ticket',
		'app.deal',
		'app.map',
		'app.item',
		'app.companies_item',
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
		$this->Category = ClassRegistry::init('Category');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Category);

		parent::tearDown();
	}

}
