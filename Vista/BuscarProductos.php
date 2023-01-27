<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link rel="stylesheet" href="../publica/css/formularios.css">
    <link rel="stylesheet" href="../publica/css/bootstrap.min.css">
    <link rel="stylesheet" href="../publica/css/tablas.css">
    <link rel="stylesheet" href="../publica/css/banner.css">
    <link rel="stylesheet" href="../publica/css/clientes.css">
</head>

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
<body class="ewk_cont_banner">
    <br><br><br>
    <h1> <center>Producto a Buscar</center></h1>
    <div class="cardBuscar">
        <form  action="../Modelo/BuscarProductoM.php" class="form-inline"  method="POST">
            <div class="form-group mb-2">
                <label for="" id="codigo">Ingrese código del producto:</label>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="codigo" placeholder="Código" pattern="[0-9]+" title="Debe ingresar el código del juguete 'Dígitos'" required>
               
            </div>
            <button type="submit" id="" class="btn btn-primary mb-2">Buscar</button>
        </form>    
    </div>
    
</body>
</html>