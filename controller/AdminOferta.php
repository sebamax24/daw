<?php

class AdminOferta extends Admin{
       
    public function __construct() {
        parent::__construct();
        $this->view->setTemplate('admin');
        $this->model = new OfertaModel(); 
    }
    
    public function index(){
        $this->listarOferta();
    }

    public function listarOferta() {
        $data['oferta'] = $this->model->getOferta();
        $this->view->load('ofertasadmin' ,$data);
        $this->view->load('Header');
        $this->view->load('footer');
             
    }
    
      public function addOferta() {
        $data['msg']='';
        if (filter_input(INPUT_POST, 'add')) {
            $oferta = filter_input(INPUT_POST, 'oferta', FILTER_SANITIZE_STRING);
            $tempname = $_FILES['img']['tmp_name'];
                $img = $_FILES['img']['name'];
           
            if($oferta && $img) {
                echo "if 1 passo";
                if(move_uploaded_file($tempname,'./view/templates/default/img/'.$img )){
                                    echo "if 2 passo";

                if($this->model->insertOferta(new OfertaData("",$oferta,$img))){
                                    echo "if 3 passo";

                    $this->index();
                    return true;
                }else{
                    echo 'Erro al cadastrar jurgp !!!';
                }
            }else{
                echo 'Informe todos los campos!!!';
                } 
            }
        }
        $this->view->load('AddOferta',$data);
        $this->view->load('Header');
        $this->view->load('footer');    
        
    }
    
         public function updateOferta($id){ 
        $data['msg'] = '';
          echo "masas";
        if(filter_input(INPUT_POST, 'upd')){
            echo "sos";
            $oferta = filter_input(INPUT_POST, 'oferta', FILTER_SANITIZE_STRING);
            $tempname = $_FILES['img']['tmp_name'];
            $img = $_FILES['img']['name'];
            $check = $_FILES;
            $img_old = filter_input(INPUT_POST, 'img_old', FILTER_SANITIZE_STRING);

            echo"sass";
                if($oferta && $img && $check) {
                    if(move_uploaded_file($tempname,'./view/templates/default/img/'.$img )){
                         unlink('./view/templates/default/img/'.$img_old);
                if($this->model->updateOferta(new OfertaData($id, $oferta,$img))){
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
            $data['oferta'] = $this->model->getOnlyOfertaById($id);
        $this->view->load('UpdOferta',$data);
        $this->view->load('Header');
        $this->view->load('footer');}
      }

    public function deletoferta($id){
        if (filter_input(INPUT_POST, 'del')){
            $this->model->deleteoferta($id);
            $this->index();
        } else {
            $data['oferta'] = $this->model->getOnlyOfertaById($id);

        $this->view->load('delOferta',$data);
        $this->view->load('Header');
        $this->view->load('footer');
        }
    }
    }
