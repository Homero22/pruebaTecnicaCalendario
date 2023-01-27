<?php
    include("../Config/conexion.php");
    $sql= "SELECT * from comprar";
    $resultado= mysqli_query($conexion,$sql);
    while($mostrar = mysqli_fetch_array($resultado))
    {
        ?>
        <tr>
            <td> <?php echo $mostrar['Cod_factura']?></td>
            <td> <?php echo $mostrar['Cod_compra']?></td>
            <td> <?php echo $mostrar['Cod_juguete']?></td>
            <td> <?php echo $mostrar['Cantidad']?></td>
        </tr>
        <?php
    }
?>