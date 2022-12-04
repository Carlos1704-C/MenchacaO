<?php
$nombre = $_POST['Nombre'];
require('C:\wamp64\www\apellidos\MenchacaO\Parcial3\CrearPDF\fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Hola, Mundo!'.$nombre);
$pdf->Output();
?>