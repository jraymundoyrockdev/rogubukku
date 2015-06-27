<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Admin Controller For UserRoles
 *
 */
class Controller_Admin_Userroles extends Controller_Base
{

    /**
     * @var Role
     */
    protected $_role;

    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        parent::before();
        $this->_role = ORM::factory('Role');
    }

    /**
     * Display listing of the resource
     *
     * @return Response
     */
    public function action_index()
    {
        if (!Rogubukku::isAdmin()) {
            $this->request->redirect('404');
        }

        $userRoles =  $this->_role->find_all();
        $this->template->body = View::factory('admin/userroles')->bind('userroles', $userRoles);

    }

} // End of class