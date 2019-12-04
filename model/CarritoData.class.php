<?php

class CarritoData {
   private $id_carrito;
    private $id_usuario;
    private $id_pedido;
    private $precio;
    
      function __construct($id_carrito=null, $id_usuario, $id_pedido, $precio) {
        $this->id_carrito = $id_carrito;
		$this->id_usuario = $id_usuario;
		$this->id_pedido = $id_pedido;
		$this->precio = $precio;
    }
    
    public function getId_carrito(){
		return $this->id_carrito;
	}

	public function setId_carrito($id_carrito){
		$this->id_carrito = $id_carrito;
	}

	public function getId_usuario(){
		return $this->id_usuario;
	}

	public function setId_usuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}

	public function getId_pedido(){
		return $this->id_pedido;
	}

	public function setId_pedido($id_pedido){
		$this->id_pedido = $id_pedido;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function setPrecio($precio){
		$this->precio = $precio;
	}

}
