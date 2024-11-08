<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mSiswa');
	}

	public function index()
	{
		$data = array(
			'siswa' => $this->mSiswa->select()
		);
		$this->load->view('WaliKelas/Layout/head');
		$this->load->view('WaliKelas/Layout/sidebar');
		$this->load->view('WaliKelas/vDashboard', $data);
		$this->load->view('WaliKelas/Layout/footer');
	}
}

/* End of file cDashboard.php */
