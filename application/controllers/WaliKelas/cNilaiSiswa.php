<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cNilaiSiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mNilaiSiswa');
	}

	public function index()
	{
		$data = array(
			'siswa' => $this->mNilaiSiswa->select_siswa($this->session->userdata('id_user'))
		);
		$this->load->view('WaliKelas/Layout/head');
		$this->load->view('WaliKelas/Layout/sidebar');
		$this->load->view('WaliKelas/vNilaiSiswa', $data);
		$this->load->view('WaliKelas/Layout/footer');
	}
	public function hitung()
	{
		//menyimpan data nilai siswa
		$data = array(
			'id_siswa' => $this->input->post('siswa'),
			'periode' => date('Y-m-d'),
			'n_pengetahuan' => $this->input->post('n_pengetahuan'),
			'n_keterampilan' => $this->input->post('n_keterampilan'),
			'n_kehadiran' => $this->input->post('n_kehadiran'),
			'n_perilaku' => $this->input->post('n_perilaku'),
			'n_presentasi' => $this->input->post('n_prestasi')
		);
		// $this->db->insert('analisis', $data);

		//mengambil data siswa keseluruhan
		$jml_c1 = 0;
		$jml_c2 = 0;
		$jml_c3 = 0;
		$jml_c4 = 0;
		$jml_c5 = 0;
		$dt_siswa = $this->db->query("SELECT * FROM `analisis` JOIN siswa ON analisis.id_siswa=siswa.id_siswa")->result();
		foreach ($dt_siswa as $key => $value) {
			$siswa[] = $value->id_analisis;
			$n_pengetahuan = $value->n_pengetahuan;
			$n_keterampilan = $value->n_keterampilan;
			$n_kehadiran = $value->n_kehadiran;
			$n_perilaku = $value->n_perilaku;
			$n_prestasi = $value->n_presentasi;

			//menentukan bobot dari nilai siswa
			if ($n_pengetahuan >= 0 && $n_pengetahuan <= 10) {
				$k_pengetahuan = 10;
				$k_c1[] = 10;
			} else if ($n_pengetahuan >= 11 && $n_pengetahuan <= 40) {
				$k_pengetahuan = 40;
				$k_c1[] = 40;
			} else if ($n_pengetahuan >= 41 && $n_pengetahuan <= 60) {
				$k_pengetahuan = 60;
				$k_c1[] = 60;
			} else if ($n_pengetahuan >= 61 && $n_pengetahuan <= 80) {
				$k_pengetahuan = 80;
				$k_c1[] = 80;
			} else if ($n_pengetahuan >= 81 && $n_pengetahuan <= 100) {
				$k_pengetahuan = 100;
				$k_c1[] = 100;
			}
			$jml_c1 += $k_pengetahuan;

			if ($n_keterampilan >= 0 && $n_keterampilan <= 10) {
				$k_keterampilan = 10;
				$k_c2[] = 10;
			} else if ($n_keterampilan >= 11 && $n_keterampilan <= 40) {
				$k_keterampilan = 40;
				$k_c2[] = 40;
			} else if ($n_keterampilan >= 41 && $n_keterampilan <= 60) {
				$k_keterampilan = 60;
				$k_c2[] = 60;
			} else if ($n_keterampilan >= 61 && $n_keterampilan <= 80) {
				$k_keterampilan = 80;
				$k_c2[] = 80;
			} else if ($n_keterampilan >= 81 && $n_keterampilan <= 100) {
				$k_keterampilan = 100;
				$k_c2[] = 100;
			}
			$jml_c2 += $k_keterampilan;

			if ($n_kehadiran >= 0 && $n_kehadiran <= 10) {
				$k_kehadiran = 10;
				$k_c3[] = 10;
			} else if ($n_kehadiran >= 11 && $n_kehadiran <= 40) {
				$k_kehadiran = 40;
				$k_c3[] = 40;
			} else if ($n_kehadiran >= 41 && $n_kehadiran <= 60) {
				$k_kehadiran = 60;
				$k_c3[] = 60;
			} else if ($n_kehadiran >= 61 && $n_kehadiran <= 80) {
				$k_kehadiran = 80;
				$k_c3[] = 80;
			} else if ($n_kehadiran >= 81 && $n_kehadiran <= 100) {
				$k_kehadiran = 100;
				$k_c3[] = 100;
			}
			$jml_c3 += $k_kehadiran;

			if ($n_perilaku >= 0 && $n_perilaku <= 10) {
				$k_perilaku = 10;
				$k_c4[] = 10;
			} else if ($n_perilaku >= 11 && $n_perilaku <= 40) {
				$k_perilaku = 40;
				$k_c4[] = 40;
			} else if ($n_perilaku >= 41 && $n_perilaku <= 60) {
				$k_perilaku = 60;
				$k_c4[] = 60;
			} else if ($n_perilaku >= 61 && $n_perilaku <= 80) {
				$k_perilaku = 80;
				$k_c4[] = 80;
			} else if ($n_perilaku >= 81 && $n_perilaku <= 100) {
				$k_perilaku = 100;
				$k_c4[] = 100;
			}
			$jml_c4 += $k_perilaku;

			if ($n_prestasi == 'Sekolah') {
				$k_prestasi = 1;
				$k_c5[] = 1;
			} else if ($n_prestasi == 'Kecamatan') {
				$k_prestasi = 2;
				$k_c5[] = 2;
			} else if ($n_prestasi == 'Kabupaten') {
				$k_prestasi = 3;
				$k_c5[] = 3;
			} else if ($n_prestasi == 'Provinsi') {
				$k_prestasi = 4;
				$k_c5[] = 4;
			} else if ($n_prestasi == 'Nasional') {
				$k_prestasi = 5;
				$k_c5[] = 5;
			}
			$jml_c5 += $k_prestasi;
		}

		//hasil nilai akar atau normalisasi kriteria

		//nilai pengetahuan
		$a_c1 = round(sqrt($jml_c1), 4);
		for ($c1 = 0; $c1 < sizeof($k_c1); $c1++) {
			$a_norm_c1[] = round(($k_c1[$c1] / $a_c1) * 0.25, 3);
		}

		//nilai keterampilan
		$a_c2 = round(sqrt($jml_c2), 4);
		for ($c2 = 0; $c2 < sizeof($k_c2); $c2++) {
			$a_norm_c2[] = round(($k_c2[$c2] / $a_c2) * 0.25, 3);
		}

		//nilai kehadiran
		$a_c3 = round(sqrt($jml_c3), 4);
		for ($c3 = 0; $c3 < sizeof($k_c3); $c3++) {
			$a_norm_c3[] = round(($k_c3[$c3] / $a_c3) * 0.2, 3);
		}

		//nilai perilaku
		$a_c4 = round(sqrt($jml_c4), 4);
		for ($c4 = 0; $c4 < sizeof($k_c4); $c4++) {
			$a_norm_c4[] = round(($k_c4[$c4] / $a_c4) * 0.15, 3);
		}

		//nilai prestasi
		$a_c5 = round(sqrt($jml_c5), 4);
		for ($c5 = 0; $c5 < sizeof($k_c5); $c5++) {
			$a_norm_c5[] = round(($k_c5[$c5] / $a_c5) * 0.15, 3);
		}

		//menjumlahkan nilai max dan mengurani nilai min
		for ($i = 0; $i < sizeof($a_norm_c1); $i++) {
			$jml = ($a_norm_c1[$i] +  $a_norm_c2[$i] + $a_norm_c3[$i] + $a_norm_c4[$i]) - $a_norm_c5[$i];
			// echo $siswa[$i] . $jml . '<br>';

			$data = array(
				'hasil' => $jml
			);
			$this->db->where('id_analisis', $siswa[$i]);
			$this->db->update('analisis', $data);
		}
		redirect('WaliKelas/cNilaiSiswa');
	}
}

/* End of file cNilaiSiswa.php */
