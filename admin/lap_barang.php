<?php
    include 'config.php';
    require('../assets/pdf/fpdf.php');

    $pdf = new FPDF("L","cm","A4");

    $pdf->SetMargins(2,1,1);
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','B',11);
    $pdf->Image('../logo/wp.png',1,1,2,2);
    $pdf->SetX(4);
    $pdf->MultiCell(19.5,0.5,'GROSIR SAUDARI',0,'L');
    $pdf->SetX(4);
    $pdf->MultiCell(19.5,0.5,'Telepon : 0821-6828-3381',0,'L');
    $pdf->SetFont('Arial','B',10);
    $pdf->SetX(4);
    $pdf->MultiCell(19.5,0.5, 'E-mail : arwintannuary18@gmail.com',0,'L');
    $pdf->Line(1,3.1,28.5,3.1);
    $pdf->SetLineWidth(0.1);
    $pdf->Line(1,3.2,28.5,3.2);
    $pdf->SetLineWidth(0);
    $pdf->Ln(1);
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(25.5,0.7,"Laporan Data Barang",0,10,'C');
    $pdf->Ln(1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(5,0.7,"Dicetak pada : ".date("D-d/m/Y"),0,0,'C');
    $pdf->Ln(1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
    $pdf->Cell(7, 0.8, 'Nama Barang', 1, 0, 'C');
    $pdf->Cell(3, 0.8, 'Jenis', 1, 0, 'C');