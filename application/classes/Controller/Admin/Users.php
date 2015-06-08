<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Admin Controller For Users
 *
 */
class Controller_Admin_Users extends Controller_Base
{
    /**
     * @var Roles_Users
     */
    protected $_roles_users;

    /**
     * @var Users
     */
    protected $_users;

    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        parent::before();
        $this->_roles_users = ORM::factory('Roles_Users');
        $this->_users = ORM::factory('Users');
        $this->template->resourceModule = 'admin-users-management';
    }

    /**
     * Display listing of the resource
     *
     * @return Response
     */
    public function action_index()
    {
        $users = $this->_roles_users->where('role_id', '=', 1)->find_all();
        $this->template->body = View::factory('admin/users')->bind('users', $users);
    }

    /**
     * Updates user status.
     *
     * @return Response
     */
    public function action_changestatus()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            $result = $this->_users->roguSave($this->request->post());
        }

        $this->responseAjaxResult($result);
    }


} // End of class