<?php
App::uses('MethodResponseStatus', 'Model');

/**
 * MethodResponseStatus Test Case
 *
 */
class MethodResponseStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.method_response_status',
		'app.method'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MethodResponseStatus = ClassRegistry::init('MethodResponseStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MethodResponseStatus);

		parent::tearDown();
	}

}
