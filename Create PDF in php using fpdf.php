<?Php
require('include/fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',24);
$pdf->Cell(80,10,'Personal Homepage (PHP)');
$pdf->Output('my_file.pdf','I'); // Send to browser and display
?>
