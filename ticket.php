<?php

$fechaActual = $_POST['fechaActual'] ?? '';
$horaActual = $_POST['horaActual'] ?? '';
$fechaEntrada = $_GET['fechaEntrada'] ?? '';
$fechaSalida = $_GET['fechaSalida'] ?? '';
$habitacion = $_GET['habitacion'] ?? '';
$plan = $_GET['plan'] ?? '';
$personas = $_GET['personas'] ?? '';
$costo = $_GET['costo'] ?? '';
$lastId = $_GET['lastId'] ?? '';

require "./code128.php";



// Obtener el último ID de reserva desde la base de datos
$lastId = 1; // Reemplaza esto con la lógica para obtener el último ID de reserva desde tu base de datos

$pdf = new PDF_Code128('P','mm',array(80,258));
$pdf->SetMargins(4,10,4);
$pdf->AddPage();

$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1",strtoupper("Balneario Las Termas")),0,'C',false);

$pdf->Ln(1);
$pdf->Cell(0,5,iconv("UTF-8", "ISO-8859-1","------------------------------------------------------"),0,0,'C');
$pdf->Ln(5);

$pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1","Fecha: ".date("d/m/Y")." "),0,'C',false);

$pdf->Ln(1);
$pdf->Cell(0,5,iconv("UTF-8", "ISO-8859-1","------------------------------------------------------"),0,0,'C');
$pdf->Ln(5);

// Insertar detalles de reserva
$pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1","Fecha de Entrada: ".$_POST['fechaEntrada']),0,'C',false);
$pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1","Fecha de Salida: ".$_POST['fechaSalida']),0,'C',false);
$pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1","Habitación: ".$_POST['habitacion']),0,'C',false);
$pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1","Plan: ".$_POST['plan']),0,'C',false);
$pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1","Personas: ".$_POST['personas']),0,'C',false);
$pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1","Costo Total: ".$_POST['costo']),0,'C',false);

$pdf->Ln(1);
$pdf->Cell(0,5,iconv("UTF-8", "ISO-8859-1","------------------------------------------------------"),0,0,'C');
$pdf->Ln(5);

// Código de barras
$barcode = "COD".$lastId."V0001";
$pdf->Code128(5,$pdf->GetY(),$barcode,70,20);
$pdf->SetXY(0,$pdf->GetY()+21);
$pdf->SetFont('Arial','',14);
$pdf->MultiCell(0,5,iconv("UTF-8", "ISO-8859-1",$barcode),0,'C',false);

$pdf->Output("I","Ticket_Nro_".$lastId.".pdf",true);
?>

