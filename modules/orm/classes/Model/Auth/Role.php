<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Default auth role
 *
 * @package    Kohana/Auth
 * @author     Kohana Team
 * @copyright  (c) 2007-2009 Kohana Team
 * @license    http://kohanaphp.com/license.html
 */
class Model_Auth_Role extends Model_AbstractModel {

	// Relationships
	protected $_has_many = array(
		'users' => array('model' => 'User','through' => 'roles_users'),
	);

	public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 32)),
			),
			'description' => array(
				array('max_length', array(':value', 255)),
			)
		);
	}

    public function roguSave($fields)
    {
        return $this->_prepareSave($fields, $this->_fillable, $this->_primary_key);
    }

} // End Auth Role Model
