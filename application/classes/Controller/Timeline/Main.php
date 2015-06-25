<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Dashboard Controller For Timeline Reports.
 *
 */
class Controller_Timeline_Main extends Controller_Base
{

    /**
     * @var Transactions
     */
    protected $_transactions;

    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        $this->_is_logged_in();

        parent::before();

        $this->_transactions = ORM::factory('Transactions');

        $this->template->resourceModule = 'timeline';

    }

    /**
     * Display listing dashboard
     *
     * @return Response
     */
    public function action_index()
    {

        $this->template->body = View::factory('timeline/main');
    }

} // End of class