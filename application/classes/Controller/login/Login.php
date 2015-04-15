<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login_Login extends Controller_Base {

    public function before()
    {
        parent::before();
    }

    public function action_index()
    {
        $this->template->layout = View::factory('login/login');
    }

    public function action_create()
    {
        echo "this is create";
    }

    public function action_login()
    {
        $this->template->layout = View::factory('login/another_login');
    }
    
} // End Welcome