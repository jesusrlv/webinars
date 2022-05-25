<?php
header("Location: ../tabla.php");

	include("conn.php");
	
	// $id=$_REQUEST['id'];

    $id = $_POST['id'];

    $nombre_conferencia = $_POST['nombre_conferencia'];
    $conferencista = $_POST['conferencista'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];
    $sala = $_POST['sala'];
    $estatus = $_POST['estatus'];



$sql= "UPDATE conferencia SET conferencia='$nombre_conferencia',ponente='conferencista',fecha='$fecha',descripcion='$descripcion',direccion_sala='$sala' WHERE id_conf='$id'";

$resultado= $conn->query($sql);


?>