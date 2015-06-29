<?php defined('APPPATH') OR die('No direct access allowed.');

/**
 * Model Ministry
 *
 * Ministry Instance table
 */
class Model_Ministry extends Model_AbstractModel
{
    protected $_primary_key = 'id';

    protected $_table_name = 'ministry';

    protected $_table_columns = array(
        'id' => null,
        'ministry' => null,
    );

    protected $_fillable = array('ministry');

    protected $_has_many = array(
        'users' => array(
            'model' => 'Users',
            'foreign_key' => 'id',
        ),
    );

    public function rules()
    {
        return array(

            'ministry' => array(
                array('not_empty'),
                array('min_length', array(':value', 5)),
                array('max_length', array(':value', 30)),
            ),
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
        return $this->_prepareSave($fields, $this->_fillable, $this->_primary_key);
    }


} // End User Model