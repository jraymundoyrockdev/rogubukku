<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login_Login extends Controller_Base {

    public function before()
    {
        $this->template = 'templates/login';

        parent::before();

        $this->template->loc_styles = ['/media/css/login/login.css'=>'screen'];
    }
    
    public function action_index()
    {
        $this->template->body = View::factory('login/login');
    }

    public function action_signin()
    {   
        echo "signin";

        //@todo validation starts here
        //return to index with errors for errors
        //redirect to clinet/admin dashboard if success
    }
    
} // End of class