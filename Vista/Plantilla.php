<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->Ln(10);
    $this->SetTextColor(255,255,255);
    //$this->Image('');
    $this->Image('../publica/img/pdf.png', 0, 0, 0, 300);
    // Arial bold 15
    /*$this->SetFont('Arial','B',30);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'REPORTE DE CLIENTES',1,1,'C');*/
    $f=1;
    $this->SetTextColor(22,50,50);
    /*$this->Ln(32);
    $this->SetFont('Arial','B',15);
    $this->Cell(60,10,'NOMBRE: HOMERO OJEDA',0,0,'C');
    // Salto de línea
    $this->Ln(15);
    $this->Cell(25,10,utf8_decode('CÓDIGO:'));
    $this->Cell(-40,10,'6834','C');*/


}

// Pie de página
function Footer()
{
    
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    /*$this->Write(5,"Riobamba- Ecuador");
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');*/

}
}