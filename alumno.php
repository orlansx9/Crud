<?php
    include("conexion.php");
    $con=conectar();
    $sql="SELECT * FROM Alumno";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pagina Alumno</title>
        <meta name="viewport" content="whidth-device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <h1>Ingrese datos</h1>
                        <form action="insertar.php" method="POST">
                            <input type="text" class="form-control mb-3" name="Folio" placeholder="Folio">
                            <input type="text" class="form-control mb-3" name="no_cuenta" placeholder="No_cuenta">
                            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                            <input type="text" class="form-control mb-3" name="Apellido_Paterno" placeholder="Apellido_Paterno">
                            <input type="text" class="form-control mb-3" name="Apellido_Materno" placeholder="Apellido_Materno">
                            <input type="text" class="form-control mb-3" name="semestre" placeholder="Semestre">
                            <input type="text" class="form-control mb-3" name="promedio" placeholder="Promedio">
                            <input type="submit" class="btn btn-primary">
                        </form>    
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-succes table-striped">
                            <tr>
                                <th>Folio</th>
                                <th>No_cuenta</th>
                                <th>Nombre</th>
                                <th>Apellido_Paterno</th>
                                <th>Apellido_Materno</th>
                                <th>Semestre</th>
                                <th>Promedio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['Folio']?></th>
                                    <th><?php echo $row['No_cuenta']?></th>
                                    <th><?php echo $row['Nombre']?></th>
                                    <th><?php echo $row['Apellido_Paterno']?></th>
                                    <th><?php echo $row['Apellido_Materno']?></th>
                                    <th><?php echo $row['Semestre']?></th>
                                    <th><?php echo $row['Promedio']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['Folio'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="delete.php?id=<?php echo $row['Folio'] ?>" class="btn btn-danger">Eliminar</a></th>

                                </tr>
                            <?php  
                                }
                            
                            ?>

                        </tbody>
                    </table>    
                </div>
            </div>
        </div>            
    </body>
</html>