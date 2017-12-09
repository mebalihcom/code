<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends CI_Model
{
	public function getDataPage($params = array())
	{
		$this->db->select('*');
        $this->db->from('page');

        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }

        if (array_key_exists("status", $params)) {
            $this->db->where('status', $params['status']);
        }

        if(array_key_exists("slug", $params)){
            $this->db->where('slug', $params['slug']);
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }

        return $result;
	}

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

	public function save_pagelist($data_page)
	{
		if ($this->db->insert('page',$data_page)) 
		{
			return TRUE;
		}
		 else
		{
			return FALSE;
		}
	}
}