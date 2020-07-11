<?php 

class Laporanpdf extends CI_Controller {

   function index()
    {
        $this -> load -> library('pdf');
        $this -> load -> model('model_laundry');
        $data['transaksi'] = $this -> model_laundry -> get_data('transaksi')->result();
        $this -> load -> view('make_pdf',$data);
    } 
    
}



?>

<!--  function index(){
        $pdf = new FPDF('L','mm','A5');
        //membuat halaman baru
        /* $pdf -> AddPage(); */
        //setting jenis font yang akan digunakan
        $pdf -> SetFont('Arial','B',16);
        //mencetak string
        $pdf -> Cell(190,7,'KELOMPOK 3 WEB PROGRAMMING WEBSITE LAUNDRY ',0,1,'C');
        $pdf -> SetFont('Arial','B',12);
        $pdf -> Cell(190,7,'LAPORAN DATA TRANSAKSI BERFORMAT PDF',0,1,'C');
        //memeberikan space kebawah agar tidak terlalu rapat
        $pdf -> Cell(10,7,'',0,1);
        $pdf -> SetFont('Arial','B',10);
        $pdf -> Cell(25,6,'ID Pelanggan',0,1);
        $pdf -> Cell(25,6,'ID Pakaian',0,1);
        $pdf -> Cell(25,6,'Tgl Masuk',1,1);
        $pdf -> Cell(25,6,'Tgl Selesai',1,1);
        $pdf -> Cell(25,6,'Status',0,1);
        $pdf -> SetFont('Arial','',10);
        $datatransaksi = $this -> db -> get_data('transaksi') -> result();
        foreach($datatransaksi as $row) {
            $pdf -> Cell(25,6,$row -> id_pelanggan ,0,1);
            $pdf -> Cell(25,6,$row -> id_pakaian ,0,1);
            $pdf -> Cell(25,6,$row -> tanggal_masuk ,1,1);
            $pdf -> Cell(25,6,$row -> tanggal_selesai ,1,1);
            $pdf -> Cell(25,6,$row -> status_transaksi ,1,1);
        }
    
        $pdf -> Output();
     } -->