<?php
App::uses('AppModel', 'Model');
/**
 * Img Model
 *
 * @property CompaniesItem $CompaniesItem
 */
class Img extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'img';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'companies_item_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'CompaniesItem' => array(
			'className' => 'CompaniesItem',
			'foreignKey' => 'companies_item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
