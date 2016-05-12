<?php 
   class Test_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   function get_search() {
  $match = $this->input->post(‘search’);
  $this->db->like(‘id’,$match);
  $this->db->or_like(‘name’,$match);
  $this->db->or_like(‘surname’,$match);
  $this->db->or_like(‘adres’,$match);
  $this->db->or_like(zipcode,$match);

  $query = $this->db->get('Test_view');
  return $query->result();
}

  /*     public function insert($data) { 
         if ($this->db->insert("test", $data)) { 
            return true; 
         } 
      } 
   
      public function delete($Id) { 
         if ($this->db->delete("test", "Id = ".$Id)) { 
            return true; 
         } 
      } 
   
      public function update($data,$Id) { 
         $this->db->set($data); 
         $this->db->where("Id", $old_Id); 
         $this->db->update("test", $data); 
      }  */
   } 
?> 