<?php
App::uses('CompaniesSubCategory', 'Model');

/**
 * CompaniesSubCategory Test Case
 *
 */
class CompaniesSubCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companies_sub_category',
		'app.company',
		'app.ad',
		'app.branch',
		'app.city',
		'app.country',
		'app.groups_user',
		'app.consultation',
		'app.deal',
		'app.map',
		'app.item',
		'app.companies_item',
		'app.sub_category',
		'app.category',
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
		$this->CompaniesSubCategory = ClassRegistry::init('CompaniesSubCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompaniesSubCategory);

		parent::tearDown();
	}

}
