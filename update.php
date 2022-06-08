<?php
include("conexion.php");
$con=conectar();

$Folio=$_POST['Folio'];
$No_cuenta=$_POST['No_cuenta'];
$Nombre=$_POST['Nombre'];
$Apellido_Paterno=$_POST['Apellido_Paterno'];
$Apellido_Materno=$_POST['Apellido_Materno'];
$Semestre=$_POST['Semestre'];
$Promedio=$_POST['Promedio'];

$sql="UPDATE Alumno SET Nombre='$Nombre',Apellido_paterno='$Apellido_paterno',Apellido_Materno='$Apellido_Materno',Semestre='$Semestre' WHERE Folio='$Folio'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("Location: Alumno.php");

    }
?>