<?php
require "../vendor/autoload.php";

use Fpdf\Fpdf;

//Dados do Formulario
$nomeAluno = $_POST['nomeAluno'];

$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('images/modelo1.png',0,0,297);
$pdf->SetXY(140,46);
$pdf->Cell(40,10,'Certificado');
$pdf->Output();

?>
