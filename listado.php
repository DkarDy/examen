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
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/datatables.min.js"></script>
    <script src="bootstrap/js/dataTables.responsive.min.js"></script>
    <script src="bootstrap/js/script.js"></script>
    
</head>
<body class="bg-danger">
    <div class="container p-4">
        <a href="nuevo.php" class="btn btn-success"> <i class="fa fa-user"></i> NUEVO</a>

    </div>



<div class="container">
    <div class="card">
        <div class="card-body border border-warning">
            <!--info, primary, success, dark, warning, danger, light-->
            
    <div class="row">
        <div class="col-lg-12">
            <div class="table_responsive">
                <table id="bus" class="table table-borderer table-striped" style="width:100%">
                    <thead class="bg-warning text-primary">
                    <th>nombre</th>
                    <th>curso</th>
                    <th>fecha</th>
                    <th></th>
                    
                    </thead>
                    <tbody>
                    <?php
                    require "conexion.php";
                    $consul=mysqli_query($con,"select *from registro");
                    while($dato=mysqli_fetch_assoc($consul)){
                    
                        echo '<tr>';
                             echo '<td>'.$dato['nombre'].'</td>';
                             echo '<td>'.$dato['curso'].'</td>';
                             echo '<td>'.$dato['fecha'].'</td>';
                             
                             
                             echo '<td> <a href="editar.php?ide='.$dato['nombre'].'" class="btn btn-danger"><i class="fa fa-pencil"></i></a>  <a href="delete.php?ide='.$dato['nombre'].'" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>';
                    
                    
                    
                        echo'</tr>';     
                    
                    }
                    ?>
                    
                    </tbody>
                    
                        </table>

            </div>
        </div>
    </div>
</div>
</div>
</div>








</body>
</html>