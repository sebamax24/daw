<?php

class AdminVideos extends Admin{
 
      
 public function __construct() {
        parent::__construct();
        $this->model = new VideoModel();
    }
    public function index(){
        $this->listar3();
    }
    public function listar3() {
        $data['video'] = $this->model->getVideo();
        $this->view->load('ListarVideos' ,$data);
        $this->view->load('Header');
        $this->view->load('footer');       
    }

    public function AddVideos() {
        $data['msg']='';
        if (filter_input(INPUT_POST, 'add')) {
            $video = filter_input(INPUT_POST, 'video', FILTER_SANITIZE_STRING);
            if($video) {
                if($this->model->insertVideo(new Video($video,""))){
                    $this->index();
                    return true;
                }else{
                    $data['msg']='Error al cadastar videos!!!';
                }
            }else{
                $data['msg']='Informe todos los campos!!!';
            }
        }
        var_dump($data['msg']);
        $this->view->load('AddVideos',$data);
        $this->view->load('Header');
        $this->view->load('footer');    
       
    }
    public function updateVideo($id){ 
        $data['msg'] = '';
        if(filter_input(INPUT_POST, 'upd')){
            $id = filter_input(INPUT_POST, 'idv', FILTER_SANITIZE_STRING);
            $video = filter_input(INPUT_POST, 'embvi', FILTER_SANITIZE_STRING);
           echo $id;
           echo $video;
            if($id && $video) {

                if($this->model->updateVideo(new Video($video,$id))){
                    $this->index();
                    return true;
                }else{
                    $data['msg']='Erro ao cadastrar notícia!!!';
                }
            }else{
                $data['msg']='Informe todos os campos!!!';
            }
        } else{
            $data['video'] = $this->model->getOnlyVideoById($id);
        $this->view->load('act_videos',$data);
        $this->view->load('Header');
        $this->view->load('footer');}
      }

      public function deletVideo($id){
        if (filter_input(INPUT_POST, 'deletar')){
            $this->model->deleteVideo($id);
            $this->index();
        } else {
            $data['video'] = $this->model->getOnlyVideoById($id);
  
         $this->view->load('bor_videos',$data);
        $this->view->load('Header');
        $this->view->load('footer');
        }
    }
}