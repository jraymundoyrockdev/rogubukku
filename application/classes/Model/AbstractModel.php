<?php defined('APPPATH') OR die('No direct access allowed.');

abstract class Model_AbstractModel extends Model_BaseModel
{
    abstract public function roguSave($fields);

} // End Abstract Model