<?php defined('APPPATH') OR die('No direct access allowed.');

/**
 * Abstract Model Class.
 *
 * We make sure that all Concrete Model class has the same methods to be use on BaseModel Class.
 */
abstract class Model_AbstractModel extends Model_BaseModel
{
    /**
     * Abstract Method roguSave.
     *
     * Default mass assignment method for saving and updating tables.
     * @param $fields array payload of data coming form post send
     */
    abstract public function roguSave($fields);

} // End Abstract Model