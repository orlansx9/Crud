<?php
include("conexion.php");
$con=conectar();

$Folio=$_POST['Folio'];
$no_cuenta=$_POST['no_cuenta'];
$nombre=$_POST['nombre'];
$Apellido_Paterno=$_POST['Apellido_Paterno'];
$Apellido_Materno=$_POST['Apellido_Materno'];
$semestre=$_POST['semestre'];
$promedio=$_POST['promedio'];

$sql="INSERT INTO Alumno Values('$Folio','$no_cuenta','$nombre','$Apellido_Paterno','$Apellido_Materno','$semestre','$promedio')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");

}else{

}
?>