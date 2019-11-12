<?php
class Carrito extends Controller{



    public function __construct() {
        parent::__construct();
         $this->view->setTemplate('default');
               
    }

      public function index(){
        $this->carrito();
    }

    public function carrito() {
        $this->view->load('carrito');
        $this->view->load('Header');
    
  
    
        }}