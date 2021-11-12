<?php

session_start();

if(!isset($_SESSION['misDatos'])){
    $_SESSION['misDatos'] = array();
} 



if (isset($_POST['add'])) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    if(empty($_POST['nombre'])){
        echo '<p id="advertencia">¡¡¡¡El nombre es <span class="rojo">obligatorio!!!!</span></p>';
    }elseif(empty($_POST['telefono'])){
        unset($_SESSION['misDatos'][$nombre]);
    }else{
        $_SESSION['misDatos'][$nombre] = $telefono;
    }
}


if(isset($_GET['limpiar'])){
    if($_GET['limpiar'] = 1){
       session_unset();
    }
}


?>

