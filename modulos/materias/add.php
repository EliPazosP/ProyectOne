<?php
    session_start();
    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");    

    if(isset($_POST['nombre']))      $nombre = $_POST['nombre']; 
    if(isset($_POST['horario']))     $horario = $_POST['horario']; 
    if(isset($_POST['estado']))      $estado = $_POST['estado']; 

    $conexion = new Database;  
    $result = $conexion->CrearMateria($nombre,$horario,$estado);

    header("Location: ".ROOT."modulos/materias/materias.php?mensaje=".$result);

?>