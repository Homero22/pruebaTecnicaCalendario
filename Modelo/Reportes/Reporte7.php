<?php
    include('../vista/Plantilla.php');
    include('../Config/conexion.php');
    $sql="SELECT * from comprar";

    $resultado= mysqli_query($conexion,$sql);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->Ln(1);
    $pdf->SetFont('Arial','B',30);
    // Movernos a la derecha
    
    // Título
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(200,10,'REPORTE COMPRAS',2,2,'C');
    $pdf->Ln(35);
    
    $pdf->SetTextColor(22,50,50);
    $pdf->SetFont('Arial','B',15);
    $pdf->cell(74,10,utf8_decode('NOMBRE: KEVIN ESPINOZA'),2,2,'C');
    $pdf->Cell(39,10,utf8_decode('CÓDIGO: 6820'),2,2,'C');
    $pdf->Ln(5);

$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(333,333,333);
$pdf->Cell(35,6,utf8_decode('CODIGO FACTURA'),1,0,'C');
$pdf->Cell(35,6,utf8_decode('CODIGO COMPRA'),1,0,'C');
$pdf->Cell(35,6,'CODIGO JUGUETE',1,0,'C');
$pdf->Cell(30,6,utf8_decode('CANTIDAD'),1,0,'C');
$pdf->Cell(30,6,utf8_decode('TOTAL'),1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(333,333,333);
$f=1;
$pdf->SetFont('Arial','',10);

while($mostrar=mysqli_fetch_array($resultado)){
    
    $pdf->Cell(35,6,$mostrar['Cod_factura'],1,0,'C');
    $pdf->Cell(35,6,$mostrar['Cod_compra'],1,0,'C');
    $pdf->Cell(35,6,utf8_decode($mostrar['Cod_juguete']),1,0,'C');
    $pdf->Cell(30,6,$mostrar['Cantidad'],1,0,'C');
    $pdf->Cell(30,6,$mostrar['Total'],1,1,'C');
}
$pdf->Image('../publica/img/logo.png', 70, 155, 0, 60);
$pdf->Output('I','reporteCompras.pdf');
?>
