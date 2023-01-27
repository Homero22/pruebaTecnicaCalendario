<?php
include("../Config/conexion.php");
$codigoProd =$_GET['codigo'];
$datosProducto = "SELECT * from productos where Código =$codigoProd";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar </title>
    <link rel="stylesheet" href="../publica/css/banner.css">
</head>
<body class="ewk_cont_banner3">
  <br>
<center><h1>EDITAR DATOS DEL PRODUCTO</h1></center> 
<br><br>
<center><form action="../Modelo/ProcesarEditarProductos.php" method="POST">
        <?php 
        //include('../Vista/Tabla.php');
        ?>
    
</body>
</html>
<?php 
$resultado= mysqli_query($conexion,$datosProducto);

while($mostrar=mysqli_fetch_array($resultado)){
    ?>


<div class="frmCliente">
        <link rel="stylesheet" href="../publica/css/formularios.css">
        <link rel="stylesheet" href="../publica/ext/bootstrap/css/bootstrap.min.css">

      <tr>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Código: </label>
          <div class="col-sm-10"> 
            <td> <input type="text" class="form-control" type="text" value="<?php echo $mostrar['Código']?>"name="codigo"></td>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nombre: </label>
          <div class="col-sm-10"> 
            <td> <input type="text" class="form-control" type="text" value="<?php echo $mostrar['Nombre']?>"name="nombre"></td>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Categoría: </label>
          <div class="col-sm-10"> 
            <td> <input type="text" class="form-control" type="text" value="<?php echo $mostrar['Cod_categoria']?>"name="categoria"></td>
          </div>
        </div>


        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Cantidad: </label>
          <div class="col-sm-10"> 
            <td> <input type="text" class="form-control" type="text" value="<?php echo $mostrar['Cantidad']?>"name="cantidad"></td>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Descripción: </label>
          <div class="col-sm-10"> 
            <td> <input type="text" class="form-control" type="text" value="<?php echo $mostrar['Descripción']?>"name="descripcion"></td>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Precio: </label>
          <div class="col-sm-10"> 
            <td> <input type="text" class="form-control" type="text" value="<?php echo $mostrar['Precio']?>"name="precio"></td>
          </div>
        </div>

          <td> <center> <input type="submit" class="btn btn-primary" value="Guardar Cambios"></td></center>
        
      </tr>
      </form></center>
</div>
<?php
}
?>