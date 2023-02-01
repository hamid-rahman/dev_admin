<?php
if (!empty($_POST)) {
    $name = $_POST['hamid_name'];
    $email = $_POST['hamid_email'];
    $number = $_POST['hamid_number'];
    $username = $_POST['hamid_username'];

    require "fpdf/fpdf.php";
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Hello World!');
    $pdf->Output('test.pdf');
}
?>