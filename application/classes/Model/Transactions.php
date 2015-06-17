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

    protected $_fillable = array(
        'ministry_id',
        'transaction',
        'reason',
        'colored',
        'non_colored',
        'last_login',
        'transaction_date',
        'logged_date',
        'logged_by'
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
            ),

            'ministry_id' => array(
                array('not_empty'),
            ),

            'reason' => array(
                array('not_empty'),
                array('min_length', array(':value', 5)),
                array('max_length', array(':value', 500)),
            ),
            'transaction_date' => array(
                array('not_empty'),
            )
        );
    }

    public function roguSave($fields)
    {
        return $this->_prepareSave($fields, $this->_fillable, $this->_primary_key);
    }
    
} // End User Model