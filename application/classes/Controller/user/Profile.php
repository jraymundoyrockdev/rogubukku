<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Profile extends Controller_Base {

    public function before()
    {
        $this->_is_logged_in();
        
        parent::before();

    }
    
    public function action_index()
    {
        $auth_ins = Auth::instance()->get_user();
        $username = Auth::instance()->get_user()->username;
        $current_ministry =Auth::instance()->get_user()->ministry_id;
        $ministries = ORM::factory('Ministry')->find_all();

        if (HTTP_Request::POST == $this->request->method()) 
        {
            $post = $this->request->post();
        }
        
        $this->template->body = View::factory('user/profile')
                                            ->bind('username', $username)
                                            ->bind('auth_ins', $auth_ins)
                                            ->bind('ministries', $ministries)
                                            ->bind('current_ministry',$current_ministry);
    }
        
} // End of class