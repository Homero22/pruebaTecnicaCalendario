<?php
include("../Config/conexion.php");
$sql="SELECT * from clientes";
$resultado= mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($resultado)){
    ?>
    <tr>
        <td> <?php echo $mostrar['Cédula']?>   </td>
        <td> <?php echo $mostrar['Nombre']?>   </td>
        <td> <?php echo $mostrar['Apellido']?> </td>
        <td> <?php echo $mostrar['Dirección']?></td>
        <td> <?php echo $mostrar['Teléfono']?> </td>
        <td> <?php echo $mostrar['Edad']?>    </td>
        <td> <?php echo $mostrar['Correo']?>    </td>
    </tr>
<?php
}
?>