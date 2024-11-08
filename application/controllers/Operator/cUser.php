<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cUser extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mUser');
	}

	public function index()
	{
		$data = array(
			'user' => $this->mUser->select()
		);
		$this->load->view('Operator/Layout/head');
		$this->load->view('Operator/Layout/sidebar');
		$this->load->view('Operator/vUser', $data);
		$this->load->view('Operator/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'nama_user' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level_user' => $this->input->post('level')
		);
		$this->mUser->add($data);
		$this->session->set_flashdata('success', 'Data User berhasil disimpan!');
		redirect('Operator/cUser');
	}
	public function update($id)
	{
		$data = array(
			'nama_user' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level_user' => $this->input->post('level')
		);
		$this->mUser->update($id, $data);
		$this->session->set_flashdata('success', 'Data User berhasil diperbaharui!');
		redirect('Operator/cUser');
	}
	public function delete($id)
	{
		$this->mUser->delete($id);
		$this->session->set_flashdata('success', 'Data User berhasil dihapus!');
		redirect('Operator/cUser');
	}
}

/* End of file cUser.php */
