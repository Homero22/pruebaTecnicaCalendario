<?php
    include("../Config/conexion.php");    
    $sql=("SELECT *FROM factura");
    $resultado= mysqli_query($conexion,$sql);
    $aux = 0;
    while($mostrar=mysqli_fetch_array($resultado)){
        $dato[$aux]= $mostrar; 
        $aux=  $aux + 1;
    }

    $sql=("SELECT *FROM productos");
    $result= mysqli_query($conexion,$sql);
    $aux1 = 0;
    while($mostra=mysqli_fetch_array($result)){
        $codigo[$aux1]= $mostra; 
        $aux1=  $aux1 + 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Datos para la Compra</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../publica/ext/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../publica/css/formularios.css">
    <link rel="stylesheet" href="../publica/css/fondos.css">
    <link rel="stylesheet" href="../publica/css/clientes.css">
</head>

<body class="ventas">

<div >
        <center><h1 class="titulo">Ingreso de datos para la compra</h1></center>
    <div >
        <center><form class="frmCliente" action="../Modelo/InsertarCompra.php" method="POST">
            
            <!--OBTENER EL ID DE LA FACTURA -->
            <script>
                $(function(){
                $(document).on('change','#sFactura',function(){ //detectamos el evento change
                    var value = $(this).val();//sacamos el valor del select
                $('#factura').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
                });
                });

            </script>
            <label for="">Factura:</label> <br>
            
                <select id="sFactura"  class="form-control" required>
                <option value="0" required >Seleccione una opcion:</option>
                    <?php foreach($dato as $datos):  ?>
                        <option > <?php echo $datos[0] ?> <!--CAPTURA EL VALOR DE LA CEDULA-->
                    </option>
                    <?php endforeach; ?>
                </select>
            
            <input type="hidden" id="factura" name="factura" required>

            <!--OBTENER EL CÓDIGO DEL JUGUETE -->
            <script>
                $(function(){
                $(document).on('change','#sJuguete',function(){ //detectamos el evento change
                    var value = $(this).val();//sacamos el valor del select
                $('#juguete').val(value);//le agregamos el valor al input (notese que el input debe tener un ID para que le caiga el valor)
                });
                });

            </script>
            <br>
            <label for="">Código Juguete:</label> <br>
            <select id="sJuguete" class="form-control" required>
            <option value="0" required >Seleccione una opcion:</option>
                <?php foreach($codigo as $codigos):  ?>
                    <option > <?php echo $codigos[0] ?> <!--CAPTURA EL VALOR DE LA CEDULA-->
                </option>
                <?php endforeach; ?>
            
            </select>
            <input type="hidden" id="juguete" name="juguete" required>
        
            <br>
            <label for="">Cantidad</label> <br>
            <input type="text" class="form-control" name="cantidad" id="" placeholder="cantidad" pattern="[0-9]+" title="Debe ingresar la cantidad'" required> <br><br>
            <input type="submit" class="btn btn-primary" name="compra" value="Comprar"><br>
        </form></center>
    </div>
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