<?php
/**
 * MethodResponseStatusFixture
 *
 */
class MethodResponseStatusFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'method_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'status_code' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_turkish_ci', 'charset' => 'utf8'),
		'status_description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_turkish_ci', 'charset' => 'utf8'),
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
			'method_id' => 1,
			'status_code' => 'Lorem ipsum dolor sit amet',
			'status_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
