<?php
$codigo = $_POST['codigo'];
include("../Config/conexion.php");
$sql="SELECT * FROM productos where Código='$codigo'";
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
        <center><h2>Producto no existente</h2></center>
        <center><a href="../Vista/BuscarProductos.php">Aceptar</a></center>

    </body>
    </html>
    <?php
}else{

    while($mostrar=mysqli_fetch_array($resultado)){
        ?>
        <a href="../Controlador/ControladorProductos.php?var1=2">
                        <img src="../publica/img/menuPrincipal.jpg" height="50" weight="50"alt="" id="imm">
                        <i class="fa fa-home fa-2x"></i>
                    </a>
        <body class="ewk_cont_banner">
            
        </body>
        <link rel="stylesheet" href="../publica/css/banner.css">
        <br>
        <center><h1>Datos del Producto encontrado</h1></center>
        <link rel="stylesheet" href="../publica/css/tablas.css">
        <center> <table  border="5">
       <thead>
    
       <th scope="col">CÓDIGO</th>
           <th scope="col">NOMBRE</th>
           <th scope="col">CATEGORÍA</th>
           <th scope="col">CANTIDAD</th>
           <th scope="col">DESCRIPCIÓN</th>
           <th scope="col">PRECIO</td>
       </thead>
       <tbody>
       <tr>
            <td> <?php echo $mostrar['Código']?>       </td>
            <td> <?php echo $mostrar['Nombre']?>   </td>
            <td> <?php echo $mostrar['Cod_categoria']?> </td>
            <td> <?php echo $mostrar['Cantidad']?>    </td>
            <td> <?php echo $mostrar['Descripción']?>    </td>
            <td> <?php echo $mostrar['Precio']?>    </td>
    
            <script src="../Modelo/Clientes.js" ></script>
             
        </tr>
       </tbody>
       </table></center>
    <?php
    }
}

?>