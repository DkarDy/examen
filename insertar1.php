<?php
require "conexion.php";
$nom=$_POST['txtla'];
$dir=$_POST['txtle'];
$tel=$_POST['txtli'];
                         //echo '<td>'.$dato['nombre'].'</td>';
                           //  echo '<td>'.$dato['direccion'].'</td>';
                             //echo '<td>'.$dato['telefono'].'</td>';
                            // echo '<td>'.$dato['area'].'</td>';

mysqli_query($con,"insert into computadora(nombre,modelo,fecha) values('$nom','$dir',$tel)");

header('location:listado1.php');
echo $nom.' '.$dir.' '.$tel.' '.$area;
?>