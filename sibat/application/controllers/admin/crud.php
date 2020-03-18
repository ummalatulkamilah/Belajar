
<!-- untuk membuat crud pertama membuat controler yang berisi fungsi mengambil data dari model yang kemudian ditampilkan ke view. controller yang saya buat bernama crud.php -->
<?php 

class Crud extends CI_Controller{


					// ======Menampilkan data=======
// fungsi construct yang digunakan untuk memanggil m_data yang merupakanmodel (berisi operasi database)

function __construct(){
	parent::__construct();		
	$this->load->model('m_data'); //memanggil m_data
	$this->load->helper('url');	//mengaktifkan helper url

}

// fungsi index untuk menampilkan data, dengan menggunakan fungsi tampil data  yang ada di model m_data untuk mengambil data dari database kemudian data tersebut di parsing ke view untuk ditampilkan.

function index(){
	$data['obat'] = $this->m_data->tampil_data()->result(); //mengambil daata dari database
	$this->load->view('template/header');
    $this->load->view('template/topbar');
	$this->load->view('admin/v_tampil',$data); // parsing data ke view
}

// Catatan : agar mengakses dan mengelola databes harus melakukan load library database,saya mengaktifkan library database pada pengaturan autoload codeigniter.application/config/autoload.php.


					
					// ======input data======

// fungsi tambah berfungsi untuk menampilkan v_input
	function tambah(){
		$this->load->view('template/header');
    	$this->load->view('template/topbar');
		$this->load->view('admin\v_input');
	}

// fungsi tambah_aksi digunakan untuk mengatur proses penginputan data 
	function tambah_aksi(){

		$nama_obat = $this->input->post('nama_obat');
		$stok_obat = $this->input->post('stok_obat');
		$harga_obat = $this->input->post('harga_obat');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$tanggal_exp = $this->input->post('tanggal_exp');
		$keterangan = $this->input->post('keterangan');

//kemudian data yang diterima atau ditangkap di jadikan sebuah aray
		$data = array(
			'nama_obat' => $nama_obat,
			'stok_obat' => $stok_obat,
			'harga_obat' => $harga_obat,
			'tanggal_masuk' => $tanggal_masuk,
			'tanggal_exp' => $tanggal_exp,
			'keterangan' => $keterangan
			);

//menginput data array ke database dengan menggunakan fungsi input_data yang terdpat pada model m_data
//parameter petama berisi data yang akan diinpukan (array data : $data)
//parameter kedua berisi tabel tujuan untuk menyimpan data (user)
		$this->m_data->input_data($data,'tb_obat'); //menginputkan data ke tabel user
		redirect('admin/crud/index'); // mengerahkan ke index
	}


					 // ======hapus data=======

// fungsi hapus data berfungsi untuk menghapus data user yang ada didatabase berdasarkan id yang tertampun di variabel $where mengunakan fungsi hapus_data yang terdapat di model m_data
	function hapus($id){
		$where = array('id' => $id); //data id user yang akan dihapus dijadikan array
		$this->m_data->hapus_data($where,'tb_obat'); // mengahapus data tabel user dengan id yang tertampung di variabel where
		redirect('admin/crud/index'); //diarahkan ke index
	}

							// ======edit data========

// fungsi edit berfungsi untuk mengambil data dari tabel user untuk di edit di from v_edit						
	function edit($id){
	$where = array('id' => $id); //menjadikan id yang akan digunakan sebgai array 
	$data['obat'] = $this->m_data->edit_data($where,'tb_obat')->result(); // mengambil data yanga akan di edit berdasaekan data array berupa id 
	$this->load->view('template/header');
    	$this->load->view('template/topbar');
	$this->load->view('admin/v_edit',$data); //memampilkan v_edit yang merupakan form untuk mengedit data
}

// fungsi update digunakan untuk mengatur proses update data terbaru ke database
function update(){
		$id = $this->input->post('id');
		$nama_obat = $this->input->post('nama_obat');
		$stok_obat = $this->input->post('stok_obat');
		$harga_obat = $this->input->post('harga_obat');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$tanggal_exp = $this->input->post('tanggal_exp');
		$keterangan = $this->input->post('keterangan');
//data nama, alamat dan pekerjaan yang diterima melalui method post  kemudian dijadikan array dan disimpan pada variabel $data
	$data = array(
			'nama_obat' => $nama_obat,
			'stok_obat' => $stok_obat,
			'harga_obat' => $harga_obat,
			'tanggal_masuk' => $tanggal_masuk,
			'tanggal_exp' => $tanggal_exp,
			'keterangan' => $keterangan
			);

//smentara data id yang menjadi penentu user mana yang mau diedit, data id tersebut di simpan di dalam variabel where dan juga dijadikan array.
	$where = array(
		'id' => $id
	);

//mengupdate data user ke tabel user berdasarkan id yamg terdapat di dalam variabel whwre
	$this->m_data->update_data($where,$data,'tb_obat'); // update data user ke database
	redirect('admin/crud/index'); //mengarahkan ke index
}


}
