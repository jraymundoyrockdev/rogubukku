<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Userroles extends Controller_Base {

    public function before()
    {
        parent::before();
    }
    
    public function action_index()
    {
    	$userroles = ORM::factory('Role')->find_all();
    	$this->template->body = View::factory('admin/userroles')->bind('userroles', $userroles);

    }
        
} // End of class