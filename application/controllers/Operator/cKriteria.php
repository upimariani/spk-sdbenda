<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKriteria extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKriteria');
	}

	public function index()
	{
		$data = array(
			'kriteria' => $this->mKriteria->select()
		);
		$this->load->view('Operator/Layout/head');
		$this->load->view('Operator/Layout/sidebar');
		$this->load->view('Operator/vKriteria', $data);
		$this->load->view('Operator/Layout/footer');
	}
	public function create()
	{
		$data = array(
			'nama_kriteria' => $this->input->post('kriteria'),
			'sub_kriteria' => $this->input->post('nama'),
			'bobot' => $this->input->post('bobot'),
		);
		$this->mKriteria->add($data);
		$this->session->set_flashdata('success', 'Data Kriteria berhasil disimpan!');
		redirect('Operator/cKriteria');
	}
	public function update($id)
	{
		$data = array(
			'nama_kriteria' => $this->input->post('kriteria'),
			'sub_kriteria' => $this->input->post('nama'),
			'bobot' => $this->input->post('bobot'),
		);
		$this->mKriteria->update($id, $data);
		$this->session->set_flashdata('success', 'Data Kriteria berhasil diperbaharui!');
		redirect('Operator/cKriteria');
	}
	public function delete($id)
	{
		$this->mKriteria->delete($id);
		$this->session->set_flashdata('success', 'Data Kriteria berhasil dihapus!');
		redirect('Operator/cKriteria');
	}
}

/* End of file cKriteria.php */
