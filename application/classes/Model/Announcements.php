<?php
/**
 * Model Announcements
 *
 * Announcements Instance table
 */

class Model_Announcements extends Model_AbstractModel {

    protected $_primary_key = 'id';

    protected $_table_name = 'announcements';

    protected $_table_columns = array(
        'id' => null,
        'message' => null,
        'type' => null,
        'from_date' => null,
        'to_date' => null,
        'announced_by' => null,
        'date_announced' => null
    );

    protected $_fillable = array(
        'ministry',
        'message',
        'type',
        'from_date',
        'to_date',
        'announced_by',
        'date_announced'
    );

    protected $_belongs_to = array(
        'users' => array(
            'model' => 'Users',
            'foreign_key' => 'announced_by'
        )
    );

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

}