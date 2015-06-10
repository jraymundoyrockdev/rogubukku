<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Transactions_Transactions extends Controller_Base {

	public function before()
	{
		$this->_is_logged_in();

		parent::before();
        
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

        $i = 1;
        $selected = '';

		$this->template->body = View::factory('transactions/transactions')
                                    ->bind('transaction_type', $transaction_type)
                                    ->bind('ministries', $ministries)
                                    ->bind('user', $user)
                                    ->bind('selected', $selected)
                                    ->bind('i', $i);
	}

	public function action_save()
	{	
		$auth = Auth::instance();

		if (HTTP_Request::POST == $this->request->method()) 
        {   
            $user_id = $auth->get_user()->id;

            $post = $this->request->post();

            $post['transaction_date'] =  date_format(date_create($post['transaction_date']), 'Y-m-d H:i:s');
            
            $save_type = 'save_exit';
            
           	$result = ['isSuccess'=>true, 
        			   'transaction_type'=> $post['transaction_type'],
                       'ministry_id'=> $post['ministry_id'],
        			   'colored'=>$post['colored'],
        			   'nonColored'=>$post['non_colored'],
        			   'reason'=>$post['reason'],
        			   'transactionDate'=>$post['transaction_date'],
        			   'errorFields'=>[],
        			   'save_type'=> $post['save_transaction_type']
                    ];

            try
            {
    			if($post['transaction_type'] != 'encode' && $post['transaction_type'] != 'others'){

		        	if($post['colored'] == '' && $post['non_colored'] == '')
		        		$result['isSuccess'] = false;
            	}
                
                $transaction_model = new Model_Transactions;
                
                $transaction_result = $transaction_model->save_transaction($user_id, $post);
                
                echo json_encode($result); die; //@TODO CREATE A HELPER CLASS TO OUTPUT JSON DATA
            }
            
            catch (ORM_Validation_Exception $e) 
            { 
                $result['errorFields'] = $e->errors('models');
                echo json_encode($result); die; //@TODO CREATE A HELPER CLASS TO OUTPUT JSON DATA
            }
            catch (Exception $error)
            {
                $result['errorFields'] = $error->getMessage();
                echo json_encode($result); die; //@TODO CREATE A HELPER CLASS TO OUTPUT JSON DATA
            }

            
        }
	}

} // End of class