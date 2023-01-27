<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Compras</title>

</head>
<body class="ventas">
    <center><h1>Datos de los Usuarios</h1></center>
    <center><table border="1"></center>
        <td>CODIGO FACTURA</td>
        <td>CODIGO COMPRA</td>
        <td>CODIGO JUGUETE</td>
        <td>CANTIDAD</td>
        <?php include("../Modelo/MostrarCompras.php"); 
        ?>
    </table>
    
</body>
</html>