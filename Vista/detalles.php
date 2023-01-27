<?php
    include("../Config/conexion.php");    
    $sql=("SELECT *FROM comprar");
    $resultado= mysqli_query($conexion,$sql);
    $aux = 0;
    while($mostrar=mysqli_fetch_array($resultado)){
        $dato[$aux]= $mostrar; 
        $aux=  $aux + 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Datos Factura</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../publica/ext/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../publica/css/formularios.css">
    <link rel="stylesheet" href="../publica/css/fondos.css">
    <link rel="stylesheet" href="../publica/css/clientes.css">
</head>
<body class="ventas">

    <center><h1>Calcular el total de la factura</h1></center>
    <center><form class="frmCliente" action="../Modelo/OperacionesDetalles.php" method="POST">
        <script>
            $(function(){
            $(document).on('change','#sCompra',function(){ //detectamos el evento change
                var value = $(this).val();//sacamos el valor del select
            $('#codigoCompra').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
            });
            });
        </script>
        <br>
        
         <input type="hidden" id="codigoCompra" name="codigoCompra" required>
         <br>
         <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Código compra:</label>
            <div class="col-sm-10">
                <select id="sCompra" class="form-control" required>
                <option value="0" required >Seleccione una opcion:</option>
                    <?php foreach($dato as $datos):  ?>
                        <option> <?php echo $datos[0] ?>
                    </option>
                    <?php endforeach; ?>
                </select>    
            </div>
        </div
        <center><input type="submit" class="btn btn-primary " name="calcula" value="Calcular"><br> </center>

        </form></center>
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