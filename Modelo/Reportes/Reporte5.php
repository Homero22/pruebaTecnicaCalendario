<?php
    include('../vista/Plantilla.php');
    include('../Config/conexion.php');
    $sql="SELECT * from productos";
    $resultado= mysqli_query($conexion,$sql);
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->Ln(1);
    $pdf->SetFont('Arial','B',30);
    // Movernos a la derecha
    
    // Título
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell(200,10,'REPORTE PRODUCTOS',2,2,'C');
    $pdf->Ln(35);
    
    $pdf->SetTextColor(22,50,50);
    $pdf->SetFont('Arial','B',15);
    $pdf->cell(64,10,utf8_decode('NOMBRE: DANIEL TENE'),2,2,'C');
    $pdf->Cell(39,10,utf8_decode('CÓDIGO: 6842'),2,2,'C');
    $pdf->Ln(5);
    
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(333,333,333);
$pdf->Cell(25,6,utf8_decode('CÓDIGO'),1,0,'C');
$pdf->Cell(40,6,'NOMBRE',1,0,'C');
$pdf->Cell(30,6,'COD_CATEG',1,0,'C');
$pdf->Cell(30,6,utf8_decode('CANTIDAD'),1,0,'C');
$pdf->Cell(30,6,utf8_decode('DESCRIPCIÓN'),1,0,'C');
$pdf->Cell(30,6,'PRECIO',1,1,'C');
$f=1;
$pdf->SetFont('Arial','',10);

while($mostrar=mysqli_fetch_array($resultado)){
    
    $pdf->Cell(25,6,utf8_decode($mostrar['Código']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($mostrar['Nombre']),1,0,'C');
    $pdf->Cell(30,6,utf8_decode($mostrar['Cod_categoria']),1,0,'C');
    $pdf->Cell(30,6,utf8_decode($mostrar['Cantidad']),1,0,'C');
    $pdf->Cell(30,6,utf8_decode($mostrar['Descripción']),1,0,'C');
    $pdf->Cell(30,6,utf8_decode($mostrar['Precio']),1,1,'C');  
}
$pdf->Image('../publica/img/logo.png', 70, 155, 0, 60);
$pdf->Output('I','reporteProductos.pdf');
?>
