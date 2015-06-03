<?php defined('APPPATH') OR die('No direct access allowed.');

class Model_Ministry extends Model_BaseModel
{

    protected $_primary_key = 'ministry_id';

    protected $_table_name = 'ministry';

    protected $_table_columns = array(
        'ministry_id' => null,
        'ministry' => null,
    );

    protected $_has_one = array(
        'users' => array(
            'model' => 'Users',
            'foreign_key' => 'ministry_id',
        ),
    );

    public function rules()
    {
        return array();
    }

    public function create_ministry($ministry)
    {
        $this->ministry = $ministry;

        return $this->save();
    }

} // End User Model