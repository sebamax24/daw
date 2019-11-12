<?php

class Admin extends Controller{
         
    protected $login;

    public function __construct() {
        parent::__construct();
        $this->view->setTemplate('admin');
         $this->login = new Login();
         $this->model = new UsuarioModel(); 

    
        if (!$this->login->isLogged()) {//eso va dar palo, poner ! al inicio gracias
            $this->login();    

            die;
        }
      
    }

    public function index() {
        $data['usuario_jorge'] = $this->model->getUsuario();
        $data['usuario'] = $this->login->getSession();
        $this->view->load('Header');
        $this->view->load('listarUsuario',$data);
           
    }
    
 public function login() {
        $data['msg'] = '';
        if (filter_input(INPUT_POST, 'logar')) {
            $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
            $senha = filter_input(INPUT_POST, 'senha');
            $tipo =  filter_input(INPUT_POST, 'admin');
           
           
            if ($login && $senha) {
                if ($this->login->verifyLogin(new Usuario($login, $senha,"",""))) {
                    if (filter_input(INPUT_POST, 'manterlogado')) {
                        $this->login->createCookies();      
                       

                    }
                    $this->login->createSession();
                    $data['msg'] = '';
                } else {
                    echo'login ou senha errados';
                }
            } else {
               echo 'Informe o login e senha';
            }
        }
        if ($this->login->isLogged()) {
            $this->index();
        } else {
            $this->view->load('loginadmin', $data);
            
        }
    }

    public function logout() {
        $this->login->logout();
        header('location:' . $this->config->base_url . 'Admin');
    }
    
    
      public function addUsuario() {
        $data['msg']='';
        if (filter_input(INPUT_POST, 'add')) {
            $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
            $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
            $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
             $tempname = $_FILES['img']['tmp_name'];
                $img = $_FILES['img']['name'];
          
            if($login && $senha && $tipo && $img) {
                echo "if 1 passo";
                if(move_uploaded_file($tempname,'./view/templates/default/img/'.$img )){
                                    echo "if 2 passo";

                if($this->model->insertUsuario(new Usuario($login,$senha,$tipo,$img,""))){
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
        $this->view->load('AddUsuario',$data);
        $this->view->load('Header');
        $this->view->load('footer');    
        
    }
    
    
   /*   public function updateUsuario($id){ 
        $data['msg'] = '';
          echo "masas";
        if(filter_input(INPUT_POST, 'upd')){
            echo "sos";
            $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
            $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
            $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
            $tempname = $_FILES['img']['tmp_name'];
            $img = $_FILES['img']['name'];
//            $chek = $_FILES;
//            $img_old = filter_input(INPUT_POST, 'img_old', FILTER_SANITIZE_STRING);

            echo"sass";
            echo "seba";
                if($login && $senha && $tipo && $img) {
                    if(move_uploaded_file($tempname,'./view/templates/default/img/'.$img )){
//                         unlink('./view/templates/default/img/'.$img_old);
                
                        if($this->model->updateUsuario(new Usuario($id, $login,$senha,$tipo,$img))){
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
            $data['login'] = $this->model->getOnlyUsuarioById($id);
        $this->view->load('UpdUsuario',$data);
        $this->view->load('Header');
       
        }
      }
             
 */
     public function updateUsuario($id){ 
        $data['msg'] = '';
          echo "masas";
        if(filter_input(INPUT_POST, 'upd')){
            echo "sos";
            $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
            $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
            $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
            $tempname = $_FILES['img']['tmp_name'];
            $img = $_FILES['img']['name'];
            
           // $img_old = filter_input(INPUT_POST, 'img_old', FILTER_SANITIZE_STRING);

            echo"sass";
                if($login && $senha && $tipo && $img ) {
                    if(move_uploaded_file($tempname,'./view/templates/default/img/'.$img )){
                      //   unlink('./view/templates/default/img/'.$img_old);
                if($this->model->updateUsuario(new Usuario($login, $senha, $tipo,$img, $id))){
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
            $data['login'] = $this->model->getOnlyUsuarioById($id);
        $this->view->load('UpdUsuario',$data);
        $this->view->load('Header');
        $this->view->load('footer');}
      }

     public function deletusuario($id){
        if (filter_input(INPUT_POST, 'del')){
            $this->model->deleteusuario($id);
            $this->index();
        } else {
            $data['login'] = $this->model->getOnlyUsuarioById($id);

        $this->view->load('delUsuario',$data);
        $this->view->load('Header');
        $this->view->load('footer');
        }
    }
    
}