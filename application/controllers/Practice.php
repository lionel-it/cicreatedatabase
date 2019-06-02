<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Practice extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->model("san_pham/m_san_pham_table","tbsp");
		$data['data'] = $this->tbsp->getSanpham();
		$this->load->view('san_pham/v_dssp', $data, FALSE);
	}
	public function once()
	{
		echo "Once loading ...";
	}
}