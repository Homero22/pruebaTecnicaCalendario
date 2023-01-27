<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../publica/css/clientes.css">
</head>
<body>
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


    <script>
        function miFuncion(){
            
            $(document).ready(function(){
                $('#btnBuscar').click(function(){
                    $('#form').load('../../index.html');
                    document.getElementById('tablaV').style.display = 'block'
                    alert("Botón preisonado");
            
                    
                });
            });
        }
        
    </script>
</body>
</html>