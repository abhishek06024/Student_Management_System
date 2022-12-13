<?php
include 'connection.php';



$result = mysqli_query($connection,"SELECT * FROM first_year_students ORDER BY Board_Roll_No ASC");
// $header = mysqli_query($connection,"SHOW columns FROM first_year_students ");
// $header = mysqli_query($connection,"SELECT UCASE(`COLUMN_NAME`) 
// FROM `INFORMATION_SCHEMA`.`COLUMNS` 
// WHERE `TABLE_SCHEMA`='crud' 
// AND `TABLE_NAME`='first_year_students'
// and `COLUMN_NAME` in ('Board_Roll_No','email','mobile','first_name','last_name','father_name','branch','status','sem')");


$header = mysqli_query($connection,"SELECT UPPER(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='testye' 
    AND `TABLE_NAME`='first_year_students';");

require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf = new FPDF('L','cm',array(102,50));
$pdf->AddPage();
$pdf->SetFont('Times','B',14);

// $pdf->AddPage(0,0,219,297);
// $pdf = new FPDF('orientation' = 'P', unit = 'mm', format='A4');

foreach($header as $heading) {
	foreach($heading as $column_heading)
	$pdf->Cell(10,1,$column_heading,1,0,"C");
}
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(10,1,$column,1,0,"C");
}
$pdf->Output();

?>