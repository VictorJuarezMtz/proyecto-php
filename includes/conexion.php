<?php

$SERVER      ="localhost";
$USERNAME    ="root";
$PASSWORD    ="";
$DATABASE    ="phpmysql";
$db =mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);
/*if (mysqli_connect_errno()) {
    echo "algun error".mysqli_connect_error();
}else{
    echo"<h1>conexion a la base de datos exitoso..</h1>";
    echo "<br>";
}*/
mysqli_query($db,"SET NAMES 'utf8'");
?>