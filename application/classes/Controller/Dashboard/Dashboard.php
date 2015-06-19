<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Dashboard Controller For User Dashboard.
 *
 */
class Controller_Dashboard_Dashboard extends Controller_Base
{
    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        $this->_is_logged_in();

        parent::before();

        $this->template->resourceModule = 'dashboard-client';
    }

    /**
     * Display listing dashboard
     *
     * @return Response
     */
    public function action_index()
    {
        $this->template->body = View::factory('dashboard/client');
    }

} // End of class