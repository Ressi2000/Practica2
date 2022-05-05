<html lang="es">
<head>
	<title> U.E.P Galileo Galilei</title>
	<meta charset="utf-8">
	<meta name="descrition" content="Pagina dedicada a la Evaluacion Sumativa I"/>
</head>
    <link rel="icon" href="Imagenes/logo.png">
<body>

<?php

//declarar

$Nombre="";
$Apellido="";

if(isset($_POST['Ingresar'])){

$Nombre= $_POST['Nombre'];
$Grado=$_POST['Grado'];
$Apellido=$_POST['Apellido'];

if($Grado=='1ero'){
include('grado1.html');
}

if($Grado=='2do'){
include('grado2.html');
}

if($Grado=='3ero'){
include('grado3.html');
}

if($Grado=='4to'){
include('grado4.html');
}

if($Grado=='5to'){
include('grado5.html');
}

if($Grado=='6to'){
include('grado6.html');
}
}

//https://www.youtube.com/watch?v=UVcYoHpw05k



?>
</body>
</html>
