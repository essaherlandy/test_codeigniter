<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function get_barang()
	{
		return $this->db->get('barang');
	}

	public function add($data)
	{
		$this->db->insert('barang',$data);
	}

	public function get_one_barang($kode_barang)
	{
		return $this->db->get_where('barang',array('kode_barang'=>$kode_barang));
	}

	public function update($data)
	{
		$this->db->where('kode_barang',$this->input->post('kode_barang'));
		$this->db->update('barang',$data);
	}

	public function delete($kode_barang)
	{
		$this->db->where('kode_barang',$kode_barang);
		$this->db->delete('barang');
	}

	public function search()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from barang where nama_barang like '%$cari%' ");
		return $data->result();
	}
}
