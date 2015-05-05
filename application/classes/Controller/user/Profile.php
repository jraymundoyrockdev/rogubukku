<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Profile extends Controller_Base {

    public function before()
    {
    	$this->_is_logged_in();
        
        parent::before();

    }
    
    public function action_index()
    {
        $this->template->body = View::factory('user/profile');
    }
        
} // End of class