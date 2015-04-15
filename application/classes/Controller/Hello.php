<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Hello extends Controller_Base
{
    public function action_index()
    {



        $this->template->message = 'hello, world';
    }
}