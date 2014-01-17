<?php
class Sale extends AppModel {
    public $name = 'Sale';

    public $validate = array(
        'product_id' => array(
            'rule' => 'notEmpty'
        ),
        'sales_at' => array(
            'rule' => 'notEmpty'
        ),
        'quantity' => array(
            array('rule' => array('custom', '/^[0-9]+$/'), 'message' => '半角数字で入力して下さい')
        ),
    );
}

?>