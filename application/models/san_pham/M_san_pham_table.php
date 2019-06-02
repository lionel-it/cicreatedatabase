<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_san_pham_table extends CI_Model {
	public $variable;
	public function __construct()
	{
		parent::__construct();
	}
	public function getSanpham() 
	{
		echo "getSanpham ...";
	}
}