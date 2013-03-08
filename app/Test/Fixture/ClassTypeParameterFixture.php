<?php
/**
 * ClassTypeParameterFixture
 *
 */
class ClassTypeParameterFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'owner_class_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_turkish_ci', 'charset' => 'utf8'),
		'class_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'must' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'data_scope' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_turkish_ci', 'charset' => 'utf8'),
		'default_value' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_turkish_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_turkish_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_turkish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'owner_class_type_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'class_type_id' => 1,
			'must' => 1,
			'data_scope' => 'Lorem ipsum dolor sit amet',
			'default_value' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
