<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Dashboard Controller For Transaction Reports.
 *
 */
class Controller_Reports_Transactions extends Controller_Base
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

        $this->template->resourceModule = 'reports';

    }

    /**
     * Display listing dashboard
     *
     * @return Response
     */
    public function action_index()
    {
        $transactions = [];

        if (!Auth::instance()->logged_in("admin")) {

            $transactions = $this->_transactions->where(
                'logged_by',
                '=',
                Auth::instance()->get_user()->id
            )->order_by(
                'transaction_date',
                'desc'
            )->find_all();
        }

        if (Auth::instance()->logged_in("admin")) {

            $transactions = $this->_transactions->order_by(
                'transaction_date',
                'desc'
            )->find_all();
        }

        $this->template->body = View::factory('reports/transactions')
            ->bind('transactions', $transactions);

    }

} // End of class