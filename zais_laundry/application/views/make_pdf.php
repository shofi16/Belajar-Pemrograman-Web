<?php

class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		// Logo
	/* 	$image_file = K_PATH_IMAGES.'logo_example.jpg';
        $this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false); */
        $this -> Cell(10,7,'',0,1);
		// Set font
		$this -> SetFont('helvetica', 'B', 16);
		// Title
        $this -> Cell(180,3, 'KELOMPOK 3 WEB PROGRAMMING WEBSITE LAUNDRY', 0, 1 ,'C');
        
        $this -> SetFont('times', '', 12);
		$this -> Cell(180,3, 'Laporan Data Transaksi Berformat PDF', 0, 1 ,'C');
		$this -> Ln(20);
		
		
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		$this -> Cell('haloo world');
		// Page number
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
	
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 003');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica','B', 10);

// add a page
// add a page
$pdf->AddPage();

$pdf -> Cell(10,7,'',0,1);
// create some HTML content


$content = '';  
$content .= '  

<table border="1" cellspacing="0" cellpadding="5">  
		<tr>  
            <th align="center">ID Pelanggan</th>  
        	<th align="center">ID Pakaian</th>  
            <th align="center">Tanggal Masuk</th>  
            <th align="center">Tanggal Selesai</th>  
            <th align="center">Harga</th>  
        </tr>  
	';  
	foreach($transaksi as $row) {
	$content .= '
		<tr> 
			<td align="center">'.$row -> id_pelanggan.'</td>
			<td align="center">'.$row -> id_pakaian.'</td>
			<td align="center">'.$row -> tanggal_masuk.'</td>
			<td align="center">'.$row -> tanggal_selesai.'</td>
			<td align="center">'.$row -> harga.'</td>
		</tr>';
	}
    $content .= '</table>';  
	$pdf->writeHTML($content);  
	

    $pdf->Output('datatransaksi.pdf', 'I');  

// Print some HTML Cells



?>