<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	protected $table='';
	function getAll(){
		$query=$this->db->get($this->table);
		return $query->result();
	}

	function getById($id){
    //$this->db->where('id',$id);
    $query=$this->db->get_where($this->table, array('id' => $id));
    return $query->result();
    }

  function countAll(){
    $this->db->from($this->table);    
    return $this->db->count_all_results();
  }
  function getByPage($page=0){
    $page=$page=0?1:$page-1;
    $start=$page*PER_PAGE;
    $this->db->limit(PER_PAGE,$start);
    $query=$this->db->get($this->table);
    return $query->result();
  }
  function add($data){
    
    
    $this->db->insert($this->table,$data);
    }
    function update($id,$data){
     
      
      $this->db->where('id',$id);
      $this->db->update($this->table,$data);
      }
      function delete($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
        }


}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */