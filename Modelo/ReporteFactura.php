<?php
    include('../vista/Plantilla.php');
    include('../Config/conexion.php');
    $factura = $_POST['cod-factura'];
    
    $sql1="SELECT * FROM factura WHERE Cod_factura= '$factura'";
    $sql="SELECT * FROM comprar where Cod_factura='$factura'";
    

    
$resultado= mysqli_query($conexion,$sql);
$resultado2= mysqli_query($conexion,$sql1);

$mostrar=mysqli_fetch_array($resultado);
$mostrar1=mysqli_fetch_array($resultado2);

if($mostrar ==null){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <center><img src="../publica/img/Error.svg.png" alt="" height="100" weigth="100"> </center>
        <center><h1>OCURRIÓ UN ERROR</h1></center>
        <center><h2>Revise los campos ingresados y vuelva a enviar</h2></center>
        <center><a href="../Vista/Reportes.php">Aceptar</a></center>

    </body>
    </html>
    <?php
}else{
    $cod_juguete= $mostrar['Cod_juguete'];

    $Cedula=$mostrar1['Cédula'];
    
    $sql2="SELECT a.Cod_factura, a.Fecha, c.Código, c.Nombre as NomJ, c.Precio, b.Cantidad, d.Cédula, d.Nombre, d.Apellido
    from factura a join comprar b on a.Cod_factura = b.Cod_factura
    join productos c on b.Cod_juguete = c.Código
    JOIN clientes d on d.Cédula = a.Cédula
    where c.Código = '$cod_juguete' and a.Cod_factura = '$factura' and d.Cédula= '$Cedula';";
    
    
    
    $resultado3= mysqli_query($conexion,$sql2);
    $mostrar3=mysqli_fetch_array($resultado3);
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->Ln(1);
    $pdf->SetFont('Arial','B',30);
    // Movernos a la derecha
    
    // Título
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(200,10,'DETALLE DE FACTURA',2,2,'C');
    $pdf->Ln(60);
   
    
    
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',10);
    $pdf->SetFillColor(333,333,333);
    $pdf->Cell(70,6,utf8_decode('CODIGO FACTURA'),1,0,'C');
    $pdf->Cell(20,6,$mostrar3['Cod_factura'],1,0,'C');
    $pdf->Cell(70,6,'FECHA',1,0,'C');
    $pdf->Cell(20,6,$mostrar3['Fecha'],1,1,'C');
    $pdf->Cell(180,6,'DETALLES DEL CLIENTE ',1,1,'C');
    $pdf->Cell(90,6,utf8_decode('CÉDULA'),1,0,'C');
    $pdf->Cell(90,6,utf8_decode($mostrar3['Cédula']),1,1,'C');
    $pdf->Cell(90,6,utf8_decode('NOMBRE'),1,0,'C');
    $pdf->Cell(90,6,utf8_decode($mostrar3['Nombre']),1,1,'C');
    $pdf->Cell(90,6,utf8_decode('APELLIDO'),1,0,'C');
    $pdf->Cell(90,6,utf8_decode($mostrar3['Apellido']),1,1,'C');
    $pdf->Cell(180,6,'DETALLES DEL PRODUCTO ',1,1,'C');
    $pdf->Cell(40,6,'CODIGO JUGUETE',1,0,'C');
    $pdf->Cell(20,6,utf8_decode($mostrar3['Código']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode('NOMBRE JUGUETE'),1,0,'C');
    $pdf->Cell(80,6,utf8_decode($mostrar3['NomJ']),1,1,'C');
    $pdf->Cell(40,6,'PRECIO',1,0,'C');
    $pdf->Cell(20,6,utf8_decode($mostrar3['Precio']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode('CANTIDAD'),1,0,'C');
    $pdf->Cell(80,6,$mostrar3['Cantidad'],1,1,'C');
    
    $pdf->SetFont('Arial','B',10);
    $pdf->SetFillColor(333,333,333);
    $f=1;
    $pdf->SetFont('Arial','',10);
    
    
    $pdf->Image('../publica/img/logo.png', 70, 155, 0, 60);
    $pdf->Output('I','reporteCompras.pdf');
}

?>
