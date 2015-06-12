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

    public function before()
    {
        $this->_is_logged_in();

        parent::before();

        $this->_transactions = ORM::factory('Transactions');
        $this->_ministry = ORM::factory('Ministry');
        $this->_users = ORM::factory('Users');

        $this->template->resourceModule = 'transactions';
    }

    public function action_index()
    {
        $transaction_type = [
            'print' => 'Print',
            'encode' => 'Encode',
            'all' => 'All',
            'others' => 'Others'
        ];

        $ministries = $this->_ministry->find_all()->as_array('id', 'ministry');
        $user = $this->_users->where('id', '=', Auth::instance()->get_user()->id)->find();

        $this->template->body = View::factory('transactions/transactions')
            ->bind('transactionType', $transaction_type)
            ->bind('ministries', $ministries)
            ->bind('user', $user);
    }

    public function action_save()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            $this->responseAjaxResult(
                $this->_transactions->roguSave(
                    Rogubukku::mergeCurrentlyLoggedInUser($this->request->post(), 'logged_by')
                )
            );
        }
    }

} // End of class