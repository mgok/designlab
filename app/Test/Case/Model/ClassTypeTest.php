<?php
App::uses('ClassType', 'Model');

/**
 * ClassType Test Case
 *
 */
class ClassTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.class_type',
		'app.design_workspace',
		'app.class_type_parameter',
		'app.operation_input_parameter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClassType = ClassRegistry::init('ClassType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClassType);

		parent::tearDown();
	}

}
