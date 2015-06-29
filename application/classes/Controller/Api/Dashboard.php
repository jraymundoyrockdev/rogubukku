<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_Dashboard extends Controller_Base
{

    /**
     * @var Rogubukku
     */
    protected $_dashboard;


    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        parent::before();

        $this->auto_render = false;

        $this->_dashboard = Rogubukku::API('Dashboard');
    }

    /**
     * Display all transaction totals per transaction type per year
     *
     */
    public function action_transaction_totals()
    {
        $data = $this->_dashboard->transactionTotals($this->request->param('year'), $this->request->param('id'));

        $this->responseAjaxResult($data);
    }

    /**
     * Display all transaction totals per month default(current year)
     *
     */
    public function action_transaction_totals_per_month()
    {
        $data = $this->_dashboard->transactionPerMonth($this->request->param('year'), $this->request->param('id'));

        $this->responseAjaxResult($data);
    }

    /**
     * Display all transaction totals per Ministry
     *
     */
    public function action_transaction_totals_per_ministry()
    {
        $data = $this->_dashboard->transactionPerMinistry($this->request->param('year'));

        $this->responseAjaxResult($data);
    }

}