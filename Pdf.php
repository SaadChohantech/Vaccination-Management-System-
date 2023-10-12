<?php 
include("db.php");
$id= $_GET['id'];
$sql= "SELECT * FROM `bookapp` where `id` = '$id'";
$run= mysqli_query($db, $sql);


require('TCPDF-main/tcpdf.php');
$pdf= new TCPDF('P', 'mm', 'A4');
$logoPath = 'img/logo.png';
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(25, 184, 157); // RGB: Red
$pdf->AddPage();
$pdf->Rect(0, 0, $pdf->getPageWidth(), $pdf->getPageHeight(), 'F');

// Set the company name and current date for the letterhead
$companyName = "Pre Clinic";
$currentDate = date('Y-m-d');

// Add letterhead to the PDF
$pdf->SetFont('times', 'B', 16); // Set font and size for the company name
$pdf->Cell(0, 10, $companyName, 0, 1, 'C'); // Centered company name
$pdf->SetFont('times', '', 12); // Reset font and size
$pdf->Ln(); // Move to the next line

$pdf->Cell(0, 10, "Date: $currentDate", 0, 1, 'C'); // Display current date
$pdf->Ln(); // Move to the next line

$pdf->SetDrawColor(25, 184, 157); 

// $pdf->SetFillColor(255, 255, 0);
$pdf->SetFont('times', 'I', 50);
$pdf->Ln();
$pdf->Cell(0, 10, 'Vaccine Report', 0, 1, 'C');
$pdf->Ln();




// Create a table with headers
$tableWidth = 30 + 40 + 30 + 30 + 40; // Sum of individual cell widths

// Define the left margin (adjust as needed)
$leftMargin = 20;
$pdf->SetFont('times', 'B', 12);
$pdf->Cell(30, 10, 'Name', 1);
// $pdf->SetFont('times', '', 12);

// $pdf->Ln();
$pdf->Cell(40, 10, 'Gender', 1);
// $pdf->Ln();
$pdf->Cell(30, 10, 'Hospital', 1);
$pdf->Cell(30, 10, 'Vaccine', 1);
// $pdf->Ln();
$pdf->Cell(40, 10, 'Status', 1);
$pdf->Ln();




// Fetch and display data in the table
$pdf->SetFont('times', '', 12);
while ($row =mysqli_fetch_assoc($run)) {
    $pdf->Cell(30, 10, $row['Name'], 1);
    $pdf->Cell(40, 10, $row['gender'], 1);
    $pdf->Cell(30, 10, $row['hospital'], 1);
    $pdf->Cell(30, 10, $row['vaccine'], 1);
    $pdf->Cell(40, 10, $row['status2'], 1);
    // $pdf->Ln(); // Move to the next row



}

$pdf->SetY(-160 ); // Position from the bottom of the page

// Add footer with company address and helpline number
$pdf->SetFont('times', '', 12);
$pdf->Cell(0, 10, "Company Address: Address B -115, Block B Saima Trade Tower, I.I. Chundrigar Road, Karachi", 0, 1, 'L');
$pdf->Cell(0, 10, "Helpline number: 021-32277221", 0, 1, 'L');



$pdf->Output();



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
 </body>
 </html>