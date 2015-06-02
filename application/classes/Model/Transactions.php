<?php defined('APPPATH') OR die('No direct access allowed.');

# application/Model/Transactions.php
class Model_Transactions extends Model_BaseModel {

    protected $_primary_key = 'id';

    protected $_table_name = 'transactions';

    protected $_table_columns = array(
        'id' => NULL,
        'ministry_id'=>NULL,
        'transaction' => NULL,
        'reason' => NULL,
        'colored' => NULL,
        'non_colored' => NULL,
        'transaction_date' => NULL,
        'logged_date' => NULL,
        'logged_by' => NULL,
    );


    protected $_belongs_to = array(
      'users' => array ('model' => 'Users',
                        'foreign_key' => 'id' ),

      'ministry' => array ('model' => 'Ministry',
                           'foreign_key' => 'ministry_id' )
    );

    public function rules()
    {
        return array(

            'transaction' => array(
                array('not_empty'),
                array('min_length', array(':value', 5)),
                array('max_length', array(':value', 30)),
            ),

            'reason' => array(
                array('not_empty'),
                array('min_length', array(':value', 5)),
                array('max_length', array(':value', 500)),
            ),
            'transaction_date' => array(
                array('not_empty'),
            ),
        );
    }

    public function save_transaction($user_id,$fields=array())
    {
        $user = ORM::factory('Users', $user_id);
        $this->transaction      = $fields['transaction_type'];
        $this->ministry_id      = (int)$user->ministry_id;
        $this->colored          = $fields['colored'];
        $this->non_colored      = $fields['non_colored'];
        $this->reason           = $fields['reason'];
        $this->transaction_date = $fields['transaction_date'];
        $this->logged_by        = (int)$user_id;

        return $this->save();
        
    }
} // End User Model