
<?php

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
///////////////////////////////////////////////



if(isset($_POST['guardar'])){
    require_once("config.php");

    $config = new Config();

    $config-> setCelular($_POST['celular']);
    $config-> setCompañia($_POST['compañia']);
    $config->setDetalle($_POST['detalle']);
    

    $config-> insertData();

    echo "<script> alert('El cliente fue guardado satisfactoriamente'); document.location='clientes.php'</script>";

}


?>
