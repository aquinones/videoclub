<?php
class Juego extends Producto
{

	private $plataforma;
	private $genero;

	public function __construct($nombre,$plataforma,$genero)
	{
		$this->nombre = $nombre;
		$this->precio = 3;
		$this->idioma = $idioma;
		$this->duracion = $duracion;
	}

    public function getPrecio()
	{
	   return $this->precio;
	}

	public function getPlataforma()
	{
	   return $this->plataforma;
	}

	public function getGenero()
	{
	   return $this->Genero;
	}
}
?>