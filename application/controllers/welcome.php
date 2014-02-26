<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set('display_errors', 1);
error_reporting(~0);




class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
    public function Welcome(){
        parent::__construct();
        $this->config->load('facebook_config');
    }
    
    
	public function index($msg = NULL)
	{
            
        
            
            $data['msg'] = $msg;
            
            
 


  $config = array(
    'appId' => '642856869082856',
    'secret' => '9e036ddd059ea1f1a370404779d4ffb8',
    'allowSignedRequest' => false // optional but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();
    if($user_id) {

      // We have a user ID, so probably a logged in user.
      // If not, we'll get an exception, which we handle below.
      try {

        $user_profile = $facebook->api('/me','GET');
     
        $this->load->view('main_view');

      } catch(FacebookApiException $e) {
        // If the user is logged out, you can have a 
        // user ID even though the access token is invalid.
        // In this case, we'll get an exception, so we'll
        // just ask the user to login again here.
        $login_url = $facebook->getLoginUrl();
        $data['facebook_login_url'] = $login_url;
        $this->load->view('landing_page',$data);
        
        
        error_log($e->getType());
        error_log($e->getMessage());
      }   
    } else {

      // No user, print a link for the user to login
      $login_url = $facebook->getLoginUrl();
     
      $data['facebook_login_url'] = $login_url;
        $this->load->view('landing_page',$data);

    }

  
            
            
            
            }
        
        public function process()
        {
           
            // Load the model
            $this->load->model('login_model');
            // Validate the user can login
            $result = $this->login_model->validate();
            // Now we verify the result
            if(! $result){
            
            $msg = '<font color=white class=brand-heading-login>Invalid username and/or password</font><br />';
            $this->index($msg);
        }else
            
        {
            // If user did validate, 
            // Send them to members area
        
            
            redirect('main');
        }
        
               
        }
        
        
        
   
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>