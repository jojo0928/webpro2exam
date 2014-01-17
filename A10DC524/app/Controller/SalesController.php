<?php
class SalesController extends AppController {
    public $name = 'Sales';
    public $helpers = array('Html', 'Form');


    public function index() {
        $sql = 'SELECT a.sales_at,a.product_id,a.name,SUM(a.quantity),a.price FROM (SELECT *  FROM products INNER JOIN (SELECT product_id,sales_at, quantity FROM sales)f  ON products.id = f.product_id) as a GROUP BY a.product_id ASC';

        $results = $this->Sale->query($sql);

        //var_dump($results);
            $this->set('sales', $results);
            //$this->set('sales', $this->Sale->find('all'));
    }

    public $components = array('Session');

    public function add() {

        if($this->request->is('post')) {
            if($this->Sale->save(($this->request->data))) {
                $this->Session->setFlash('ありがとうございました!');
            } else {
                $this->Session->setFlash('入力の誤りがあります。ご確認ください。');
            }
        }
    }

}


?>