<?php
App::uses('OperationResponseStatus', 'Model');

/**
 * OperationResponseStatus Test Case
 *
 */
class OperationResponseStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.operation_response_status',
		'app.operation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OperationResponseStatus = ClassRegistry::init('OperationResponseStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OperationResponseStatus);

		parent::tearDown();
	}

}
