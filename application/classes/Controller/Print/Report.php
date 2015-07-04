<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Dashboard Controller For Transaction Reports.
 *
 */
class Controller_Print_Report extends Controller_Base
{

    /**
     * Default template for all Print Pages
     *
     */
    public $template = 'templates/reports/transactions';

    /**
     * @var PrintReports
     */
    protected $_print;

    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        $this->_is_logged_in();

        parent::before();

        $this->_print = Rogubukku::API('PrintReports');
    }

    /**
     * Display listing of transactinos
     *
     */
    public function action_transactions()
    {
        $get = $this->request->query();

       // $get['dateFrom'] = (! empty($get['dateFrom'])) ? date("Y-m-d H:i:s", strtotime($get['dateFrom'])): $get['dateFrom'];

        $result = $this->_print->transactions($this->request->query());
        $this->template->body = View::factory('reports/print/transactions')
            ->bind('transactionsList', $result)
            ->bind('query', $get);
    }

} // End of class