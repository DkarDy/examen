<?php
require "conexion.php";


$id=$_POST['textid'];

mysqli_query($con, "delete from empleado where nombre='$id'");


header ('location:listado.php');

//echo $ci.' '.$celu.' '.$nombre.' '.$direc.' '.$pais.' '.$gen.' ';



?>