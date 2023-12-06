<?php
require "conexion.php";
$id=$_GET['ide'];
//echo $id;
$edi=mysqli_query($con, "select * from empleado where nombre='$id'");
$editar=mysqli_fetch_array($edi);
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
        <h2 class="text-center text-danger">ACTUALIZAR PASAJERO</h2>
        <div class="card">
            <div class="card-body border border-success">
        <form action="actualizar.php" method="POST" class="row">

        <div class="col-6 text-center">
            <label for="">nombre</label>
            <input type="text" class="form-control" name="txtla" id="" placeholder="" value="<?php echo $editar['nombre']; ?>">

        </div>
        <div class="col-6 text-center">
            <label for="">direccion</label>
            <input type="text" class="form-control" name="txtle" id=""  placeholder="" value="<?php echo $editar['direccion']; ?>">

        </div>
        <div class="col-6 text-center p-3">
            <label for="">telefono</label>
            <input type="number" class="form-control" name="txtli" id=""  placeholder=""value="<?php echo $editar['telefono']; ?>">

        </div>
        <div class="col-6 text-center">
            <label for="">area</label>
            <input type="text" class="form-control" name="txtlo" id=""  value="<?php echo $editar['area']; ?>">

        </div>
        <div class="col-5 text-center">
          <input type="hidden" name="txtid" id="" value="<?php echo $editar['nombre']; ?>">

        </div><br>
       

        <div class="col-6 text-rigth">
            <input class="btn btn-success" type="submit" value="ACTUALIZAR" >

        </div class="col-6 text-left">
        <a class="btn btn-warning" href="listado.php">VOLVER</a>
        <div>

        </div>

        </form>
        </div>
        </div>


    </div>
</body>
</html>