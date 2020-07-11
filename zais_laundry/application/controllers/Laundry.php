<?php 

class Laundry extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this -> load -> model('model_laundry');
		$this -> load -> helper('url');
	
	}
		function input_laundry()
        {
            $data['pelanggan'] = $this -> model_laundry -> getallpelanggan();
            $data['paket'] = $this -> model_laundry -> getallpaket();
			$data['laundry'] = $this -> model_laundry -> getalllaundry();
        	$this -> load -> view('dashboard/header');
        	$this -> load -> view('laundry/form_input_laundry');
        }

       function aksi_tambah_laundry()
        {

        	$id_laundry = $this -> input -> post('id_laundry');
            $nama_pelanggan = $this -> input -> post('nama_pelanggan');
            $berat = $this -> input -> post('berat');
			$status= $this -> input -> post('status');
			$bayar = $this -> input -> post('bayar');
        	$tanggal_masuk = $this -> input -> post('tanggal_masuk');
            $tanggal_selesai = $this -> input -> post('tanggal_selesai');
			$id_paket = $this -> input -> post('id_paket');
        
            
        	$data = array('id_laundry' => $id_laundry ,
                            'nama_pelanggan' => $nama_pelanggan ,
                            'berat' => $berat ,
							'status' => $status,
							'bayar' => $bayar,
        					'tanggal_masuk' => $tanggal_masuk ,
                            'tanggal_selesai' => $tanggal_selesai,
							'id_paket' => $id_paket
                           
        				);
        	$this -> model_laundry -> insert_data($data , 'laundry');
            


        	redirect(base_url().'admin_dashboard/laundry/');
        }
		
		function edit_laundry($id)
	{
		$where = array('id_laundry' => $id);
		$data['pelanggan'] = $this -> model_laundry -> edit_data($where,'pelanggan') -> result();
		$data['paket'] = $this -> model_laundry -> edit_data($where,'paket') -> result();
		$data['laundry'] = $this -> model_laundry -> edit_data($where,'laundry') -> result();
		$this -> load -> view('dashboard/header');
		$this -> load -> view('laundry/view_edit_laundry',$data);
	}

	function update_laundry()
	{
		$id_laundry = $this -> input -> post('id_laundry');
            $nama_pelanggan = $this -> input -> post('nama_pelanggan');
            $berat = $this -> input -> post('berat');
			$status= $this -> input -> post('status');
			$bayar = $this -> input -> post('bayar');
        	$tanggal_masuk = $this -> input -> post('tanggal_masuk');
            $tanggal_selesai = $this -> input -> post('tanggal_selesai');
			$id_paket = $this -> input -> post('id_paket');
  
		$data = array('id_laundry' => $id_laundry ,
                            'nama_pelanggan' => $nama_pelanggan ,
                            'berat' => $berat ,
							'status' => $status,
							'bayar' => $bayar,
        					'tanggal_masuk' => $tanggal_masuk ,
                            'tanggal_selesai' => $tanggal_selesai,
							'id_paket' => $id_paket);
		$where = array('id_laundry' => $id_laundry);

		$this -> model_laundry -> update_data($where,$data,'laundry');
		redirect(base_url().'admin_dashboard/laundry');
	}

		

	function hapus_laundry($id)
	{
		$where = array('id_laundry' => $id);
		$this -> model_laundry -> delete_data($where,'laundry');
		redirect(base_url().'admin_dashboard/laundry');
	}
}