<?php
class Juego extends Controller{



    public function __construct() {
        parent::__construct();
         $this->view->setTemplate('default');
               
    }

      public function index(){
        $this->juego();
    }

    public function juego() {
        
 
    $this->view->load('juego');
  
    
        }}