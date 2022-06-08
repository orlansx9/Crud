<?php
include("conexion.php");
$con=conectar();
$Folio=$_GET['id'];
$sql="DELETE FROM Alumno WHERE Folio= '$Folio'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Alumno.php");

    }
?>