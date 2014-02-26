<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: lvelasco
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Main extends CI_Controller{
    function __construct(){
        parent::__construct();
        
    }
    
    public function index(){
        // If the user is validated, then this function will run
         
        $this->load->view('main_view',array('data' => $this->session->userdata('username')));
        
        
    }
    
    
    
 }
 ?>