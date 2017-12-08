<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends CI_Model
{
	public function getDataCat()
	{
		$this->db->select('*');
		$this->db->from('page_category');

		$hasil = $this->db->get();
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		}else{
			return array();
		}
	}
}