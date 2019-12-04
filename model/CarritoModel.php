<?php
class CarritoModel extends Model {

    public function getCarrito() {

        $list = [];
        $sql = "SELECT * FROM carrito";
        $resultados = $this->ExecuteQuery($sql, array());
        foreach ($resultados as $linha) {
            $list[] = new CarritoData(
                    $linha['id'], $linha['id_juego'], $linha['id_usuario'], $linha['precio']);
        }
        return $list;
    }
    
    public function deleteCarrito($id){
        $sql = "DELETE FROM carrito WHERE id = :idcarrito";
        if($this->ExecuteCommand($sql, [':idcarrito' => $id])){
            return true;
            } else {
                return false;
            }
    }
      public function updateCarrito($lol){

        $sql = "UPDATE carrito SET  id_juego = :id_juego, precio = :precio,descripcion = :descripcion, img = :img WHERE id = :idcarrito";
        if($this->ExecuteCommand($sql, [':idcarrito' =>$lol->getId_carrito(),                                         
                                        ':id_juego' =>$lol->getId_juego(),
                                        ':precio' =>$lol->getPrecio()])){
            return true;
            } else {
                return false;
            }
    } 


 

    public function getOnlyCarritoById($idcarrito){
        $sql = "SELECT * FROM carrito WHERE id = :idcarrito";
        $lol = $this->ExecuteQuery($sql, [':idcarrito' => $idcarrito])[0];
        return new CarritoData($lol['id'],$lol['nombre'], $lol['precio'], $lol['descripcion'], $lol['img']);
    }

    public function getCarritoById($id) {
        
        $sql = "SELECT count(id_carrito) FROM lol_imagens WHERE id_carrito = :idcarrito";
        [0];
       
            return  $this->getOnlyCarritoById($id);  
     
    }
    
    public function insertCarrito($lol) {
        $sql = "INSERT INTO carrito (id,id_juego,id_usuario,precio) VALUES(:nombre,:precio,:descripcion,:img)";
        if ($this->ExecuteCommand($sql, [
                                         ':nombre'=>$lol->getId_juego(),
                                         ':precio'=>$lol->getId_usuario(),
										 ':descripcion' =>$lol->getPrecio()])) {
            return true;
        } else {
            return false;
        }
    }    
}