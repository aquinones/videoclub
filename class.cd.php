<?php

class Cd extends Producto
{

	private $duracion;
	private $genero;

/*	public function __destruct()
	{
		echo ('se destruyó el cd');
		}*/


	public function __construct($nombre,$duracion,$genero)
	{
		$this->nombre = $nombre;
		$this->precio = 1;
		$this->genero = $genero;
		$this->duracion = $duracion;
	}

    public function getPrecio()
	{
	   return $this->precio;
	}

	public function getDuracion()
	{
	   return $this->duracion;
	}

	public function getGenero()
	{
	   return $this->Genero;
	}
}
?>