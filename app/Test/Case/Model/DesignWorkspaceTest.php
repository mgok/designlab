<?php
App::uses('DesignWorkspace', 'Model');

/**
 * DesignWorkspace Test Case
 *
 */
class DesignWorkspaceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.design_workspace',
		'app.project',
		'app.class_type',
		'app.class_type_parameter',
		'app.operation_input_parameter',
		'app.operation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DesignWorkspace = ClassRegistry::init('DesignWorkspace');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DesignWorkspace);

		parent::tearDown();
	}

}
