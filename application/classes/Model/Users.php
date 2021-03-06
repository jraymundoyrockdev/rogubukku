<?php defined('APPPATH') OR die('No direct access allowed.');

/**
 * Model Users
 *
 * Users Instance table
 */
class Model_Users extends Model_User
{

    protected $_primary_key = 'id';

    protected $_table_name = 'users';

    protected $_table_columns = array(
        'id' => null,
        'ministry_id' => null,
        'full_name' => null,
        'username' => null,
        'password' => null,
        'logins' => null,
        'last_login' => null,
        'created_date' => null,
        'active_flag' => null,
        'avatar' => null
    );

    protected $_fillable = array(
        'ministry_id',
        'full_name',
        'username',
        'password',
        'logins',
        'last_login',
        'created_date',
        'avatar',
        'profile_pic',
        'active_flag'
    );

    protected $_belongs_to = array(
        'ministry' => array(
            'model' => 'Ministry',
            'foreign_key' => 'ministry_id'
        ),
        'rolesUsers' => array(
            'model' => 'Roles_Users',
            'foreign_key' => 'id'
        ),
    );

    protected $_has_many = array(
        'transactions' => array(
            'model' => 'Transactions',
            'foreign_key' => 'logged_by',
        ),
        'announcements' => array(
            'model' => 'Announcements',
            'foreign_key' => 'announced_by',
        )
    );

    public function rules()
    {
        return array(

            'full_name' => array(
                array('not_empty'),
                array('min_length', array(':value', 5)),
                array('max_length', array(':value', 30)),
            ),
            'username' => array(
                array('not_empty'),
                array('min_length', array(':value', 5)),
                array('max_length', array(':value', 30)),
                array(array($this, 'username_available'))
            ),
            'password' => array(
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
        return $this->_prepareSave($fields, $this->_fillable, $this->_primary_key);
    }

    /**
     * Checks Username availability.
     * This is default to be here. Any interactions to User model without this wil not work.
     *
     * @param $username string Username
     * @return bool
     *
     */
    public function username_available($username)
    {
        if (!Auth::instance()->logged_in()) {
            $is_exists = ORM::factory('Users', array('username' => $username))->loaded();

            return ($is_exists) ? false : true;
        }

        return true;

    }

} // End User Model