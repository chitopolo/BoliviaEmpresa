<?php
App::uses('CompaniesImage', 'Model');

/**
 * CompaniesImage Test Case
 *
 */
class CompaniesImageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companies_image',
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
		$this->CompaniesImage = ClassRegistry::init('CompaniesImage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompaniesImage);

		parent::tearDown();
	}

}
