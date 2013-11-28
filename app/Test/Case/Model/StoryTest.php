<?php
App::uses('Story', 'Model');

/**
 * Story Test Case
 *
 */
class StoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.story'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Story = ClassRegistry::init('Story');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Story);

		parent::tearDown();
	}

}
