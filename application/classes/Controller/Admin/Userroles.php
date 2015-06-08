<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Admin Controller For UserRoles
 *
 */
class Controller_Admin_Userroles extends Controller_Base
{

    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        parent::before();
    }

    /**
     * Display listing of the resource
     *
     * @return Response
     */
    public function action_index()
    {
        $userroles = ORM::factory('Role')->find_all();
        $this->template->body = View::factory('admin/userroles')->bind('userroles', $userroles);

    }

} // End of class