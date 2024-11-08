<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan extends CI_Controller
{

	public function index()
	{
		$data = array(
			'siswa' => $this->db->query("SELECT * FROM `analisis` JOIN siswa ON analisis.id_siswa=siswa.id_siswa ORDER BY hasil DESC")->result()
		);
		$this->load->view('KepalaSekolah/Layout/head');
		$this->load->view('KepalaSekolah/Layout/sidebar');
		$this->load->view('KepalaSekolah/vLaporan', $data);
		$this->load->view('KepalaSekolah/Layout/footer');
	}
	public function cetak()
	{
		$dt_limit = $this->input->post('jml_siswa');
		if ($dt_limit == 'all') {
			$dt_siswa = $this->db->query("SELECT * FROM `analisis` JOIN siswa ON analisis.id_siswa=siswa.id_siswa ORDER BY hasil DESC")->result();
		} else {
			$dt_siswa = $this->db->query("SELECT * FROM `analisis` JOIN siswa ON analisis.id_siswa=siswa.id_siswa ORDER BY hasil DESC limit " . $dt_limit)->result();
		}

		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();


		$pdf->SetFont('Times', 'B', 14);
		// $pdf->Image('asset/logosmp.png', 3, 3, 40);
		$pdf->Cell(200, 5, 'SD NEGERI BENDA', 0, 1, 'C');
		$pdf->SetFont('Times', '', 10);
		$pdf->Cell(200, 20, 'Dusun Iv Rt.05/rw.04, BENDA, Kec. Luragung, Kab. Kuningan Prov. Jawa Barat', 0, 0, 'C');

		$pdf->SetLineWidth(1);
		$pdf->Line(10, 43, 200, 43);
		$pdf->SetLineWidth(0);
		$pdf->Line(10, 42, 200, 42);
		$pdf->Cell(10, 30, '', 0, 1);

		$pdf->SetFont('Times', 'B', 14);
		$pdf->Cell(190, 10, 'LAPORAN HASIL PERHITUNGAN SISWA', 0, 1, 'C');


		$pdf->Cell(10, 15, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(45, 7, 'NIS', 1, 0, 'C');
		$pdf->Cell(80, 7, 'Nama Siswa', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Hasil', 1, 1, 'C');

		$pdf->SetFont('Times', '', 9);
		$no = 1;

		foreach ($dt_siswa as $key => $value) {
			$pdf->Cell(10, 7, $no++, 1, 0, 'C');
			$pdf->Cell(45, 7, $value->nis, 1, 0, 'C');
			$pdf->Cell(80, 7, $value->nama_siswa, 1, 0, 'C');
			$pdf->Cell(50, 7, $value->hasil, 1, 1, 'R');
		}



		$pdf->Cell(95, 7, 'Kuningan, ' . date('j F Y'), 0, 1, 'C');

		$pdf->Cell(95, 7, 'Kepala Sekolah SDN Benda', 0, 1, 'C');
		$pdf->Cell(95, 10, '', 0, 1, 'C');

		$pdf->SetFont('Times', 'B', 9);

		$pdf->Cell(95, 7, '(....................)', 0, 0, 'C');

		$pdf->Output();
	}
}

/* End of file cLaporan.php */
