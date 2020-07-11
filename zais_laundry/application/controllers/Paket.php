<?php 

class Paket extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this -> load -> model('model_laundry');
		$this -> load -> helper('url');
		
	
	}
	function input_paket()
        {
            $data['paket'] = $this -> model_laundry -> getallpaket();
			$data['pelanggan'] = $this -> model_laundry -> getallpelanggan();
			$data['laundry'] = $this -> model_laundry -> getalllaundry();

            $this -> load -> view('dashboard/header');
            $this -> load -> view('paket/form_input_paket');
            $this -> load -> view('dashboard/footer');
        }


	function aksi_tambah_paket()
	{	
		$id_paket = $this -> input -> post('id_paket');
		$nama_paket = $this -> input -> post('nama_paket');
		$harga = $this -> input -> post('harga');
	

		$data = array(
						'id_paket' => $id_paket ,
						'nama_paket' => $nama_paket ,
						'harga' => $harga);
		


		$this -> model_laundry -> insert_data($data ,'paket');
		redirect(base_url().'admin_dashboard/paket/');

	}
	function edit_paket($id)
	{
		$where = array('id_paket' => $id);
		$data['paket'] = $this -> model_laundry -> edit_data($where,'paket') -> result();
		$this -> load -> view('dashboard/header');
		$this -> load -> view('paket/view_edit_paket',$data);
	}

	function update_paket()
	{
		$id_paket = $this -> input -> post('id_paket');
		$nama_paket = $this -> input -> post('nama_paket');
		$harga = $this -> input -> post('harga');


		$data = array('nama_paket' => $nama_paket,
						'harga' => $harga );
		$where = array('id_paket' => $id_paket);

		$this -> model_laundry -> update_data($where,$data,'paket');
		redirect(base_url().'admin_dashboard/paket');
	}

	function hapus_paket($id)
	{
		$where = array('id_paket' => $id);
		$this -> model_laundry -> delete_data($where,'paket');
		redirect(base_url().'admin_dashboard/paket');
	}

}

 ?>