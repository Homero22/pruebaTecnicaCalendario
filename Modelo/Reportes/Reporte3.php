<?php
    include('../vista/Plantilla.php');
    include('../Config/conexion.php');
    $sql="SELECT * from factura";

    $resultado= mysqli_query($conexion,$sql);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->Ln(1);
    $pdf->SetFont('Arial','B',30);
    $pdf->Image('../publica/img/logo.png', 70, 190, 0, 50);
    // Movernos a la derecha
    
    // Título
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(200,10,'REPORTE DE FACTURAS',2,2,'C');
    $pdf->Ln(35);
    
    $pdf->SetTextColor(22,50,50);
    $pdf->SetFont('Arial','B',15);
    $pdf->cell(70,10,utf8_decode('NOMBRE: HÉCTOR NIETO'),2,2,'C');
    $pdf->Cell(39,10,utf8_decode('CÓDIGO: 6832'),2,2,'C');
    $pdf->Ln(5);
    

$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(333,333,333);
$pdf->Cell(35,6,utf8_decode('CÓDIGO FACTURA'),1,0,'C');
$pdf->Cell(35,6,'CEDULA',1,0,'C');
$pdf->Cell(35,6,'FECHA',1,0,'C');
$pdf->Cell(35,6,'TOTAL',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(333,333,333);
$f=1;
$pdf->SetFont('Arial','',10);

while($mostrar=mysqli_fetch_array($resultado)){
    
    $pdf->Cell(35,6,$mostrar['Cod_factura'],1,0,'C');
    $pdf->Cell(35,6,utf8_decode($mostrar['Cédula']),1,0,'C');
    $pdf->Cell(35,6,utf8_decode($mostrar['Fecha']),1,0,'C');
    $pdf->Cell(35,6,utf8_decode($mostrar['Total']),1,1,'C');

}

$pdf->Output('I','reporteFactura.pdf');
?>
