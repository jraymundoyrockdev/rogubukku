<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Transactions_Transactions extends Controller_Base
{
    /**
     * @var Transactions
     */
    protected $_transactions;

    /**
     * @var Ministry
     */
    protected $_ministry;

    /**
     * @var Users
     */
    protected $_users;

    /**
     *@var Logged In User Id
     */
    protected $_user_id;
    /**
     *@var List of transaction type
     */
    protected $_transaction_type;

    public function before()
    {
        $this->_is_logged_in();

        parent::before();

        $this->_transactions = ORM::factory('Transactions');
        $this->_ministry     = ORM::factory('Ministry');
        $this->_users        = ORM::factory('Users');
        $this->_user_id      = Auth::instance()->get_user()->id;
        $this->_transaction_type = ['print' => 'Print', 'encode' => 'Encode', 'all' => 'All', 'others' => 'Others'];

        $this->template->resourceModule = 'transactions';
    }

    public function action_index()
    { 

        $ministries = $this->_ministry->find_all()->as_array('id', 'ministry');
        $user = $this->_users->where('id', '=', $this->_user_id)->find();
        $transactions = $this->_transactions->where('logged_by', '=', $this->_user_id)->order_by('logged_date', 'desc')->limit(5)->find_all();

        $noTransactions = $transactions->count()==0 ? 'No Transactions':'';
        
        $this->template->body = View::factory('transactions/create')
            ->bind('transactionType', $this->_transaction_type)
            ->bind('ministries', $ministries)
            ->bind('transactions', $transactions)
            ->bind('user', $user)
            ->bind('noTransactions', $noTransactions);
    }

    public function action_save()
    {
        if (HTTP_Request::POST == $this->request->method()) {

            $result = $this->_transactions->roguSave(Rogubukku::mergeCurrentlyLoggedInUser($this->request->post(), 'logged_by'));

            if (!empty($result['objectModel'])) {
                $result['lastTransaction'] = $result['objectModel']->get('transaction');
                $result['lastLoggedDate'] = $result['objectModel']->get('logged_date');
                $result['lastReason'] = $result['objectModel']->get('reason');
            }

            $this->responseAjaxResult($result);

        }
    }

    public function action_list()
    {
        $this->template->resourceModule = 'transactions-list';

        $transactions = $this->_transactions->where(
                                                'logged_by',
                                                '=', $this->_user_id
                                            )->order_by(
                                                'logged_date',
                                                'desc'
                                            )->find_all();
        
        $this->template->body = View::factory('transactions/index')
            ->bind('transactions', $transactions);
    }

    public function action_edit()
    {
        

        $transaction_id = $this->request->param('id');

        $transaction = $this->_transactions->where('id', '=', $transaction_id)->find();
        $ministries = $this->_ministry->find_all()->as_array('id', 'ministry');

        $this->template->body = View::factory('transactions/edit')
            ->bind('transaction', $transaction)
            ->bind('transactionType', $this->_transaction_type)
            ->bind('ministries', $ministries);
    }

    public function action_update()
    {
        $transaction_id = $this->request->param('id');

        $transaction = $this->_transactions->where('id', '=', $transaction_id)->find();
        $ministries = $this->_ministry->find_all()->as_array('id', 'ministry');

        if (HTTP_Request::POST == $this->request->method()) {

            $result = $this->_transactions->roguSave(Rogubukku::mergeCurrentlyLoggedInUser($this->request->post(), 'logged_by'));

            if (!empty($result['objectModel'])) {
                $result['lastTransaction'] = $result['objectModel']->get('transaction');
                $result['lastLoggedDate'] = $result['objectModel']->get('logged_date');
                $result['lastReason'] = $result['objectModel']->get('reason');
            }

            $this->responseAjaxResult($result);

        }
    }

} // End of class