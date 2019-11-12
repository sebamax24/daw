<?php
class JuegoModel extends Model {

    public function getJuego() {

        $list = [];
        $sql = "SELECT * FROM juego";
        $resultados = $this->ExecuteQuery($sql, array());
        foreach ($resultados as $linha) {
            $list[] = new JuegoData(
                    $linha['id'], $linha['nombre'], $linha['precio'], $linha['descripcion'],  $linha['img']);
        }
        return $list;
    }
    
    public function deleteJuego($id){
        $sql = "DELETE FROM juego WHERE id = :idjuego";
        if($this->ExecuteCommand($sql, [':idjuego' => $id])){
            return true;
            } else {
                return false;
            }
    }
      public function updateJuego($lol){
//          echo "$lol->getId_juego()";
        $sql = "UPDATE juego SET  nombre = :nombre, precio = :precio,descripcion = :descripcion, img = :img WHERE id = :idjuego";
        if($this->ExecuteCommand($sql, [':idjuego' =>$lol->getId_juego(),                                         
                                        ':nombre' =>$lol->getNombre(),
                                        ':precio' =>$lol->getPrecio(),
                                        ':descripcion' =>$lol->getDescripcion(),
										':img' =>$lol->getImg()])){
            return true;
            } else {
                return false;
            }
    } 


 

    public function getOnlyJuegoById($idjuego){
        $sql = "SELECT * FROM juego WHERE id = :idjuego";
        $lol = $this->ExecuteQuery($sql, [':idjuego' => $idjuego])[0];
        return new JuegoData($lol['id'],$lol['nombre'], $lol['precio'], $lol['descripcion'], $lol['img']);
    }

    public function getJuegoById($id) {
        
        $sql = "SELECT count(id_juego) FROM lol_imagens WHERE id_juego = :idjuego";
        [0];
       // if ($resultados['num_imgs']) {
       //     return $this->getlolImagensById($idlol);
       // } else {
            return  $this->getOnlyJuegoById($id);  
      //  }
    }
    
    public function insertJuego($lol) {
        $sql = "INSERT INTO juego (nombre,precio,deScripcion,img) VALUES(:nombre,:precio,:descripcion,:img)";
        if ($this->ExecuteCommand($sql, [
                                         ':nombre'=>$lol->getNombre(),
                                         ':precio'=>$lol->getPrecio(),
										 ':descripcion' =>$lol->getDescripcion(),
                                         ':img'=>$lol->getImg()])) {
            return true;
        } else {
            return false;
        }
    }    
}