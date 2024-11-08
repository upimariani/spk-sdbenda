<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mSiswa extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->join('user', 'siswa.id_user = user.id_user', 'left');

		return $this->db->get()->result();
	}
	public function add($data)
	{
		$this->db->insert('siswa', $data);
	}
	public function update($id, $data)
	{
		$this->db->where('id_siswa', $id);
		$this->db->update('siswa', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_siswa', $id);
		$this->db->delete('siswa');
	}
}

/* End of file mSiswa.php */
