<?php

Class Search_controller Extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Search_model');
		$this->load->helper('url'); 
         $this->load->database(); 
		 $this->load->library('pagination');
		 $this->load->view('Search_view',$data);
}

   public function search_keyword()
    {
        $keyword    =   $this->input->post('keyword');
        $data['result']    =   $this->search_model->search($keyword);
        $this->load->view('Search_view',$data);
    }

}
?> 