<?php

abstract class Producto
{
    protected $nombre;
    protected $precio;

    public function getNombre()
    {
       return $this->nombre;
    }

    abstract public function getPrecio();
}

?>