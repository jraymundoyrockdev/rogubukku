<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Dashboard Controller For Timeline Reports. Specifically Transactions
 *
 */
class Controller_Timeline_Transactions extends Controller_Base
{

    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        $this->_is_logged_in();

        parent::before();

        $this->template->resourceModule = 'timeline';
    }

    /**
     * Display listing dashboard
     *
     * @return Response
     */
    public function action_index()
    {
        $this->template->body = View::factory('timeline/transactions');
    }

} // End of class