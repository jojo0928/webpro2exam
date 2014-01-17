<?php
class ProductsController extends AppController {
    public $name = 'Products';
    public $helpers = array('Html', 'Form');


    public function index() {
        $this->set('products', $this->Product->find('all'));
    }


   public function view($id = null) {
       $this->Product->id = $id;
       //echo  $this->Product->id;
       $this->set('products', $this->Product->read());

   }

}


?>