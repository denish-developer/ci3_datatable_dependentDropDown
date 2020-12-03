<?php


class HomeController extends CI_Controller {


   /**
    * Manage __construct
    *
    * @return Response
   */
   public function __construct() { 
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');

   }


   /**
    * Manage index
    *
    * @return Response
   */
   public function index() {
      $states = $this->db->get("demo_state")->result();
      $this->load->view('myform', array('states' => $states )); 
   } 


   /**
    * Manage uploadImage
    *
    * @return Response
   */
   public function myformAjax($id) { 
       $result = $this->db->where("state_id",$id)->get("demo_cities")->result();
       echo json_encode($result);
   }


} 


?>