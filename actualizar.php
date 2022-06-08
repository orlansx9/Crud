<?php
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM Alumno WHERE Folio='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net\npm\bootstrap@5.0.0-beta1\dist\css\bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
                <div class="container mt-5">
                    
                        <form action="update.php" method="POST">
                            
                            <input type="hidden" name="Folio" value="<?php echo $row['Folio'] ?>">
                            <input type="text" class="form-control mb-3" name="No_cuenta" placeholder="No_cuenta" value="<?php echo $row['No_cuenta'] ?>">
                            <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre'] ?>">
                            <input type="text" class="form-control mb-3" name="Apellido_Paterno" placeholder="Apellido_Paterno" value="<?php echo $row['Apellido_Paterno'] ?>">
                            <input type="text" class="form-control mb-3" name="Apellido_Materno" placeholder="Apellido_Materno" value="<?php echo $row['Apellido_Materno'] ?>">
                            <input type="text" class="form-control mb-3" name="Semestre" placeholder="Semestre" value="<?php echo $row['Semestre'] ?>">
                            <input type="text" class="form-control mb-3" name="Promedio" placeholder="Promedio" value="<?php echo $row['Promedio'] ?>">
                            <input type="submit" class="btn btn-primary" value="Actualiza">
                        </form>    
                </div>
    </body>
</html>
   