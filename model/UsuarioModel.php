<?php

class UsuarioModel extends Model {
    
     public function getUsuario() {

        $list = [];
        $sql = "SELECT * FROM usuario";
        $resultados = $this->ExecuteQuery($sql, array());
        foreach ($resultados as $linha) {
            $list[] = new Usuario(
                             $linha['login'],
                             $linha['senha'],
                             $linha['tipo'],
                             $linha['img'],
                             $linha['id']
                             );
           
        }
        return $list;
    }
    
    public function getUsuarioByLogin($login) {
        $sql = "SELECT * FROM usuario WHERE login = :login";
        
        $resultado = $this->ExecuteQuery($sql, [':login' => $login]);
       
        if($resultado){
          $user = $resultado[0];
          return new Usuario(
                             $user['login'],
                             $user['senha'],
                             $user['tipo'],
                             $user['img'],
                             $user['id']
                             );
           
            
        }else{
          return $resultado;
        }
    }   
    public function getOnlyUsuarioById($iduser){
        $sql = "SELECT * FROM usuario WHERE id  = :idusuario";
        $lol = $this->ExecuteQuery($sql, [':idusuario' => $idusuario])[0];
        return new Usuario($lol['id '],$lol['login'],$lol['senha'],$lol['tipo'], $lol['img']);
    }

    public function getUsuarioById($id) {
        
        $sql = "SELECT count(id ) FROM lol_imagens WHERE id  = :idusuario";
        [0];
       // if ($resultados['num_imgs']) {
       //     return $this->getlolImagensById($idlol);
       // } else {
            return  $this->getOnlyUsuarioById($id);  
      //  }
    }
    

    public function insertUsuario($lol) {
        $sql = "INSERT INTO usuario (login,senha,tipo,img) VALUES(:login,:senha,:tipo,:img)";
    
        if ($this->ExecuteCommand($sql, [
                                         ':login'=>$lol->getLogin(),
                                         ':senha'=>$lol->getSenha(),
										 ':tipo' =>$lol->getTipo(),
                                         ':img'=>$lol->getImg()])) {
            return true;
         }
               
else {
            return false;
        }
    }
    
     
    public function deleteUsuario($id){
        $sql = "DELETE FROM usuario WHERE id  = :idusuario";
        if($this->ExecuteCommand($sql, [':idusuario' => $id])){
            return true;
            } else {
                return false;
            }
    }
      public function updateUsuario($lol){
        $sql = "UPDATE usuario SET  login = :login, senha = :senha, tipo = :tipo,  img = :img WHERE id  = :idusuario";
        if($this->ExecuteCommand($sql, [                                        
                                        ':login' =>$lol->getLogin(),
                                        ':senha' =>$lol->getSenha(),
                                        ':tipo' =>$lol->getTipo(),
                                    	':img' =>$lol->getImg(),
                                        ':idusuario' =>$lol->getId_user()])){
            return true;
            } else {
                return false;
            }
    } 
  
    
}
