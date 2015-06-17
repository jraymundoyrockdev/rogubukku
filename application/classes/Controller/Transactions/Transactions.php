<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Transactions_Transactions extends Controller_Base {

     /**
     * @var Transactions
     */
    protected $_transactions;


    public function before()
    {
        $this->_is_logged_in();

        parent::before();
        
        $this->_transactions = ORM::factory('Transactions');

        $this->template->resourceModule = 'transactions';
    }
    
    public function action_index()
    {
        $auth = Auth::instance();

        $user = ORM::factory('Users', $user_id = $auth->get_user()->id);

        $transaction_type = [
            'print' => 'Print',
            'encode' => 'Encode',
            'all' => 'All',
            'others' => 'Others'
        ];

        $ministries = ORM::factory('Ministry')->find_all();
        $transactions = ORM::factory('Transactions')->find_all();
        $i = 1;
        $selected = '';

        $this->template->body = View::factory('transactions/transactions')
                                    ->bind('transaction_type', $transaction_type)
                                    ->bind('ministries', $ministries)
                                    ->bind('transactions', $transactions)
                                    ->bind('user', $user)
                                    ->bind('selected', $selected)
                                    ->bind('i', $i);
    }

    public function action_save()
    {   
        $auth = Auth::instance();

        if (HTTP_Request::POST == $this->request->method()) 
        {   

            $post = $this->request->post();

            $post['transaction_date'] =  date_format(date_create($post['transaction_date']), 'Y-m-d H:i:s');
            
            $data = [
                        'isSuccess' => false,
                        'save_type' => !(empty($this->request->post('save_transaction_type')) )? 'save_and_addnew' : 'save_exit',
                        'errorFields'=>[],
                        'colored'=>$post['colored'],
                        'nonColored'=>$post['non_colored'],
                        'objectModel' => []
                    ];

            $post = array_merge($data, $post);
         
            if($this->_validateTransactionType($post)) {
                $this->responseAjaxResult($this->_transactions->roguSave(Rogubukku::mergeCurrentlyLoggedInUser($post,'logged_by'))); 
            }
            else
                $this->responseAjaxResult($data);
           
        }
    }

    private function _validateTransactionType($post)
    {
        if($post['transaction'] != 'encode' && $post['transaction'] != 'others'){

            if($post['colored'] == '' && $post['non_colored'] == '')
                return false;
        }

        return true;
    }

} // End of class