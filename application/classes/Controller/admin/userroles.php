<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Userroles extends Controller_Base {

    public function before()
    {
        parent::before();
    }
    
    public function action_index()
    {
        echo "thisis user roles"; die;
    }
        
} // End of class