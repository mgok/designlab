<?php
App::uses('OperationInputParameter', 'Model');

/**
 * OperationInputParameter Test Case
 *
 */
class OperationInputParameterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.operation_input_parameter',
		'app.operation',
		'app.class_type',
		'app.design_workspace',
		'app.project',
		'app.class_type_parameter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OperationInputParameter = ClassRegistry::init('OperationInputParameter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OperationInputParameter);

		parent::tearDown();
	}

}
