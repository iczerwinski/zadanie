<?php 
   class Test_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
		 $this->db->limit(20); 
      } 
  
      public function index() { 
         $query = $this->db->get("test"); 
         $data['records'] = $query->result(); 
         $this->load->helper('url'); 
         $this->load->view('Test_view',$data); 
		 $this->load->library('pagination');
$config['base_url'] = '/app/index.php/test';
$config['total_rows'] = 2000;
$config['per_page'] = 20;

$this->pagination->initialize($config);

echo $this->pagination->create_links();
      } 
  
     /*  public function add_student_view() { 
         $this->load->helper('form'); 
         $this->load->view('Test_add'); 
      } 
  
      public function add_student() { 
         $this->load->model('Test_Model');
			
         $data = array( 
            'id' => $this->input->post('id'), 
            'name' => $this->input->post('name'), 
		    'surname' => $this->input->post('surname'), 
            'adres' => $this->input->post('adres'),
		    'zipcode' => $this->input->post('zipcode')

         ); 
			
         $this->Test_Model->insert($data); 
   
         $query = $this->db->get("test"); 
         $data['records'] = $query->result(); 
         $this->load->view('Test_view',$data); 
      } 
  
      
  
      public function delete_student() { 
         $this->load->model('Stud_Model'); 
         $roll_no = $this->uri->segment('3'); 
         $this->Test_Model->delete($id); 
   
         $query = $this->db->get("test"); 
         $data['records'] = $query->result(); 
         $this->load->view('Test_view',$data); 
      }  */
	     /*    public function pagination() { 


	    }  */
	   /*  public   function search()
{
$data['query'] = $this->Test_model->get_search();
$this->load->view('Test_view', $data);
} */

public function page() { 
         $query = $this->db->get("test"); 
         $data['records'] = $query->result(); 
         $id = $this->uri->segment('20'); 
         $this->load->view('Test_page',$data); 
         $data['records'] = $query->result(); 
         $this->load->helper('url'); 
		 $this->load->library('pagination');
$config['base_url'] = '/app/index.php/test';
$config['total_rows'] = 2000;
$config['per_page'] = 20;		

$this->pagination->initialize($config); 

echo $this->pagination->create_links(); 
      } 
   } 
 
?>