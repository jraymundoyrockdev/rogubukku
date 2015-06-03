<?php defined('APPPATH') OR die('No direct access allowed.');

class Model_BaseModel extends ORM
{

    public function is_field_available($field, $field_value, $model)
    {
        $is_exists = ORM::factory($model, array($field => $field_value))->loaded();

        return ($is_exists) ? false : true;
    }


} // End User Model