<?php
require "conexion.php";
$id=$_GET['ide'];
//echo $id;

$ide=mysqli_query($con, "select * from empleado where nombre='$id'");
$editar=mysqli_fetch_array($ide);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/datatables.min.css">
    <link rel="stylesheet" href="bootstrap/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="bootstrap/css/responsive.dataTables.min.css">
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/datatables.min.js"></script>
    <script src="bootstrap/js/dataTables.responsive.min.js"></script>
    <script src="bootstrap/js/script.js"></script>
</head>
<body class="bg-info">
    <div class="container">
        <h2 class="text-center bg-dark text-info">ELIMINAR EMPLEADO</h2>
        <div class="card">
            <div class="card-body"> <!--para separa todo-->
        <form action="eliminar.php" method="POST" class="bg-light text-info row"> <!-- para darle color a las letras y el fondo -->
         
            <div class="col-6 text-left">
                <b>¿DESEA ELIMINAR A:</b> <?php echo $editar["nombre"];?>
            </div>

            <div class="col-6 text-left">
                <input type="hidden" name="textid" id="" value="<?php echo $editar["nombre"];?>">
            </div>

            

            <div class="col-6 text-rigth">
                <input class="btn btn-success" type="submit" value="SI">
            </div>

            <div class="col-6 text-left">
                <a class="btn btn-danger"href="listado.php">NO</a>
            </div>
            
            
        </form>
        </div>
        </div>
    </div>
</body>
</html>