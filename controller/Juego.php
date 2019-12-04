<?php
class Juego extends Controller{

    public function __construct() {
        parent::__construct();
         $this->view->setTemplate('default');
                    $this->model = new JuegoModel(); 
        
        $this->Carmodel = new CarritoModel();
   
    }

      public function index(){
        $this->juego();
    }

    public function ViewJuego($id) {

        $data['juegosus'] = $this->model->getOnlyJuegoById($id);
    $this->view->load('juego',$data);
        
        
    }
    public function addToCarrito() { 
             $data['msg'] = '';
         
        if(filter_input(INPUT_POST, 'addCarrito')){
            
          $this->Carmodel->InsertCarrito(new CarritoData("",$joj->getId_juego(),2, $joj->getPrecio()));
        }
}
    
        }