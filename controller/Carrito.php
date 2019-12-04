<?php
class Carrito extends Controller{

    public function __construct() {
        parent::__construct();
         $this->view->setTemplate('default');
        
        $this->model = new CarritoModel(); 
       $this->juemodel = new JuegoModel();
               
    }

      public function index(){
        $this->carrito();
    }

    public function carrito() {
        $this->view->load('carrito');    
        }
    
  
}