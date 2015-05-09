<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Ministry extends Controller_Base {
    public function before()
    {
        parent::before();
    }
    
    public function action_index()
    {
    	$ministries = ORM::factory('Ministry')->find_all();
    	
    	$this->template->body = View::factory('admin/ministry')->bind('ministries', $ministries);
		
	}
    public function action_save()
    {
        if (HTTP_Request::POST == $this->request->method()) 
        {   
            $ministry = new Model_Ministry;
            $ministry->create_ministry($this->request->post('ministry'));
        }   
    }
     
} // End of class