<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../publica/css/tablas.css">
    <link rel="stylesheet" href="../publica/css/banner.css">
    <link rel="stylesheet" href="../publica/css/clientes.css">
</head>
<body class="ewk_cont_banner3">

<nav class="main-menu">
            <ul>
                <li>
                    <a href="../Controlador/controladorProductos.php?var1=1">
                        <img src="../publica/img/registro-en-linea.png" alt="" id="imm">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Ingreso de productos
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="../Controlador/controladorProductos.php?var1=2">
                    <img src="../publica/img/buscar_productos.png" alt="" id="imm">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Buscar productos
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="../Controlador/controladorProductos.php?var1=3">
                    <img src="../publica/img/editar.png" alt="" id="imm">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Editar / Eliminar
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="../Controlador/controladorProductos.php?var1=4">
                    <img src="../publica/img/ojo.png" alt="" id="imm">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Mostrar productos
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
    </nav>
<center><h1>Datos del Producto</h1></center>
    <div id="main-container">
    <center><table  border="2">
        <thead>
            <th >CÓDIGO</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">CATEGORÍA</th>
            <th scope="col">CANTIDAD</th>
            <th scope="col">DESCRIPCIÓN</th>
            <th scope="col">PRECIO</td>
        </thead>
            <?php
            include("../Config/conexion.php");
            $sql="SELECT * from productos";
            $resultado= mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($resultado)){
                ?>
                <tr>
                    <td width ="100"> <?php echo $mostrar['Código']?>       </td>
                    <td width ="105"> <?php echo $mostrar['Nombre']?>   </td>
                    <td width ="105"> <?php echo $mostrar['Cod_categoria']?> </td>
                    <td width ="175"> <?php echo $mostrar['Cantidad']?>    </td>
                    <td width ="90"> <?php echo $mostrar['Descripción']?>    </td>
                    <td width ="40"> <?php echo $mostrar['Precio']?>    </td>
                </tr>
            <?php
            }
            ?>
    </div>
</body>
</html>

