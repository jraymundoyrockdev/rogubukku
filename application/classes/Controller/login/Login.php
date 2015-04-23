<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login_Login extends Controller_Base {

    public function before()
    {
        $this->template = 'templates/login';

        parent::before();

        $this->template->loc_styles = ['/media/css/login/login.css'=>'screen'];

        $this->template->body = View::factory('login/login');
    }
    
    public function action_index()
    {
        
    }

    public function action_signin()
    {   

        //@todo validation starts here
        //@todo we should hash the password
        
        if($this->request->post('username')=='a' && $this->request->post('password')=='a')
        {
            //redirect to clinet/admin dashboard if success
            $this->request->redirect('dashboard');
        }

        //@todo should return as error in the orm
        $this->response->body($this->template->body);

    }
    
} // End of class