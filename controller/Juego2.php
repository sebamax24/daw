<?php
class Juego2 extends Controller{



    public function __construct() {
        parent::__construct();
         $this->view->setTemplate('default');
               
    }

      public function index(){
        $this->juego2();
    }

    public function juego2() {
        
 
    $this->view->load('juego2');
  
    
        }}