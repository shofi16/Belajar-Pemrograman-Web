<?php 

class Pelanggan extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this -> load -> model('model_laundry');
		$this -> load -> helper('url');
	}

	function tambah_pelanggan()
	{
		$this -> load -> view('dashboard/header');
		$this -> load -> view('pelanggan/form_data_pelanggan');
	}

	function aksi_tambah_pelanggan()
	{
		$id_pelanggan = $this -> input -> post('id_pelanggan');
		$nama_pelanggan = $this -> input -> post('nama_pelanggan');
		$no_telepon = $this -> input -> post('no_telepon');
		$alamat = $this -> input -> post('alamat');
		$this -> form_validation -> set_rules('nama_pelanggan','Nama Pelanggan','trim|required');
		$this -> form_validation -> set_rules('no_telepon','No Telepon','trim|required');
		$this -> form_validation -> set_rules('alamat','Alamat','trim|required');

		$data = array('id_pelanggan' => $id_pelanggan ,
						'nama_pelanggan' => $nama_pelanggan ,
						'no_telepon' => $no_telepon ,
						'alamat' => $alamat );

		$this -> model_laundry -> insert_data( $data , 'pelanggan');
		redirect(base_url().'admin_dashboard/pelanggan');
	}

	function edit_pelanggan($id)
	{
		$where = array('id_pelanggan' => $id);
		$data['pelanggan'] = $this -> model_laundry -> edit_data($where,'pelanggan') -> result();
		$this -> load -> view('dashboard/header');
		$this -> load -> view('pelanggan/view_edit_pelanggan',$data);
	}

	function update_pelanggan()
	{
		$id_pelanggan = $this -> input -> post('id_pelanggan');
		$nama_pelanggan = $this -> input -> post('nama_pelanggan');
		$no_telepon = $this -> input -> post('no_telepon');
		$alamat = $this -> input -> post('alamat');

		$data = array('nama_pelanggan' => $nama_pelanggan,
						'no_telepon' => $no_telepon ,
						'alamat' => $alamat );
		$where = array('id_pelanggan' => $id_pelanggan);

		$this -> model_laundry -> update_data($where,$data,'pelanggan');
		redirect(base_url().'admin_dashboard/pelanggan');
	}

	function hapus_pelanggan($id)
	{
		$where = array('id_pelanggan' => $id);
		$this -> model_laundry -> delete_data($where,'pelanggan');
		redirect(base_url().'admin_dashboard/pelanggan');
	}


}



 ?>