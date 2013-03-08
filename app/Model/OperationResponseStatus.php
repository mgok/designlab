<?php
App::uses('AppModel', 'Model');
/**
 * OperationResponseStatus Model
 *
 * @property Operation $Operation
 */
class OperationResponseStatus extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'designlab';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'operation_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status_code' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status_description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Operation' => array(
			'className' => 'Operation',
			'foreignKey' => 'operation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
