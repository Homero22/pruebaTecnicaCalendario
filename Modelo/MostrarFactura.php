<?php
    include("../Config/conexion.php");
    $sql= "SELECT * from factura";
    $resultado= mysqli_query($conexion,$sql);
    while($mostrar = mysqli_fetch_array($resultado))
    {
        ?>
        <tr>
            <td> <?php echo $mostrar['Cod_factura']?></td>
            <td> <?php echo $mostrar['Cédula']?></td>
            <td> <?php echo $mostrar['Fecha']?></td>
            <td> <?php echo $mostrar['Total']?></td>
        </tr>
        <?php
    }
?>