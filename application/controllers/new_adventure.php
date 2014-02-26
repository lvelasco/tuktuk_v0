<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: lvelasco
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class New_adventure extends CI_Controller{
    function __construct(){
        parent::__construct();
        
    }
    
    public function index($location){
        
        $this->load->view('new_adventure_view',array('data' => $location));
        
        
        
    }
    
    
    
 }
 ?>