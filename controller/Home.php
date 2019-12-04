<?php
class Home extends Controller{

    public function __construct() {
        parent::__construct();
        
                    $this->model = new JuegoModel(); 
    }

    public function index(){
        $data['juezgo'] = $this->model->getJuego();
        $this->view->load('header');
        $this->view->load('index',$data);
        $this->view->load('footer');
    }
    
     }
    

