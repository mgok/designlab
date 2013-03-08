<?php
App::uses('ClassTypeParameter', 'Model');

/**
 * ClassTypeParameter Test Case
 *
 */
class ClassTypeParameterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.class_type_parameter',
		'app.class_type',
		'app.design_workspace',
		'app.operation_input_parameter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClassTypeParameter = ClassRegistry::init('ClassTypeParameter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClassTypeParameter);

		parent::tearDown();
	}

}
