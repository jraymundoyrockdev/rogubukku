<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dashboard_Dashboard extends Controller_Base {

    public function before()
    {
    	$this->is_logged_in();
        
        parent::before();

    }
    
    public function action_index()
    {
        $this->template->body = View::factory('dashboard/dashboard');
    }
        
} // End of class