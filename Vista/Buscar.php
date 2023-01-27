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
<body class="ewk_cont_banner3">
<div >

<div class="area"></div>
    <nav class="main-menu">
            <ul>
                <li>
                    <a href="../Controlador/controladorCli.php?var1=1">
                        <img src="../publica/img/registro-en-linea.png" alt="" id="imm">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text" >
                            Ingreso de clientes
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="../Vista/Buscar.php">
                    <img src="../publica/img/buscar.png" alt="" id="imm">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Buscar clientes
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="../Controlador/controladorCli.php?var1=4">
                    <img src="../publica/img/editar.png" alt="" id="imm">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Editar / Eliminar
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="../Vista/Mostrar.php">
                    <img src="../publica/img/ojo.png" alt="" id="imm">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Mostrar clientes
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
<br><br><br>
    <h1> <center>Usuario a Buscar</center></h1>
    <div class="cardBuscar">
        <form  action="../Modelo/BuscarM.php" class="form-inline"  method="POST">
            <div class="form-group mb-2">
                <label for="" id="cedula">Ingrese el número de cédula:</label>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="cedula" placeholder="Cédula" pattern="[0-9]{10}" title="Debe ingresar 10 dígitos" required> 
               
            </div>
            <button type="submit" id="" class="btn btn-primary mb-2">Buscar</button>
        </form>    
    </div>
</div>
    
</body>
</html>