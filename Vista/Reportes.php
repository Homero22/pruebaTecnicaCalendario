<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <link rel="stylesheet" href="../publica/css/reportes.css">
    <link rel="stylesheet" href="../publica/css/formularios.css">
    <link rel="stylesheet" href="../publica/css/bootstrap.min.css">
    <link rel="stylesheet" href="../publica/css/tablas.css">
    <link rel="stylesheet" href="../publica/css/banner.css">
    <link rel="stylesheet" href="../publica/css/clientes.css">
    <script src="../Modelo/Ajax.js"></script>
    <script src="../publica/ext/bootstrap/js/jquery-3.2.1.min.js"></script>
</head>
<body>
<h1>Menú de Reportes</h1>

<nav>
	<a href="../Controlador/ControladorReportes.php?rep=1">Clientes</a>
	<a href="../Controlador/ControladorReportes.php?rep=3">Facturas</a>
	<a href="../Controlador/ControladorReportes.php?rep=4">Ventas</a>
	<a href="../Controlador/ControladorReportes.php?rep=5">Productos</a>
    <a href="../Controlador/ControladorReportes.php?rep=6">Edades</a>
    <a href="../Controlador/ControladorReportes.php?rep=7">Compras</a>
    
	<div class="animation start-home"></div>
</nav>
<div >
    <br><br>
        <center><form class="frmCliente2"  action="../Modelo/Reporte2.php"  class="form-inline"  method="POST">
            
            <div class="form-group mb-2">
             
               <h3>Reporte de Factura por cliente</h3>
               <h3></h3>
                
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text"  class="form-control" name="cedula" value ="" placeholder="Ingrese cédula"required>
               
            </div>
            <input type="submit" class="btn btn-primary mb-2"  value= "Enviar" required>
           
        </form></center>
    </div>

    <div class="">
        <br><br>
    <center><form  class="frmCliente2" action="../Modelo/ReporteFactura.php"  class="form-inline"  method="POST">
            
            <div class="form-group mb-2">
            <h3>Factura a buscar</h3>
        
               
                
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="cod-factura" value ="" placeholder="Ingrese código de factura" required>
               
            </div>
            <input type="submit" class="btn btn-primary mb-2"  value= "Enviar" required>
           
        </form>    </center>
    </div>
   
                    <a href="../index.html">
                        <img src="../publica/img/menuPrincipal.jpg" alt="" id="imm">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text" >
                          
                        </span>
                    </a>
</body>
</html>
 