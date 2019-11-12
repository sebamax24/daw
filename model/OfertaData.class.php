<?php

class OfertaData {
    private $id_oferta;
    private $oferta;
    private $img;
  
    
    function __construct($id_oferta=null, $oferta, $img) {
        $this->id_oferta = $id_oferta;
		$this->oferta = $oferta;
        $this->img = $img;
    }
    function getId_oferta() {
        return $this->id_oferta;
    }   

    function getOferta() {
        return $this->oferta;
    }

	function getImg() {
        return $this->img;
    }

    function setId_oferta($id_oferta) {
        $this->id_oferta = $id_oferta;
    }

    function setoferta($oferta) {
        $this->oferta = oferta;
    }

    function setImg($img) {
        $this->img = $img;
    }


}
