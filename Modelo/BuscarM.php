<?php

$cedula = $_POST['cedula'];
include("../Config/conexion.php");
$sql="SELECT * FROM clientes where Cédula='$cedula'";
$resultado= mysqli_query($conexion,$sql);
$resultado1= mysqli_query($conexion,$sql);
$mostrar=mysqli_fetch_array($resultado1);
if($mostrar==null){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center><img src="../publica/img/Error.svg.png" alt="" height="100" weigth="100"> </center>
        <center><h1>OCURRIÓ UN ERROR</h1></center>
        <center><h2>Cliente no existente</h2></center>
        <center><a href="../Vista/Buscar.php">Aceptar</a></center>

    </body>
    </html>
    <?php
}else{
    include("../Vista/Tabla.php");
    while($mostrar=mysqli_fetch_array($resultado)){
        ?>
         <a href="../Controlador/controlador.php?var1=1">
                        <img src="../publica/img/menuPrincipal.jpg" height="50" weight="50"alt="" id="imm">
                        <i class="fa fa-home fa-2x"></i>
                    </a>
        </div>
        <body  class="ewk_cont_banner3">
            
        </body>
        <center> <table   border="5">
        <link rel="stylesheet" href="../publica/css/banner.css">
       <thead>
       <th scope="col">CÉDULA</th>
           <th scope="col">NOMBRE</th>
           <th scope="col">APELLIDO</th>
           <th scope="col">DIRECCIÓN</th>
           <th scope="col">TELÉFONO</th>
           <th scope="col">EDAD</td>
           <th WIDTH="200" scope="col">CORREO </th>
       </thead>
       <tbody>
       <tr>
            <td> <?php echo $mostrar['Cédula']?>       </td>
            <td> <?php echo $mostrar['Nombre']?>   </td>
            <td> <?php echo $mostrar['Apellido']?> </td>
            <td> <?php echo $mostrar['Dirección']?>    </td>
            <td> <?php echo $mostrar['Teléfono']?>    </td>
            <td> <?php echo $mostrar['Edad']?>    </td>
            <td> <?php echo $mostrar['Correo']?>    </td>
        </tr>
       </tbody>
       </table></center>
        <div>
       
       
    <?php
    }
}


?>