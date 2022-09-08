<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tokoku extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('TokokuModel');
	}

	public function index()
	{
		$queryAllData = $this->TokokuModel->get_data();
		// echo "<pre>";
		// print_r($queryAllData);
		// echo "</pre>";
		$Data = array('queryAlltoko' => $queryAllData);
		$this->load->view('tokoku', $Data);
		
	}

	public function hal_tambah() 
	{
		$this->load->view('tambah_buku');
	}

	public function hal_edit($id) 
	{
		$queryBukuDetail = $this->TokokuModel->getDataBukuDetail($id);
		$Data = array('queryBukuDetails' => $queryBukuDetail);
		$this->load->view('edit_buku', $Data);
	}

	public function funcAdd () 
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$penerbit = $this->input->post('penerbit');
		$tahun = $this->input->post('tahun');
		$status = $this->input->post('status');

		$ArrInsert = array (
			'id' => $id,
			'judul' => $judul,
			'pengarang' => $pengarang,
			'penerbit' => $penerbit,
			'tahun' => $tahun,
			'status' => $status,
		);

		$this->TokokuModel->insertDataBuku($ArrInsert);
		redirect(base_url(''));
		
	}

	public function funcEdit() 
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$penerbit = $this->input->post('penerbit');
		$tahun = $this->input->post('tahun');
		$status = $this->input->post('status');

		$ArrUpdate = array (
			'id' => $id,
			'judul' => $judul,
			'pengarang' => $pengarang,
			'penerbit' => $penerbit,
			'tahun' => $tahun,
			'status' => $status,
		);

		$this->TokokuModal->updateBuku($id, $ArrUpdate);
		redirect(base_url(''));
	}

	public function funcDel($id)
	{
		$this->TokokuModel->deleteBuku($id);
		redirect(base_url(''));
	}


}
