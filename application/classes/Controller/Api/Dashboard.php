<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_Dashboard extends Controller_Base
{

    /**
     * @var Rogubukku
     */
    protected $_dashboard;


    public function before()
    {
        parent::before();

        $this->auto_render = false;

        $this->_dashboard = Rogubukku::API('Dashboard');
    }

    public function action_transaction_totals()
    {
        $data = $this->_dashboard->transactionTotals($this->request->param('year'), $this->request->param('id'));

        $this->responseAjaxResult($data);
    }

    public function action_transaction_totals_per_month()
    {
        $data = $this->_dashboard->transactionPerMonth($this->request->param('year'), $this->request->param('id'));

        $this->responseAjaxResult($data);
    }

}