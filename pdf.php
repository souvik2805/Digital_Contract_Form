<?php
/*call the FPDF library*/
// if(isset($_POST)){
// 	echo "<pre>";
// 	print_r($_POST);

// }

$name = "SCi";
$address="II sushant Nagar this isaccld Guron 1 canditala lane	this isaccld Guron 1 canditala lane	this isaccld Guron 1 canditala lane	this isaccld Guron 1 canditala lane	this isaccld Guron 1 canditala lane	this isaccld Guron 1 canditala lane	";


$pdf=new PDF('P','mm','A4');
$pdf->AddPage();

// ---------------------------------------------------->
$pdf->SetFont('Arial','B',9);
$pdf->Image('assets/image/crisp-logo.png',3,6,27);
$pdf->Cell(21);
$pdf->Cell(00 ,5,'Crisp Digital India Private Limited',0,1);
$pdf->SetFont('Arial','',9);	
$pdf->Cell(21);
$pdf->Cell(60 ,5,'216 SF, Sushant Tower, Sushant Lok-II',0,0);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(20 ,2,'Online/Digital Services',0,0);
$pdf->Image('assets/image/gp-all.PNG',158,10,50);
$pdf->Cell(34 ,5,'',0,1);/*end of line*/
$pdf->SetFont('Arial','',9);
$pdf->Cell(21);
$pdf->Cell(65 ,5,'Gurgaon - 122011, Tel: 0124-4867430',0,0);
$pdf->Cell(100 ,5,'',0,1);
$pdf->Cell(21);
$pdf->SetFont('Arial','',9);
$pdf->Cell(20,5,'CIN: U74999HR2017PTC069087',0,0);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(55);
$pdf->Cell(2,0,' Contract',0,20);
$pdf->Cell(189 ,0,'',0,1);
// Header End------------------------------------->


$pdf->Line(0, 34, 2100, 34);
// Line------------------------------------------->


$pdf->SetFont('Arial','B',15);
$pdf->Cell(59 ,10,'',0,1);
$pdf->Cell(50 ,10,'',0,1);


// --------------------------------------------->
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50 ,6,'1. ADVERTISER : ',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(138,6, $name,1,1,'L');
// --------------------------------------------->



// --------------------------------------------->
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50 ,6,'2. ADDRESS : ',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(138,6, $name,1,1,'L');
// --------------------------------------------->


// --------------------------------------------->
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50 ,6,'3. CITY : ',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(70,6, $name,1,0,'L');
$pdf->Cell(50 ,6,'3. PIN : ',1,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,6, $name,1,1,'L');
// --------------------------------------------->


// --------------------------------------------->
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50 ,6,'1. CITY : ',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(138,6, $name,1,1,'L');
// --------------------------------------------->

$pdf->SetFont('Arial','B',10);
$pdf->MultiCell( 20, 5,"thIS", 0,0);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell( 188, 5, $address, 1,0);







/*Heading Of the table end*/
$pdf->SetFont('Arial','',10);
    for ($i = 0; $i <= 10; $i++) {
		$pdf->Cell(10 ,6,$i,1,0);
		$pdf->Cell(80 ,6,'HP Laptop',1,0);
		$pdf->Cell(23 ,6,'1',1,0,'R');
		$pdf->Cell(30 ,6,'15000.00',1,0,'R');
		$pdf->Cell(20 ,6,'100.00',1,0,'R');
		$pdf->Cell(25 ,6,'15100.00',1,1,'R');
	}
		

$pdf->Cell(118 ,6,'',0,0);
$pdf->Cell(25 ,6,'Subtotal',0,0);
$pdf->Cell(45 ,6,'151000.00',1,1,'R');


$pdf->Output();

?>
        