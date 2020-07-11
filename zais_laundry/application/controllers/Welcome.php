<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this -> load -> model('model_laundry');
		$this -> load -> library('form_validation','pdf');
	}



	public function index()
	{
		$this->load->view('login/view_login');
	}

	function login(){

		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');
		$this -> form_validation -> set_rules('username','Username','trim|required');
		$this -> form_validation -> set_rules('password','Password','trim|required');


		if($this -> form_validation -> run() != false)
		{
			$where = array('username' => $username , 'password' => ($password));

			$cek = $this -> model_laundry -> cek_login('admin',$where) -> num_rows();

			if($cek > 0)
			{
				$data_session = array('username' => $username , 'status' => "login");
				$this -> session -> set_userdata($data_session);
				redirect(base_url().'admin_dashboard/index');
			}
			else
			{
				$this -> session -> set_flashdata('alert','Username Atau Password Salah');
			}
		} 
		else{
			$this -> session -> set_flashdata('alert','Isi Username dan Password Untuk Login');
			
			redirect(base_url().'welcome/index');
		}
	}
function logout(){
		$this -> session -> sess_destroy();
		redirect(base_url().'welcome/index');
	}

}
?>
