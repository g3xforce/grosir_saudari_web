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
    $pdf->MultiCell(19.5,0.5,'Telepon : 0821-6828-3381');