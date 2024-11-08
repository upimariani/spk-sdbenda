<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function index()
	{
		$data = array(
			'siswa' => $this->db->query("SELECT * FROM `analisis` JOIN siswa ON analisis.id_siswa=siswa.id_siswa ORDER BY hasil DESC")->result()
		);
		$this->load->view('Operator/Layout/head');
		$this->load->view('Operator/Layout/sidebar');
		$this->load->view('Operator/vAnalisis', $data);
		$this->load->view('Operator/Layout/footer');
	}
}

/* End of file cAnalisis.php */
