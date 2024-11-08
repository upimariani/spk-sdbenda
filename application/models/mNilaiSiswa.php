<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mNilaiSiswa extends CI_Model
{
	public function select_siswa($id_walikelas)
	{
		$this->db->select('*, siswa.id_siswa');
		$this->db->from('siswa');
		$this->db->join('user', 'siswa.id_user = user.id_user', 'left');
		$this->db->join('analisis', 'analisis.id_siswa = siswa.id_siswa', 'left');
		$this->db->where('siswa.id_user', $id_walikelas);
		return $this->db->get()->result();
	}
}

/* End of file mNilaiSiswa.php */
