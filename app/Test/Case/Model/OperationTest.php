<?php
App::uses('Operation', 'Model');

/**
 * Operation Test Case
 *
 */
class OperationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.operation',
		'app.design_workspace',
		'app.project',
		'app.class_type',
		'app.class_type_parameter',
		'app.operation_input_parameter',
		'app.operation_response_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Operation = ClassRegistry::init('Operation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Operation);

		parent::tearDown();
	}

}
