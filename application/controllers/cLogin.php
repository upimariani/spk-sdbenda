<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('vLogin');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = $this->mLogin->login($username, $password);
			if ($data) {
				$array = array(
					'id_user' => $data->id_user
				);

				$this->session->set_userdata($array);

				if ($data->level_user == '1') {
					redirect('Operator/cDashboard');
				} else if ($data->level_user == '2') {
					redirect('WaliKelas/cDashboard');
				} else {
					redirect('KepalaSekolah/cDashboard');
				}
			} else {
				$this->session->set_flashdata('error', 'Username dan Password Anda Salah!');
				redirect('cLogin');
			}
		}
	}
	public function logout()
	{

		$this->session->unset_userdata('id_user');
		$this->session->set_flashdata('success', 'Anda Berhasil Logout!');
		redirect('cLogin');
	}
}

/* End of file cLogin.php */
