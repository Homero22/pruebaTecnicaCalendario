<?php
    include('../vista/Plantilla.php');
    include('../Config/conexion.php');
    $sql="SELECT * from clientes ";
$resultado= mysqli_query($conexion,$sql);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln(1);
$pdf->SetFont('Arial','B',25);

// Movernos a la derecha

// Título
$pdf->SetTextColor(255,255,255);
$pdf->Cell(200,10,'REPORTE DE EDADES DE LOS CLIENTES',2,2,'C');
$pdf->Ln(35);

$pdf->SetTextColor(22,50,50);
$pdf->SetFont('Arial','B',15);
$pdf->cell(78,10,'NOMBRE: GABRIEL CACERES',2,2,'C');
$pdf->Cell(37,10,utf8_decode('CÓDIGO: 6742'),2,2,'C');
$pdf->Ln(5);


$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(333,333,333);
$pdf->Cell(20,6,'RANGO',1,0,'C');
$pdf->Cell(20,6,'18 - 25',1,0,'C');
$pdf->Cell(20,6,'26 - 30',1,0,'C');
$pdf->Cell(20,6,'31 - 40',1,0,'C');
$pdf->Cell(20,6,'41 - 100',1,1,'C');

$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(333,333,333);
$f=1;
$pdf->SetFont('Arial','',10);
$a =0;
$b=0;
$c=0;
$d=0;
while($mostrar=mysqli_fetch_array($resultado)){
    if ($mostrar['Edad']>18 && $mostrar['Edad']<26){
        $a=$a+1;
    }
    else if ($mostrar['Edad']>26 && $mostrar['Edad']<30){
        $b=$b+1;
    }
    else if ($mostrar['Edad']>31 && $mostrar['Edad']<40){
        $c=$c+1;
    }
    else if($mostrar['Edad']>41 && $mostrar['Edad']<100){
        $d=$d+1;
    }
     
}

$pdf->Cell(20,6,'CANTIDAD',1,0,'C');
$pdf->Cell(20,6,$a,1,0,'C');
$pdf->Cell(20,6,$b,1,0,'C');
$pdf->Cell(20,6,$c,1,0,'C');
$pdf->Cell(20,6,$d,1,1,'C');

$pdf->Image('../publica/img/logo.png', 70, 155, 0, 60);
$pdf->Output('I','reporteD.pdf');
?>