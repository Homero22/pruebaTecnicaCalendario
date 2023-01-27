<?php
    include('../vista/Plantilla.php');
    include('../Config/conexion.php');
    $sql="SELECT * from clientes";
$resultado= mysqli_query($conexion,$sql);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln(1);
$pdf->SetFont('Arial','B',30);
// Movernos a la derecha

// Título
$pdf->SetTextColor(255,255,255);
$pdf->Cell(200,10,'REPORTE DE CLIENTES',2,2,'C');
$pdf->Ln(35);

$pdf->SetTextColor(22,50,50);
$pdf->SetFont('Arial','B',15);
$pdf->cell(70,10,'NOMBRE: HOMERO OJEDA',2,2,'C');
$pdf->Cell(35,10,utf8_decode('CÓDIGO: 6834'),2,2,'C');
$pdf->Ln(5);


$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(333,333,333);
$pdf->Cell(30,6,utf8_decode('CÉDULA'),1,0,'C');
$pdf->Cell(20,6,'NOMBRE',1,0,'C');
$pdf->Cell(20,6,'APELLIDO',1,0,'C');
$pdf->Cell(30,6,utf8_decode('DIRECCIÓN'),1,0,'C');
$pdf->Cell(30,6,utf8_decode('TELÉFONO'),1,0,'C');
$pdf->Cell(20,6,'EDAD',1,0,'C');
$pdf->Cell(43,6,'CORREO',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(333,333,333);
$f=1;
$pdf->SetFont('Arial','',10);

while($mostrar=mysqli_fetch_array($resultado)){
    
    $pdf->Cell(30,6,$mostrar['Cédula'],1,0,'C');
    $pdf->Cell(20,6,utf8_decode($mostrar['Nombre']),1,0,'C');
    $pdf->Cell(20,6,utf8_decode($mostrar['Apellido']),1,0,'C');
    $pdf->Cell(30,6,utf8_decode($mostrar['Dirección']),1,0,'C');
    $pdf->Cell(30,6,utf8_decode($mostrar['Teléfono']),1,0,'C');
    $pdf->Cell(20,6,utf8_decode($mostrar['Edad']),1,0,'C');
    $pdf->Cell(43,6,utf8_decode($mostrar['Correo']),1,1,'C');  
}
$pdf->Image('../publica/img/logo.png', 70, 155, 0, 60);
$pdf->Output('I','reporteD.pdf');
?>


