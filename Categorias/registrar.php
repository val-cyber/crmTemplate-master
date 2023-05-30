
<?php

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
///////////////////////////////////////////////



if(isset($_POST['guardar'])){
    require_once("../Supermarket/config.php");

    $config = new Config();

    $config-> setNombre($_POST['nombre']);
    $config-> setDescripcion($_POST['descripcion']);
    $config->setImagen($_POST['imagen']);
    

    $config-> insertData();

    echo "<script> alert('La categoria fue guardada satisfactoriamente'); document.location='categorias.php'</script>";

}


?>
