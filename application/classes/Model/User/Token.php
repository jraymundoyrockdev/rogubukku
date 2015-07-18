<?php

/**
 * Model Users Token
 *
 * Users Token Instance table
 */
class Model_User_Token extends Model_Auth_User_Token
{
    protected $_table_columns = array(
        'id' => null,
        'user_id' => null,
        'user_agent' => null,
        'token' => null,
        'created' => null,
        'expires' => null,
    );

    protected $_table_name = 'user_tokens';

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

} // End User Token Model