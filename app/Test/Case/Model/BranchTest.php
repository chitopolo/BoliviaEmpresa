<?php
App::uses('Branch', 'Model');

/**
 * Branch Test Case
 *
 */
class BranchTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.branch',
		'app.city',
		'app.country',
		'app.company',
		'app.ad',
		'app.companies_image',
		'app.groups_user',
		'app.group',
		'app.user',
		'app.consultation',
		'app.ticket',
		'app.deal',
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
		$this->Branch = ClassRegistry::init('Branch');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Branch);

		parent::tearDown();
	}

}
