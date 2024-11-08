<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{
	public function index()
	{
		$data = array(
			'siswa' => $this->db->query("SELECT * FROM `analisis` JOIN siswa ON analisis.id_siswa=siswa.id_siswa ORDER BY hasil DESC LIMIT 10")->result()
		);
		$this->load->view('KepalaSekolah/Layout/head');
		$this->load->view('KepalaSekolah/Layout/sidebar');
		$this->load->view('KepalaSekolah/vDashboard', $data);
		$this->load->view('KepalaSekolah/Layout/footer');
	}
}

/* End of file cDashboard.php */
