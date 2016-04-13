<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class m_mapel extends CI_Model
{
	protected $table = 'mapel';
	protected $primary_key = 'id_mapel';

	public function findAll()
	{
			$this->db->select('*');
			$this->db->from($this->table);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
            	return $query->result();
        	}
	}

	public function findOne($id) 
	{
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->where($this->primary_key,$id);
			$query = $this->db->get();
			
			if ($query->num_rows() > 0) {
            	return $query->row();
        	}
	}

	//belum digunakan
	// public function findBy($id,$param,$param) 
	// {
	// 		$this->db->select('*');
	// 		$this->db->from($this->table);
	// 		$this->db->where($this->primary_key,$id);
	// 		$query = $this->db->get();
			
	// 		if ($query->num_rows() > 0) {
 //            	return $query->row();
 //        	}
	// }

	public function model_save($data) 
	{
			$this->db->insert($this->table, $data);
			return;
	}

	public function model_update($data,$id)
	{
		$this->db->where($this->primary_key, $id);
        $this->db->update($this->table, $data);
	}

	public	function model_delete($id) {
        $this->db->where($this->primary_key, $id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }
}