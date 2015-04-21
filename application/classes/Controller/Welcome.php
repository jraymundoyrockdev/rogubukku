<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Base {

    public function before()
    {
        parent::before();

        $this->template->layout = View::factory('welcome');
    }

	public function action_index()
	{
    
	}

    public function action_create()
    {
        echo "this is create";
    }

    public function action_put()
    {
        echo "this is put";
    }

    public function action_delete()
    {
        echo "action delete";
    }
} // End Welcome