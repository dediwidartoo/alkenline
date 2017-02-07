<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Input_alumni extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		if(!$this->session->userdata('username')){
            redirect('login');
        }
	}

	function index()
	{
		$data['menu']			= 'Input Data Alumni';
		$data['title']			= 'Alumni SMP Negeri 1 Welahan';
		$data['icon']			= 'fa fa-edit';
		$data['content_view']	= 'input_alumni/input_alumni_v';
		$this->template->admin_template($data);
	}

	function kirim_data()
	{
		$this->load->model('Mdl_input_alumni');
		$nama_alumni	= $this->input->post('nama_alumni');
		$tahun_lulus	= $this->input->post('tahun_lulus');
		$kelas			= $this->input->post('kelas');
		$tempat_lahir	= $this->input->post('tempat_lahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$email 			= $this->input->post('email');
		$alamat			= $this->input->post('alamat');
		$kecamatan		= $this->input->post('kecamatan');
		$kabupaten		= $this->input->post('kabupaten');
		$nohp 			= $this->input->post('nohp');
		$kesan 			= $this->input->post('kesan');
		$pesan 			= $this->input->post('pesan');
		$foto			= $this->input->post('foto');


		$data = array(
		 	'nama_alumni'	=>$nama_alumni,
		 	'tahun_lulus' 	=>$tahun_lulus,
		 	'kelas' 		=>$kelas,
		 	'tempat_lahir' 	=>$tempat_lahir,
		 	'tanggal_lahir' =>$tanggal_lahir,
		 	'jenis_kelamin'	=>$jenis_kelamin,
		 	'email' 		=>$email,
		 	'alamat'		=>$alamat,
		 	'kecamatan'		=>$kecamatan,
		 	'kabupaten'		=>$kabupaten,
		 	'nohp' 			=>$nohp,
		 	'kesan' 		=>$kesan,
		 	'pesan' 		=>$pesan,
		 	'foto'			=>$foto
		 	);

		$this->Mdl_input_alumni->input_alumni($data, 'daftar_alumni');
		redirect('daftar_alumni');
	}
}