<?php
class OfertaModel extends Model {

    public function getOferta() {

        $list = [];
        $sql = "SELECT * FROM oferta";
        $resultados = $this->ExecuteQuery($sql, array());
        foreach ($resultados as $linha) {
            $list[] = new OfertaData(
                    $linha['id'], $linha['oferta'],  $linha['img']);
        }
        return $list;
    }
    
    public function deleteOferta($id){
        $sql = "DELETE FROM oferta WHERE id  = :idoferta";
        if($this->ExecuteCommand($sql, [':idoferta' => $id])){
            return true;
            } else {
                return false;
            }
    }
      public function updateOferta($lol){
        $sql = "UPDATE oferta SET  oferta = :oferta, img = :img WHERE id  = :idoferta";
        if($this->ExecuteCommand($sql, [':idoferta' =>$lol->getId_oferta (),                                         
                                        ':oferta' =>$lol->getOferta(),
                                    	':img' =>$lol->getImg()])){
            return true;
            } else {
                return false;
            }
    } 


 

    public function getOnlyOfertaById($idoferta){
        $sql = "SELECT * FROM oferta WHERE id  = :idoferta";
        $lol = $this->ExecuteQuery($sql, [':idoferta' => $idoferta])[0];
        return new OfertaData($lol['id '],$lol['oferta'], $lol['img']);
    }

    public function getOfertaById($id) {
        
        $sql = "SELECT count(id ) FROM lol_imagens WHERE id  = :idoferta";
        [0];
       // if ($resultados['num_imgs']) {
       //     return $this->getlolImagensById($idlol);
       // } else {
            return  $this->getOnlyOfertaById($id);  
      //  }
    }
    
    public function insertOferta($lol) {
        $sql = "INSERT INTO oferta (oferta,img) VALUES(:oferta,:img)";
        if ($this->ExecuteCommand($sql, [
                                         ':oferta'=>$lol->getOferta(),
                                         ':img'=>$lol->getImg()])) {
            return true;
        } else {
            return false;
        }
    }    
}