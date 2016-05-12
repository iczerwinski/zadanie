<?php
Class Search_model Extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

 public function search($keyword)
    {
        $this->db->like('name',$keyword);
        $query =$this->db->get('test');
        return $query->result();
    }
}   
?> 