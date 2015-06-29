<?php defined('APPPATH') OR die('No direct access allowed.');

class Model_Transactions extends Model_AbstractModel
{

    protected $_primary_key = 'id';

    protected $_table_name = 'transactions';

    protected $_table_columns = array(
        'id' => null,
        'ministry_id' => null,
        'transaction' => null,
        'reason' => null,
        'colored' => 0,
        'non_colored' => 0,
        'transaction_date' => null,
        'status' => null,
        'logged_date' => null,
        'logged_by' => null,
    );

    protected $_fillable = array(
        'ministry_id',
        'transaction',
        'reason',
        'colored',
        'non_colored',
        'last_login',
        'transaction_date',
        'status',
        'logged_date',
        'logged_by'
    );

    protected $_belongs_to = array(
        'users' => array(
            'model' => 'Users',
            'foreign_key' => 'logged_by'
        ),
        'ministry' => array(
            'model' => 'Ministry',
            'foreign_key' => 'ministry_id'
        ),
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

    /**
     * Derived from the AbstractModel
     *
     * Default mass assignment method for saving and updating tables.
     * @param $fields array payload of data coming form post send
     *
     * @return object
     */
    public function roguSave($fields)
    {
        $fields['logged_date'] = date('Y-m-d H:i:s');

        return $this->_prepareSave($fields, $this->_fillable, $this->_primary_key);
    }

} // End User Model