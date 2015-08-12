<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Prueba</title>
</head>
<body>

<?php

include_once('class.videoclub.php');

//Creamos un videoclub
$videoclub= new Videoclub('VideoMax');

//Creamos un nuevo cliente de nombre Francisco
$cliente=new Cliente('Francisco');

//Creamos una nueva pelicula
$pelicula=new Pelicula('El senor de los Anillos','Castellano','3 horas','Fantasía');
$cd=new Cd ('vasos vacios','60','Rock');

//echo ($cd->getPrecio()); 

//Registramos el cliente y el producto en el videoclub
$videoclub->addCliente($cliente);
$videoclub->addProducto($pelicula);
$videoclub->addProducto($cd);

//El cliente alquila la pelicula
$videoclub->alquilar($cliente, $pelicula);

//Obtenemos la lista de clientes registrados
$clientes = $videoclub->getClientes();

//Imprimimos la lista de clientes registrados
echo '<p>Lista de Clientes:</p>';
foreach($clientes as $cliente)
{
	echo $cliente->getNombre().'<br />';
}

//Obtenemos la lista de productos registrados
$productos = $videoclub->getProductos();
echo '<p>Lista de Productos:</p>';
foreach($productos as $producto)
{
	echo $producto->getNombre().'<br />';
	echo $producto->getPrecio().'<br />';
}

?>

</body>
</html>