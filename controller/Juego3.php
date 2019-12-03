<?php
class Juego3 extends Controller{



    public function __construct() {
        parent::__construct();
         $this->view->setTemplate('default');
               
    }

      public function index(){
        $this->juego3();
    }

    public function juego3() {
        
 
    $this->view->load('juego3');
  
    
        }}