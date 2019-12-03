<?php
class Juego4 extends Controller{



    public function __construct() {
        parent::__construct();
         $this->view->setTemplate('default');
               
    }

      public function index(){
        $this->juego4();
    }

    public function juego4() {
        
 
    $this->view->load('juego4');
  
    
        }}