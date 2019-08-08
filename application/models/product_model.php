<?php

class product_model extends CI_Model{



public function   Add_Product($data){
	$this->db->insert('products',$data);


}
}

?>