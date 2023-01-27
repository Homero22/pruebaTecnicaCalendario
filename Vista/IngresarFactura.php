<?php
    include("../Config/conexion.php");    
    $sql=("SELECT *FROM clientes");
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
    <title>Document</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../publica/ext/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../publica/css/formularios.css">
    <link rel="stylesheet" href="../publica/css/fondos.css">
    <link rel="stylesheet" href="../publica/css/clientes.css">
</head>
<body class="ventas">

    <center><h1>Ingreso de datos para Factura</h1></center>

<div >
    <center><form class="frmCliente"  action="../Modelo/InsertarFac.php" method="POST">
        
    <label for="">Cédula</label> <br>
        <script>
            $(function(){
            $(document).on('change','#mySelect',function(){ //detectamos el evento change
                var value = $(this).val();//sacamos el valor del select
            $('#myInput').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
            });
            });
        </script>

        <div class="form-group row">
            <select id="mySelect" class="form-control" required>
            <option value="0" required >Seleccione una opcion:</option>
                <?php foreach($dato as $datos):  ?>
                    <option > <?php echo $datos[0] ?> <!--CAPTURA EL VALOR DE LA CEDULA-->
                </option>
                <?php endforeach; ?>
            
            </select>
        </div>
         <input type="hidden" id="myInput" name="cedula" required>
        <br>
        <label for="">Fecha</label> <br>
        <input type="date" class="form-control" name="fecha" id="" required > <br><br>
        <input type="submit" name="registro" class="btn btn-primary" value="Registrar"><br>
                
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

</div>
   
</body>
</html>