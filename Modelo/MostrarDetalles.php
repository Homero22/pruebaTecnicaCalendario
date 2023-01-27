<?php
    include("../Config/conexion.php");
    $sql= "SELECT * from detallecompra";
    $resultado= mysqli_query($conexion,$sql);
    while($mostrar = mysqli_fetch_array($resultado))
    {
        ?>
        <tr>
            <td> <?php echo $mostrar['id_detalle']?></td>
            <td> <?php echo $mostrar['Cod_compra']?></td>
            <td> <?php echo $mostrar['Total']?></td>
        </tr>
        <?php
    }
?>