<?php
require "conexion.php";
$nom=$_POST['txtla'];
$dir=$_POST['txtle'];
$tel=$_POST['txtli'];
$area=$_POST['txtlo'];
$id=$_POST['txtid'];
                      //echo '<td>'.$dato['nombre'].'</td>';
                           //  echo '<td>'.$dato['direccion'].'</td>';
                             //echo '<td>'.$dato['telefono'].'</td>';
                            // echo '<td>'.$dato['area'].'</td>';

mysqli_query($con,"update empleado set nombre='$nom', direccion='$dir',telefono='$tel', area='$area' where nombre='$id'");

header('location:listado.php');
//echo $nom.' '.$dir.' '.$tel.' '.$area;
?>