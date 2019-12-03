<?php
class Juego5 extends Controller{



    public function __construct() {
        parent::__construct();
         $this->view->setTemplate('default');
               
    }

      public function index(){
        $this->juego5();
    }

    public function juego5() {
        
 
    $this->view->load('juego5');
  
    
        }}