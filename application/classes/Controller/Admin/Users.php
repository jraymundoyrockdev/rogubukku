<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Base
{

    public function before()
    {
        parent::before();
        $this->template->resourceModule = 'admin-users-management';
    }

    public function action_index()
    {
        $users = ORM::factory('Roles_Users')->where('role_id', '=', 1)->find_all();
        $this->template->body = View::factory('admin/users')->bind('users', $users);
    }

    public function action_changestatus()
    {
        $message = ['isSuccess' => 'false'];

        if (HTTP_Request::POST == $this->request->method()) {
            $post = $this->request->post();
            $users = ORM::factory('Users', $post['userId']);
            $users->active_flag = ($post['activeFlag']=='true') ? 'Y' : 'N';
            $message['isSuccess'] = ($users->save()) ? true : false;
        }

        $this->responseAjaxResult($message);
    }


} // End of class