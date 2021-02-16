<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jabatan extends CI_model {

	public $table = "h_jabatan";
	public function get($id_divisi)
	{
		$this->db->where('id_divisi', $id_divisi);
		return $this->db->get($this->table);
	}
	// public function id_to_jabatan($id_jabatan)
	// {
	// 	$this->db->where('id_jabatan', $id_jabatan);
	// 	return $this->db->get($this->table)->row_array()['nama_jabatan'];
	// }


	#for admin
		public function get_all()
		{
			return $this->db->get($this->table);
		}
		public function edit($post)
		{
			$this->db->where("id_jabatan", $post['id_jabatan']);
			$this->db->update($this->table, $post);
		}
		public function add($post)
		{
			$this->db->insert($this->table, $post);
		}
	# for admin end
}
