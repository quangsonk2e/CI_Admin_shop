<?php
class Brand_model extends CI_Model{
  function getById($id){
    //$this->db->where('id',$id);
    $query=$this->db->get_where('brand', array('id' => $id));
    return $query->result();
    }
  function getAll(){
    $query=$this->db->get('brand');
    return $query;
  }
  function countAll(){
    $this->db->from('brand');    
    return $this->db->count_all_results();
  }
  function getByPage($page=0){
    $page=$page=0?1:$page-1;
    $start=$page*PER_PAGE;
    $this->db->limit(PER_PAGE,$start);
    $query=$this->db->get('brand');
    return $query;
  }
  function add($name, $created){
    
    $data = array('brand' =>$name ,'created'=>$created );
    $this->db->insert('brand',$data);
    }
    function update($id,$name,$created){
      $data=array('brand' => $name,'created'=>$created );
      
      $this->db->where('id',$id);
      $this->db->update('brand',$data);
      }
      function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('brand');
        }

}

?>
