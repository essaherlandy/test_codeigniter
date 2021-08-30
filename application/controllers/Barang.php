<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct() {
    parent::__construct();
    $this->load->model('Barang_model','barang');
   }

	public function index()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data1 = $this->db->query("SELECT * from barang where nama_barang like '%$cari%' ");
		$data['record'] = $this->barang->get_barang();
		$this->load->view('tampil_barang',$data,$data1);
	}

	public function tambah()
	{
		if(isset($_POST['simpan'])){
			$data=array(
				'kode_barang'		=> $this->input->post('kode_barang'),
				'nama_barang'		=> $this->input->post('nama_barang'),
				'jumlah'			=> $this->input->post('jumlah'),
				'tanggal'			=> $this->input->post('tanggal')
			);
			$this->barang->add($data);
			redirect('barang');
		}else{
			$this->load->view('tambah_barang');
		}
	}

	public function update()
	{
		if(isset($_POST['update'])){
			$data=array(
				'nama_barang'		=> $this->input->post('nama_barang'),
				'jumlah'			=> $this->input->post('jumlah'),
				'tanggal'			=> $this->input->post('tanggal')
			);
			$kode_barang = $this->uri->segment(3);
			$this->barang->update($data);
			redirect('barang');
		}else{
			$kode_barang = $this->uri->segment(3);
			$data['record'] = $this->barang->get_one_barang($kode_barang)->row_array();
			$this->load->view('ubah_barang',$data);
		}
	}

	public function hapus()
	{
		$kode_barang = $this->uri->segment(3);
		$this->barang->delete_barang($kode_barang);
		redirect('barang');
	}
}
