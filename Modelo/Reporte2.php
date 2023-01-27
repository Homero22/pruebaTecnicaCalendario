
 <?php
    include('../vista/Plantilla.php');
    include('../Config/conexion.php');
    $cedula = $_POST['cedula'];
    $sql="SELECT * FROM factura where Cédula='$cedula'";
$resultado= mysqli_query($conexion,$sql);
$resultado1= mysqli_query($conexion,$sql);
$mostrar1=mysqli_fetch_array($resultado);
if($mostrar1==null){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->Ln(1);
    $pdf->SetFont('Arial','B',30);
    // Movernos a la derecha
    
    // Título
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(200,10,'FACTURAS POR CLIENTE',2,2,'C');
    $pdf->Ln(35);
    
    $pdf->SetTextColor(22,50,50);
    $pdf->SetFont('Arial','B',15);
    $pdf->cell(70,10,'NOMBRE: EDGAR AMANTA',2,2,'C');
    $pdf->Cell(35,10,utf8_decode('CÓDIGO: 6812'),2,2,'C');
    $pdf->Ln(5);
    
    
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',10);
    $pdf->SetFillColor(333,333,333);
    $pdf->Cell(50,6,utf8_decode('CÓDIGO DE FACTURA'),1,0,'C');
    $pdf->Cell(30,6,utf8_decode('CEDULA'),1,0,'C');
    $pdf->Cell(20,6,'FECHA',1,0,'C');
    $pdf->Cell(30,6,'TOTAL',1,1,'C');
    
    $pdf->SetFont('Arial','B',10);
    $pdf->SetFillColor(333,333,333);
    $f=1;
    $pdf->SetFont('Arial','',10);
    
    while($mostrar=mysqli_fetch_array($resultado1)){
        
        $pdf->Cell(50,6,$mostrar['Cod_factura'],1,0,'C');
        $pdf->Cell(30,6,$mostrar['Cédula'],1,0,'C');
        $pdf->Cell(20,6,$mostrar['Fecha'],1,0,'C');
        $pdf->Cell(30,6,$mostrar['Total'],1,1,'C');
    }
    $pdf->Image('../publica/img/logo.png', 70, 155, 0, 60);
    $pdf->Output('I','reporteD.pdf');
}
?>
