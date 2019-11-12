<?php
class Usuario {
    private $id_user;  
    private $login;
    private $senha;
    private $tipo;
    private $img;
  
     function __construct($login, $senha, $tipo, $img, $id_user='null') {
          
        $this->login = $login;
        $this->senha = $senha;
        $this->tipo = $tipo;
        $this->img = $img;
         $this->id_user = $id_user;  
         
       
    }

    function getId_user() {
        return $this->id_user;
    }  
    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }
	
	function getTipo() {
        return $this->tipo;
    }	
    function getImg() {
        return $this->img;
    }
    function setId_user($id_user) {
        $this->id_user = $id_user;
    }
    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }  

	function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    function setImg($img) {
        $this->img = $img;
    }

}
