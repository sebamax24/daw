<?php

class JuegoData {
    private $id_juego;
    private $nombre;
    private $precio;
    private $descripcion;
    private $img;
    
    function __construct($id_juego=null, $nombre, $precio, $descripcion, $img) {
        $this->id_juego = $id_juego;
		$this->nombre = $nombre;
		$this->precio = $precio;
		$this->descripcion = $descripcion;
        $this->img = $img;
    }
    function getId_juego() {
        return $this->id_juego;
    }   

    function getNombre() {
        return $this->nombre;
    }
    function getPrecio() {
        return $this->precio;
    }
	function getDescripcion() {
        return $this->descripcion;
    }

	function getImg() {
        return $this->img;
    }

    function setId_juego($id_juego) {
        $this->id_juego = $id_juego;
    }

    function setNombre($nombre) {
        $this->nombre = nombre;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }
	
	function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
	
    function setImg($img) {
        $this->img = $img;
    }


}
