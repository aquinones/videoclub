<?php

/* Clase que representa a un cliente en el dominio del problema */
class Cliente
{
	private $nombre;
	private $productosAlquilados;

	public function __construct($nombre)
	{
		$this->nombre=$nombre;
		$this->productosAlquilados=array();
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function getProductosAlquilados()
	{
		return $this->productosAlquilados;
	}

	public function alquilarProducto($producto)
	{
		$this->productosAlquilados[]=$producto;
		return true;
	}
}
?>