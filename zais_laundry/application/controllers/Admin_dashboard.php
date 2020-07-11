<?php 

class Admin_dashboard extends CI_Controller
{

        function __construct()
        {

            parent:: __construct();
            $this -> load -> model('model_laundry');
            $this -> load -> helper('url');

            if($this -> session -> userdata('status') != "login"){
            redirect(base_url().'welcome/index');
        }

        }

        function index()
        {

        	$data['laundry'] = $this -> db -> query("SELECT * FROM laundry ORDER BY id_laundry DESC LIMIT 10 ") -> result(); 

            $this -> load -> view('dashboard/header');
            $this -> load -> view('dashboard/index');
        }

        function laundry()
        {

        	$data['laundry'] = $this -> db -> query("SELECT * FROM laundry T, pelanggan P, paket K WHERE T.id_laundry=P.id_pelanggan AND T.id_paket=K.id_paket") -> result();
             
			 
            $data['pelanggan'] = $this -> model_laundry -> get_data('pelanggan') -> result();
            $data['laundry'] = $this -> model_laundry -> get_data('laundry') -> result();
			$data['paket'] = $this -> model_laundry -> get_data('paket') -> result();
        	$this -> load -> view('dashboard/header');
        	$this -> load -> view('laundry/view_data_laundry',$data);
        	$this -> load -> view('dashboard/footer');
        }

        /*function input_transaksi()
        {
            $data['pelanggan'] = $this -> model_laundry -> getallpelanggan();
            $data['pakaian'] = $this -> model_laundry -> getallpakaian();
        	$this -> load -> view('dashboard/header');
        	$this -> load -> view('transaksi/form_input_transaksi', $data);
        }

       function aksi_tambah_transaksi()
        {

        	$id_transaksi = $this -> input -> post('id_transaksi');
            $id_pelanggan = $this -> input -> post('id_pelanggan');
            $id_pakaian = $this -> input -> post('id_pakaian');
        	$tanggal_masuk = $this -> input -> post('tanggal_masuk');
            $tanggal_selesai = $this -> input -> post('tanggal_selesai');
            $harga = $this -> input -> post('harga');
        	$status_transaksi = $this -> input -> post('status_transaksi');

            
        	$data = array('id_transaksi' => $id_transaksi ,
                            'id_pelanggan' => $id_pelanggan ,
                            'id_pakaian' => $id_pakaian ,
        					'tanggal_masuk' => $tanggal_masuk ,
                            'tanggal_selesai' => $tanggal_selesai ,
                            'harga' => $harga ,
        					'status_transaksi' => $status_transaksi
        				);
        	$this -> model_laundry -> insert_data($data , 'transaksi');
            


        	redirect(base_url().'admin_dashboard/transaksi/');
        }
		*/

        function pelanggan()
        {
        	$data['pelanggan'] = $this -> model_laundry -> get_data('pelanggan') -> result();
        	$this -> load -> view('dashboard/header');
        	$this -> load -> view('pelanggan/view_data_pelanggan',$data);
        	$this -> load -> view('dashboard/footer');
        }

        function paket()
        {
           
            /*$data['pelanggan'] = $this -> model_laundry -> get_data('pelanggan') -> result();*/
            $data['paket'] = $this -> model_laundry -> get_data('paket') -> result();
            $this -> load -> view('dashboard/header');
            $this -> load -> view('paket/view_data_paket',$data);
            $this -> load -> view('dashboard/footer');
        }

        
        
       
        
}

?>