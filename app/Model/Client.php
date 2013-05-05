<?php
App::uses('AppModel', 'Model');
/**
 * Customer Model
 *
 */
class Client extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'title' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'onlyletter' => array(
                'rule'    => '/^[a-z ]{1,}$/i',
                'message' => 'Please enter alphabet letters only'

            ),
        ),
        'givenname' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'onlyletter' => array(
                'rule'    => '/^[a-z ]{1,}$/i',
                'message' => 'Please enter alphabet letters only'

            ),
            'maxlength' => array(
                'rule' => array('maxlength', 50),
                'message' => 'Please enter a name less than 50 characters',
                'allowEmpty' => false
            ),
        ),
        'streetnumber' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                'positiveNumber' => array('comparison','>',0),
                'message' => 'Please enter a positive number',
            ),
        ),
        'streetname' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'onlyletter' => array(
                'rule'    => '/^[a-z ]{1,}$/i',
                'message' => 'Please enter alphabet letters only.'

            ),
            'maxlength' => array(
                'rule' => array('maxlength', 50),
                'message' => 'Please enter a name less than 50 characters',
                'allowEmpty' => false
            ),
        ),
        'suburb' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'onlyletter' => array(
                'rule'    => '/^[a-z ]{1,}$/i',
                'message' => 'Please enter alphabet letters only'

            ),
            'maxlength' => array(
                'rule' => array('maxlength', 50),
                'message' => 'Please enter a name less than 50 characters',
                'allowEmpty' => false
            ),
        ),
        'postcode' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Please enter a 4 digit post code',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                'positiveNumber' => array('comparison','>',0),
                'message' => 'Please enter a positive number',
            ),
            'between' => array(
                'rule'    => array('between', 4, 4),
                'message' => 'Please enter a 4 digit post code'
            ),
        ),


        'state' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please select a state',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'onlyletter' => array(
                'rule'    => '/^[a-z ]{1,}$/i',
                'message' => 'Please enter alphabet letters only'

            ),
            'maxlength' => array(
                'rule' => array('maxlength', 50),
                'message' => 'Please enter a name less than 50 characters',
                'allowEmpty' => false
            ),
        ),
        'email' => array(
            'notempty' => array(
                'rule' => array('email'=>'email'),
                'message' => 'Please enter a valid email address',
                'allowEmpty' => true,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
                ),
        'mobilephone' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Please enter a phone number',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                'positiveNumber' => array('comparison','>',0),
                'message' => 'Please enter a positive number',
            ),

            'between' => array(
                'rule'    => array('between', 10, 10),
                'message' => 'Please enter a Australian mobile number'
            ),

        ),
        );

}
