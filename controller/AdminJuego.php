<?php

class AdminJuego extends Admin{
       
    public function __construct() {
        parent::__construct();
        $this->view->setTemplate('admin');
        $this->model = new JuegoModel(); 
    }
    
    public function index(){
        $this->listarJuego();
    }

    public function listarJuego() {
        $data['juego'] = $this->model->getJuego();
        $this->view->load('juegosadmin' ,$data);
        $this->view->load('Header');
        $this->view->load('footer');
        
        
    }
      public function addJuego() {
        $data['msg']='';
        if (filter_input(INPUT_POST, 'add')) {
            $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
            $precio = filter_input(INPUT_POST, 'precio', FILTER_SANITIZE_STRING);
            $descripcion = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
             $tempname = $_FILES['img']['tmp_name'];
                $img = $_FILES['img']['name'];
          
            if($descripcion && $nombre && $precio && $img) {
                echo "if 1 passo";
                if(move_uploaded_file($tempname,'./view/templates/default/img/'.$img )){
                                    echo "if 2 passo";

                if($this->model->insertJuego(new JuegoData("",$nombre,$precio,$descripcion,$img))){
                                    echo "if 3 passo";

                    $this->index();
                    return true;
                }else{
                    echo 'Erro al cadastrar juego !!!';
                }
            }else{
                echo 'Informe todos los campos!!!';
                } 
            }
        }
        $this->view->load('AddJuego',$data);
        $this->view->load('Header');
        $this->view->load('footer');    
        
    }
    
      public function updatejuego($id){ 
        $data['msg'] = '';
          echo "masas";
        if(filter_input(INPUT_POST, 'upd')){
            echo "sos";
            $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
            $precio = filter_input(INPUT_POST, 'precio', FILTER_SANITIZE_STRING);
            $descripcion = filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
            $tempname = $_FILES['img']['tmp_name'];
            $img = $_FILES['img']['name'];
//            $chek = $_FILES;
//            $img_old = filter_input(INPUT_POST, 'img_old', FILTER_SANITIZE_STRING);

            echo"sass";
                if($descripcion && $nombre && $precio && $img) {
                    if(move_uploaded_file($tempname,'./view/templates/default/img/'.$img )){
//                         unlink('./view/templates/default/img/'.$img_old);
                if($this->model->updateJuego(new juegoData($id, $nombre,$precio,$descripcion,$img))){
                    $this->index();
                    return true;
                }else{
                    $data['msg']='Erro ao cadastrar notícia!!!';
                }
                    }
            }else{
                $data['msg']='Informe todos os campos!!!';
            }
        } else{
            $data['juego'] = $this->model->getOnlyJuegoById($id);
        $this->view->load('UpdJuego',$data);
        $this->view->load('Header');
        }
      }

    public function deletjuego($id){
        if (filter_input(INPUT_POST, 'del')){
            $this->model->deletejuego($id);
            $this->index();
        } else {
            $data['juego'] = $this->model->getOnlyjuegoById($id);

        $this->view->load('delJuego',$data);
        $this->view->load('Header');
        $this->view->load('footer');
        }
    }
    }
    
