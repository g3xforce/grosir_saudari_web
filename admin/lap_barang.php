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
    $pdf->MultiCell(19.5,0.5, 'Tebing Tinggi',0,'L');
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
    $pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
    $pdf->Ln(1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
    $pdf->Cell(6, 0.8, 'Nama Barang', 1, 0, 'C');
    $pdf->Cell(3, 0.8, 'Jenis', 1, 0, 'C');
    $pdf->Cell(3, 0.8, 'Modal', 1, 0, 'C');
    $pdf->Cell(3.5, 0.8, 'Harga 1', 1, 0, 'C');
    $pdf->Cell(3.5, 0.8, 'Harga 2', 1, 0, 'C');
    $pdf->Cell(3.5, 0.8, 'Harga 3', 1, 0, 'C');
    $pdf->Cell(3, 0.8, 'Jumlah', 1, 1, 'C');
    $pdf->SetFont('Arial','',10);
    $no=1;
    $query=mysqli_query($konek, "select * from barang");
    while($lihat=mysqli_fetch_array($query)){
        $pdf->Cell(1, 0.8, $no , 1, 0, 'C');
        $pdf->Cell(6, 0.8, $lihat['nama'], 1, 0, 'C');
        $pdf->Cell(3, 0.8, $lihat['jenis'], 1, 0, 'C');
        $pdf->Cell(3, 0.8, $lihat['modal'], 1, 0, 'C');
        $pdf->Cell(3.5, 0.8, $lihat['harga_1'], 1, 0, 'C');
        $pdf->Cell(3.5, 0.8, $lihat['harga_2'], 1, 0, 'C');
        $pdf->Cell(3.5, 0.8, $lihat['harga_3'], 1, 0, 'C');
        $pdf->Cell(3, 0.8, $lihat['jumlah'], 1, 1, 'C');

        $no++;
    }
    $pdf->Output("laporan_buku.pdf","I");
?>