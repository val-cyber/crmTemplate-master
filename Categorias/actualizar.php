<?php

require_once("../Supermarket/config.php");
$data= new Config();

$id= $_GET['id'];
$data -> setId($id);

$record = $data->selectOne();


$val = $record[0];

require_once("../Supermarket/config.php");
//segundo paso
if(isset($_POST['editar'])){
    $data->setNombre($_POST['nombre']);
    $data->setDescripcion($_POST['descripcion']);
    $data->setImagen($_POST['imagen']); 
    

    $data->update();
    echo "<script>alert('datos actualizados con éxito!');document.location='categorias.php'</script>";
}


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar Estudiante</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="css/estudiantes.css">

</head>

<body>
  <div class="contenedor">

  <div class="parte-izquierda">

<div class="perfil">
  <h3 style="margin-bottom: 2rem;">SuperMarket Valita</h3>
  <img src="images/diseno-logotipo-mercado-organico_501861-391.avif" alt="" class="imagenPerfil">
  <h3>Siempre a tu servicio</h3>
</div>
<!-- menus---------- -->
<div class="menus">
  <a href="../Categorias/categorias.php" style="display: flex;gap:2px;">
    <i class="bi bi-house-door"> </i>
    <h3 style="margin: 0px;">Categorias</h3>
  </a>
  <a href="../Clientes/clientes.php" style="display: flex;gap:1px;">
    <i class="bi bi-people"></i>
    <h3 style="margin: 0px;font-weight: 800;">Clientes</h3>
  </a>
  <a href="../Empleados/empleados.php" style="display: flex;gap:1px;">
    <i class="bi bi-people"></i>
    <h3 style="margin: 0px;font-weight: 800;">Empleados</h3>
  </a>
  <a href="../Facturas/facturas.php" style="display: flex;gap:1px;">
    <i class="bi bi-people"></i>
    <h3 style="margin: 0px;font-weight: 800;">Facturas</h3>
  </a>
  <a href="../Proveedores/proveedores.php" style="display: flex;gap:1px;">
    <i class="bi bi-people"></i>
    <h3 style="margin: 0px;font-weight: 800;">Proveedores</h3>
  </a>
  <a href="../Productos/productos.php" style="display: flex;gap:1px;">
    <i class="bi bi-people"></i>
    <h3 style="margin: 0px;font-weight: 800;">Productos</h3>
  </a>
  
 


</div>
</div>

    <div class="parte-media">
        <h2 class="m-2">Estudiante a Editar</h2>
      <div class="menuTabla contenedor2">
      <form class="col d-flex flex-wrap" action=""  method="post">
              <div class="mb-1 col-12">
                <label for="nombre" class="form-label">nombre</label>
                <input 
                  type="text"
                  id="nombre"
                  name="nombre"
                  class="form-control" 
                  value="<?php echo $val['nombre'];?>" 
                 
                />
              </div>

              <div class="mb-1 col-12">
                <label for="descripcion" class="form-label">descripcion</label>
                <input 
                  type="text"
                  id="descripcion"
                  name="descripcion"
                  class="form-control"  
                  value="<?php echo $val['descripcion'];?>" 
                 
                />
              </div>

              <div class="mb-1 col-12">
                <label for="imagen" class="form-label">imagen</label>
                <input 
                  type="text"
                  id="imagen"
                  name="imagen"
                  class="form-control"  
                  value="<?php echo $val['imagen'];?>" 
                  
                />
              </div>

              <div class=" col-12 m-2">
                <input type="submit" class="btn btn-primary" value="UPDATE" name="editar"/>
              </div>
            </form>  
        <div id="charts1" class="charts"> </div>
      </div>
    </div>

    <div class="parte-derecho " id="detalles">
      <h3>Detalle Estudiantes</h3>
      <p>Cargando...</p>
       <!-- ///////Generando la grafica -->

    </div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>




</body>

</html>