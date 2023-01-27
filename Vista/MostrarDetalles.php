<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Detalles de Compras</title>
</head>
<body>
    <center><h1>Datos de los Usuarios</h1></center>
    <center><table border="1"></center>
        <td>ID</td>
        <td>CODIGO COMPRA</td>
        <td>TOTAL</td>
        <?php include("../Modelo/MostrarDetalles.php"); 
        ?>
    </table>
    
</body>
</html>