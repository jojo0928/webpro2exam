<?php
class Product extends AppModel {
    public $name = 'Product';

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'price' => array(
            'rule' => 'notEmpty'
        )
    );
}

?>