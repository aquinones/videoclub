<?php
class Pelicula extends Producto
{

	private $idioma;
	private $duracion;
	private $genero;

	public function __construct($nombre,$idioma,$duracion,$genero)
	{
		$this->nombre = $nombre;
		$this->precio = 2;
		$this->idioma = $idioma;
		$this->duracion = $duracion;
		$this->genero=$genero;
	}

    public function getprecio()
	{
	   return $this->precio;
	}

	public function getidioma()
	{
	   return $this->idioma;
	}

	public function getduracion()
	{
	   return $this->duracion;
	}
	/* trait de genero, quitar esto... */
	public function getgenero()
	{
	   return $this->genero;
	}
}
?>