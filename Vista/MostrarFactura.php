<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Facturas</title>
    <link rel="stylesheet" href="../publica/css/tablas.css">
    <link rel="stylesheet" href="../publica/css/fondos.css">
    <link rel="stylesheet" href="../publica/css/clientes.css">
</head>
<body class="ventas">

    <center><h1>Facturas Generadas</h1></center>
    <center><table border="5"></center>
    <thead>
        <th>CODIGO PRODUCTO</th>
        <th>CEDULA</th>
        <th>FECHA</th>
        <th>TOTAL</th>
    </thead>
        
        <?php include("../Modelo/MostrarFactura.php"); 
        ?>
    </table>
    <nav class="main-menu">
            <ul>
                <li>
                    <a href="../Controlador/ControladorVentas.php?ventas=1">
                        <img src="../publica/img/registro-en-linea.png" alt="" id="imm">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Ingresar Factura
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="../Controlador/ControladorVentas.php?ventas=2">
                    <img src="../publica/img/buscar_productos.png" alt="" id="imm">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Comprar
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="../Controlador/ControladorVentas.php?ventas=3">
                    <img src="../publica/img/editar.png" alt="" id="imm">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Detalles
                        </span>
                    </a>
                    
                </li>

                <li class="has-subnav">
                    <a href="../Controlador/ControladorVentas.php?ventas=4">
                    <img src="../publica/img/ojo.png" alt="" id="imm">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Mostrar Factura
                        </span>
                    </a>
                </li>
                <li>
                    <a href="../index.html">
                        <img src="../publica/img/menuPrincipal.jpg" alt="" id="imm">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text" >
                          Menú Principal
                        </span>
                    </a>
                </li>
</body>
</html>