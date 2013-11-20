<?php
App::uses('Img', 'Model');

/**
 * Img Test Case
 *
 */
class ImgTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.img',
		'app.companies_item',
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
		$this->Img = ClassRegistry::init('Img');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Img);

		parent::tearDown();
	}

}
