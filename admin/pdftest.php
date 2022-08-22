<?php
include 'connection.php';
require('fpdf/fpdf.php');
$year=$_POST['year_pdf'];

if ($year === "First_year") {
    class myPDF extends FPDF{

        function headerTable(){
            $this->SetFont('Times','B',12);
            $this->Cell(10,1.3,'Board Roll No',1,0,'C');
            $this->Cell(10,1.3,'Email',1,0,'C');
            $this->Cell(10,1.3,'Mobile',1,0,'C');
            $this->Cell(10,1.3,'First Name',1,0,'C');
            $this->Cell(10,1.3,'Last Name',1,0,'C');
            $this->Cell(10,1.3,'Father Name',1,0,'C');
            $this->Cell(10,1.3,'Branch',1,0,'C');
            $this->Cell(10,1.3,'Status',1,0,'C');
            $this->Cell(10,1.3,'Semester',1,0,'C');
            $this->Cell(10,1.3,'Admission Date',1,0,'C');
           
        }
    
        function viewTable($connection){
            
            $this->SetFont('Times','B',12);
            $query=mysqli_query($connection,"SELECT * FROM first_year_students ORDER BY Board_Roll_No ASC");
            while ($data = mysqli_fetch_assoc($query)) {
                $this->Cell(10,1.3,$data['Board_Roll_No'],1,0,'C');
                $this->Cell(10,1.3,$data['email'],1,0,'C');
                $this->Cell(10,1.3,$data['mobile'],1,0,'C');
                $this->Cell(10,1.3,$data['first_name'],1,0,'C');
                $this->Cell(10,1.3,$data['last_name'],1,0,'C');
                $this->Cell(10,1.3,$data['father_name'],1,0,'C');
                $this->Cell(10,1.3,$data['branch'],1,0,'C');
                $this->Cell(10,1.3,$data['status'],1,0,'C');
                $this->Cell(10,1.3,$data['sem'],1,0,'C');
                $this->Cell(10,1.3,$data['admission_date'],1,0,'C');
                $this->Ln();
            }
        }
    }
}

elseif ($year === "Second_year") {
 class myPDF extends FPDF{

    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(10,1.3,'Board Roll No',1,0,'C');
        $this->Cell(10,1.3,'Email',1,0,'C');
        $this->Cell(10,1.3,'Mobile',1,0,'C');
        $this->Cell(10,1.3,'First Name',1,0,'C');
        $this->Cell(10,1.3,'Last Name',1,0,'C');
        $this->Cell(10,1.3,'Father Name',1,0,'C');
        $this->Cell(10,1.3,'Branch',1,0,'C');
        $this->Cell(10,1.3,'Status',1,0,'C');
        $this->Cell(10,1.3,'Semester',1,0,'C');
        $this->Cell(10,1.3,'Admission Date',1,0,'C');
       
    }

    function viewTable($connection){
        
        $this->SetFont('Times','B',12);
        $query=mysqli_query($connection,"SELECT * FROM second_year_students ORDER BY Board_Roll_No ASC");
        while ($data = mysqli_fetch_assoc($query)) {
            $this->Cell(10,1.3,$data['Board_Roll_No'],1,0,'C');
            $this->Cell(10,1.3,$data['email'],1,0,'C');
            $this->Cell(10,1.3,$data['mobile'],1,0,'C');
            $this->Cell(10,1.3,$data['first_name'],1,0,'C');
            $this->Cell(10,1.3,$data['last_name'],1,0,'C');
            $this->Cell(10,1.3,$data['father_name'],1,0,'C');
            $this->Cell(10,1.3,$data['branch'],1,0,'C');
            $this->Cell(10,1.3,$data['status'],1,0,'C');
            $this->Cell(10,1.3,$data['sem'],1,0,'C');
            $this->Cell(10,1.3,$data['admission_date'],1,0,'C');
            $this->Ln();
        }
    }
  }
}
elseif ($year === "Final_year") {
 class myPDF extends FPDF{

    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(10,1.3,'Board Roll No',1,0,'C');
        $this->Cell(10,1.3,'Email',1,0,'C');
        $this->Cell(10,1.3,'Mobile',1,0,'C');
        $this->Cell(10,1.3,'First Name',1,0,'C');
        $this->Cell(10,1.3,'Last Name',1,0,'C');
        $this->Cell(10,1.3,'Father Name',1,0,'C');
        $this->Cell(10,1.3,'Branch',1,0,'C');
        $this->Cell(10,1.3,'Status',1,0,'C');
        $this->Cell(10,1.3,'Semester',1,0,'C');
        $this->Cell(10,1.3,'Admission Date',1,0,'C');
       
    }

    function viewTable($connection){
        
        $this->SetFont('Times','B',12);
        $query=mysqli_query($connection,"SELECT * FROM final_year_students ORDER BY Board_Roll_No ASC");
        while ($data = mysqli_fetch_assoc($query)) {
            $this->Cell(10,1.3,$data['Board_Roll_No'],1,0,'C');
            $this->Cell(10,1.3,$data['email'],1,0,'C');
            $this->Cell(10,1.3,$data['mobile'],1,0,'C');
            $this->Cell(10,1.3,$data['first_name'],1,0,'C');
            $this->Cell(10,1.3,$data['last_name'],1,0,'C');
            $this->Cell(10,1.3,$data['father_name'],1,0,'C');
            $this->Cell(10,1.3,$data['branch'],1,0,'C');
            $this->Cell(10,1.3,$data['status'],1,0,'C');
            $this->Cell(10,1.3,$data['sem'],1,0,'C');
            $this->Cell(10,1.3,$data['admission_date'],1,0,'C');
            $this->Ln();
        }
    }
  }
}



$pdf = new myPDF();
$pdf = new myPDF('L','cm',array(101.2,40));
$pdf->AddPage();
$pdf->headerTable();
$pdf->viewTable($connection);
$pdf->Output();



?>