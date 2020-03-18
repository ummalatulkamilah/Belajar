<?php 

class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
        $this->load->helper('url');

		// mengecek apakah sesion status, untuk mendeteksi apakah user atau admin sudah login atau belum. 
		if($this->session->userdata('status') != "login"){ 
			redirect(base_url("login")); //jika user tidak berhasil login maka akan diarahkan ke halaamn login
		}
	}

//menampilkan view v_andmin
	function index(){
		$data['exp'] = $this->m_data->jumlah_exp();
        $data['stok'] = $this->m_data->hampir_habis();
        $this->load->view('template/header');
        $this->load->view('template/topbar');
        $this->load->view('admin/overview',$data);
	
	}
}