<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mSiswa');
	}

	public function index()
	{
		$data = array(
			'siswa' => $this->mSiswa->select(),
			'wali_kelas' => $this->db->query("SELECT * FROM `user` WHERE level_user='2'")->result()
		);
		$this->load->view('Operator/Layout/head');
		$this->load->view('Operator/Layout/sidebar');
		$this->load->view('Operator/vSiswa', $data);
		$this->load->view('Operator/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'id_user' => $this->input->post('wali_kelas'),
			'nama_siswa' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'kelas' => $this->input->post('kelas'),
			'nis' => $this->input->post('nis')
		);
		$this->mSiswa->add($data);
		$this->session->set_flashdata('success', 'Data Siswa berhasil disimpan!');
		redirect('Operator/cSiswa');
	}
	public function update($id)
	{
		$data = array(
			'id_user' => $this->input->post('wali_kelas'),
			'nama_siswa' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'kelas' => $this->input->post('kelas'),
			'nis' => $this->input->post('nis')
		);
		$this->mSiswa->update($id, $data);
		$this->session->set_flashdata('success', 'Data Siswa berhasil diperbaharui!');
		redirect('Operator/cSiswa');
	}
	public function delete($id)
	{
		$this->mSiswa->delete($id);
		$this->session->set_flashdata('success', 'Data Siswa berhasil dihapus!');
		redirect('Operator/cSiswa');
	}
}

/* End of file cSiswa.php */
