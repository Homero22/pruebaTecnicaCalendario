<?php
include("../Config/conexion.php");
$idusuario=$_GET['Cédula'];
$datosusuario="SELECT * from clientes where Cédula=$idusuario";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar </title>
    <link rel="stylesheet" href="../publica/css/banner.css">
    <link rel="stylesheet" href="../publica/css/formularios.css">
        <link rel="stylesheet" href="../publica/ext/bootstrap/css/bootstrap.min.css">

</head>

<body class="ewk_cont_banner3">
  
  <br>
  <center><h1 class="titulo">EDITAR DATOS DEL USUARIO</h1></center>
  <br>
  <center><form class="frmCliente" action="../Modelo/ProcesarEditar.php" method="POST">
        <?php 
        ?>
    
</body>
</html>
<?php 
$resultado= mysqli_query($conexion,$datosusuario);

while($mostrar=mysqli_fetch_array($resultado)){
    ?>

    
    <div class="">
      
        <tr>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Cédula: </label>
            <div class="col-sm-10"> 
                <td> <input  type="text" class="form-control" type="text" value="<?php echo $mostrar['Cédula']?>"name="Cédula"></td>
            </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nombre: </label>
          <div class="col-sm-10">
          <td> <input class="form-control" type="text" value="<?php echo $mostrar['Nombre']?>"name="Nombre">   </td>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Apellido: </label>
          <div class="col-sm-10">
          <td> <input class="form-control" type="text" value="<?php echo $mostrar['Apellido']?>"name="Apellido"> </td>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Dirección: </label>
          <div class="col-sm-10">
          <td> <input class="form-control" type="text" value="<?php echo $mostrar['Dirección']?>"name="Dirección"></td>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Teléfono: </label>
          <div class="col-sm-10">
          <td> <input class="form-control" type="text" value="<?php echo $mostrar['Teléfono']?>"name="Teléfono"></td>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Edad: </label>
          <div class="col-sm-10">
          <td> <input class="form-control" type="text" value="<?php echo $mostrar['Edad']?>"name="Edad"></td>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Correo: </label>
            <div class="col-sm-10">
            <td> <input class="form-control" type="email" value="<?php echo $mostrar['Correo']?>"name="Correo"></td>
            </div>
        </div>
   
            <td> <center> <input type="submit" class="btn btn-primary" value="Guardar Cambios"></td></center>
            </div>
        </tr>
        </form></center>
    </div>
<?php
}
?>