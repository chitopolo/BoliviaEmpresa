<?php
App::uses('CompaniesTag', 'Model');

/**
 * CompaniesTag Test Case
 *
 */
class CompaniesTagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companies_tag',
		'app.company',
		'app.groups_user',
		'app.group',
		'app.user',
		'app.branch',
		'app.city',
		'app.country',
		'app.consultation',
		'app.deal',
		'app.ticket',
		'app.ad',
		'app.companies_image',
		'app.item',
		'app.companies_item',
		'app.sub_category',
		'app.category',
		'app.companies_sub_category',
		'app.tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompaniesTag = ClassRegistry::init('CompaniesTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompaniesTag);

		parent::tearDown();
	}

}
