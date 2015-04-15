<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Base extends Controller_Template{

    // Define the template to use
    public $template = 'templates/main';

    public function before()
    {
        parent::before();

        $this->template->title = 'Sampler';

        $this->template->glob_styles = ['/media/css/bootstrap/bootstrap.css'=>'screen'];

        $this->template->glob_scripts = ['/media/js/jquery/jquery.js', '/media/js/bootstrap/bootstrap.js'];

        $this->template->loc_styles = [];

        $this->template->loc_scripts = [];



    }
}