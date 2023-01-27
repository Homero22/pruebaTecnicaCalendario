<?php
include("../Config/conexion.php");

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$categoria =$_POST['categoria'];
$cantidad= $_POST['cantidad'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$sql4 = "SELECT * FROM productos WHERE Código = '$codigo'";

$resultado= mysqli_query($conexion,$sql4);
$mostrar=mysqli_fetch_array($resultado);



if($mostrar['Código'] == $codigo){
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
        <center><h2>Producto ya existente</h2></center>
        <center><a href="../Vista/IngresoProductos.php">Aceptar</a></center>

    </body>
    </html>
    <?php
}else{
    $sql="INSERT INTO productos(Código, Nombre, Cod_categoria, Cantidad, Descripción, Precio) values('$codigo','$nombre','$categoria','$cantidad','$descripcion','$precio')";
    $sqr=mysqli_query($conexion,$sql);
    
    if($sqr){
        ?>
        <h1>Datos ingresados</h1>
        <script> 
            alert("Producto ingresado con éxito!");
        </script>   
        <?php
        header("location:../Vista/IngresoProductos.php");
    }else{
        echo "Error al ingresar";
        
    }

}
?>


