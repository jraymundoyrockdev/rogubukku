<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Base
{
    protected $_roles_users;

    public function before()
    {
        parent::before();
        $this->_roles_users = ORM::factory('Roles_Users');
        $this->_users = ORM::factory('Users');
        $this->template->resourceModule = 'admin-users-management';
    }

    public function action_index()
    {
        $users = $this->_roles_users->where('role_id', '=', 1)->find_all();
        $this->template->body = View::factory('admin/users')->bind('users', $users);
    }

    public function action_changestatus()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            $result = $this->_users->roguSave($this->request->post());
        }

        $this->responseAjaxResult($result);
    }


} // End of class