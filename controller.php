<?php
//iniciamos sesion
session_start();

if(!isset($_SESSION['misDatos'])){
    $_SESSION['misDatos'] = array();
} 



if (isset($_POST['add'])) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    //Si está vacío el nombre, se muestra la advertencia. 
    if(empty($_POST['nombre'])){
        echo '<p id="advertencia">¡¡¡¡El nombre es <span class="rojo">obligatorio!!!!</span></p>';
    }//Si esta vació el teléfono, utilizo unset() para eliminar también el nombre de la sesión.
    elseif(empty($_POST['telefono'])){
        unset($_SESSION['misDatos'][$nombre]);
    }//En caso de estar ambos con valores, se almacenan en la sesión.
    else{
        $_SESSION['misDatos'][$nombre] = $telefono;
    }
}

//eliminamos la sesión y adios numeros
if(isset($_GET['limpiar'])){
    if($_GET['limpiar'] = 1){
       session_unset();
    }
}


?>

