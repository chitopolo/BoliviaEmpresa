<?php
App::uses('Consultation', 'Model');

/**
 * Consultation Test Case
 *
 */
class ConsultationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.consultation',
		'app.branch',
		'app.city',
		'app.country',
		'app.company',
		'app.ad',
		'app.groups_user',
		'app.item',
		'app.companies_item',
		'app.sub_category',
		'app.category',
		'app.companies_sub_category',
		'app.tag',
		'app.companies_tag',
		'app.deal',
		'app.map'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Consultation = ClassRegistry::init('Consultation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Consultation);

		parent::tearDown();
	}

}
