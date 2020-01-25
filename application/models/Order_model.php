<?php
class Order_model extends CI_Model
{
  function getByShip($ship=1){
    $where ='ship='.$ship;
    $this->db->select('*');
    $this->db->from('transactions');
    $this->db->join('cart','cart.id=transactions.cart_id');
    if($ship!=0){
      $this->db->where('cart.shipped',$ship);

    }
    return $this->db->get();
  }
  function getById($id){
    $this->db->select('*');
    $this->db->from('transactions');
    $this->db->join('cart','cart.id=transactions.cart_id');
    $this->db->where('transactions.id',$id);
    return $this->db->get();

    }
  function getAll(){
    $query=$this->db->get('brand');
    return $query;
  }
  function countAll($ship){
    $where ='ship='.$ship;
    $this->db->select('*');
    $this->db->from('transactions');
    $this->db->join('cart','cart.id=transactions.cart_id');
    if($ship!=0){
      $this->db->where('cart.shipped',$ship);

    }
    return $this->db->count_all_results();
  }
  function getByPage($ship,$page=0){
    $where ='ship='.$ship;
    $this->db->select('*');
    $this->db->from('transactions');
    $this->db->join('cart','cart.id=transactions.cart_id');
    if($ship!=0){
      $this->db->where('cart.shipped',$ship);

    }
    $page=$page=0?1:$page-1;
    $start=$page*PER_PAGE;
    $this->db->limit(PER_PAGE,$start);
    $query=$this->db->get();
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
