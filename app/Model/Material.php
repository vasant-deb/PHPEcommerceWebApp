<?php
App::uses('AppModel', 'Model');
/**
 * Size Model
 *
 */
class Material extends AppModel {

 public $validate = array(
        'name' => array(
            'rule1' => array(
                'rule' => array('notBlank'),
                'message' => 'Material Name is required',              
            ),
            'rule2' => array(
                'rule' => array('isUnique'),
                'message' => 'Material Name is not Unique',              
            ),
        ),		 
    );
	 public $hasMany = array(
        
        'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'material_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
}
