<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Dashboard Controller For User Dashboard.
 *
 */
class Controller_Dashboard_Dashboard extends Controller_Base
{

    /**
     * @var Model_Transactions
     */
    protected $_ministry;

    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        $this->_is_logged_in();

        parent::before();

        $this->_transactions = ORM::factory('Transactions');

        $this->template->resourceModule = 'dashboard-client';
    }

    /**
     * Display listing dashboard
     *
     * @return Response
     */
    public function action_index()
    {
        $transactions = $this->_transactions->order_by('transaction_date desc')->limit(15)->find_all();

        $this->template->body = View::factory('dashboard/main')->bind('transactions', $transactions);
    }

} // End of class