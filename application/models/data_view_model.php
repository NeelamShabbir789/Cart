<?php 
class data_view_model extends CI_Model{


//we will use the select function  
      public function select($data)  
      {  
         //data is retrive from this query  
         $query = $this->db->get('products');  
         return $query;  
      }  
  }
  ?>