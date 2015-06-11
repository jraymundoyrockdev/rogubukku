<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Dashboard Controller For Transaction Reports.
 *
 */
class Controller_Reports_Transactions extends Controller_Base
{

    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        $this->_is_logged_in();

        parent::before();

    }

    /**
     * Display listing dashboard
     *
     * @return Response
     */
    public function action_index()
    {
        $this->template->body = View::factory('reports/transactions');
    }

} // End of class