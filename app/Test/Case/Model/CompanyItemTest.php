<?php
App::uses('CompanyItem', 'Model');

/**
 * CompanyItem Test Case
 *
 */
class CompanyItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.company_item',
		'app.company',
		'app.ad',
		'app.branch',
		'app.city',
		'app.country',
		'app.sub_user',
		'app.consultation',
		'app.deal',
		'app.map',
		'app.user',
		'app.sub_category',
		'app.companies_sub_category',
		'app.tag',
		'app.companies_tag',
		'app.item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompanyItem = ClassRegistry::init('CompanyItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyItem);

		parent::tearDown();
	}

}
