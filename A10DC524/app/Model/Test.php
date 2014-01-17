<?php
class Test extends AppModel {
    public $name = 'Test';

    public $validate = array(
	    'name' => array(
	        'rule' => 'notEmpty'
	    ),
	    'sex' => array(
	        'rule' => 'notEmpty'
	    ),
	    'q1' => array(
	        'rule' => 'notEmpty'
	    )
	);
}

?>