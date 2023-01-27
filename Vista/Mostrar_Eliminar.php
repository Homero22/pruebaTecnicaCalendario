<?php
include("../Config/conexion.php");
$sql="SELECT * from clientes";
$resultado= mysqli_query($conexion,$sql);
include("../Vista/Tabla1.php");
while($mostrar=mysqli_fetch_array($resultado)){
    ?>
    
     <table  border="1">
     <!--<thead>
            <th>CÉDULA</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>DIRECCIÓN</th>
            <th>TELÉFONO</th>
            <th>EDAD</th>
            <th>CORREO</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
     </thead>-->
     <tbody>
    <tr>
   
        <td width ="100"> <?php echo $mostrar['Cédula']?>       </td>
        <td width ="105"> <?php echo $mostrar['Nombre']?>   </td>
        <td width ="105"> <?php echo $mostrar['Apellido']?> </td>
        <td width ="175"> <?php echo $mostrar['Dirección']?>    </td>
        <td width ="90"> <?php echo $mostrar['Teléfono']?>    </td>
        <td width ="40"> <?php echo $mostrar['Edad']?>    </td>
        <td WIDTH="210" scope="col"> <?php echo $mostrar['Correo']?>    </td>

        <script src="../Modelo/Clientes.js" ></script>
        <td width ="60"> <a href="../Modelo/Editar.php?Cédula=<?php echo $mostrar['Cédula']?>">Editar</a> </td>
        <td width ="75"> <a href="../Modelo/Eliminar.php?Cédula=<?php echo $mostrar['Cédula']?>" onclick="return Confirmar()" >Eliminar</a> </td>
    </tr>
    </tbody>
    </table>
    <link rel="stylesheet" href="../publica/css/clientes.css">
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
<?php
}
?>

