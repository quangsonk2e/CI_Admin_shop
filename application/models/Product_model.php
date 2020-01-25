<?php
class Product_model extends CI_Model
{
  function getById($id){
    //$this->db->where('id',$id);
    $query=$this->db->get_where('products', array('id' => $id));
    return $query->result();
    }
  function getAll(){
    $query=$this->db->get('products');
    return $query;
  }
  function countAll(){
    $this->db->from('products');    
    return $this->db->count_all_results();
  }
  function getByPage($page=0){
    $page=$page=0?1:$page-1;
    $start=$page*PER_PAGE;
    $this->db->limit(PER_PAGE,$start);
    $query=$this->db->get('products');
    return $query;
  }
   function add($title, $categories,$price,$list_price, $image,$brand, $description, $featured,$sizes,$deleted){
    $data = array('title' =>$title ,'categories'=>$categories,'price'=>$price,'list_price'=>$list_price, 'image'=>$image,'brand'=>$brand, 'description'=>$description, 'featured'=>$featured,'sizes'=>$sizes,'deleted'=>$deleted);
     $this->db->insert('products',$data);
    }
    function update($id, $title, $categories,$price,$list_price, $image,$brand, $description, $featured,$sizes,$deleted){
      $data = array('title' =>$title ,'categories'=>$categories,'price'=>$price,'list_price'=>$list_price, 'brand'=>$brand, 'description'=>$description, 'featured'=>$featured,'sizes'=>$sizes,'deleted'=>$deleted);
      if($image!=''){
          $data['image']=$image;
        }
              
      $this->db->where('id',$id);
      $this->db->update('products',$data);
      }
      function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('products');
        }

}

?>
