<?php
if (isset($_POST)) {
    //recolectar los valores del formulario
    echo $nombre =       isset($_POST['nombre']) ? $_POST['nombre']: false;
    echo $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos']: false;
    echo $email = isset($_POST['email']) ? $_POST['email'] : false;
    echo $password = isset($_POST['pw']) ? $_POST['pw'] : false;


    //validar los datods a la bd 
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre )) {
        echo "es nombre es valido";
    }


}


?>