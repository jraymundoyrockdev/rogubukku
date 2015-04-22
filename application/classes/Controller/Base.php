<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Base extends Controller_Template{

    // Define the template to use
    public $template = 'templates/main';

    public function before()
    {
        parent::before();

        $this->template->title = 'DEV-practice';

        $this->template->footer = View::factory('templates/footer')->set('message','If he goes tot he left we will go to the left if He go to the right then lets go tot he right');

        $this->template->glob_styles = ['/media/css/bootstrap/bootstrap.css'=>'screen',
                                        '/media/css/fonts/css/font-awesome.min.css'=>'screen',
                                        '/media/css/main/main_style.css'=>'screen'];

        $this->template->glob_scripts = ['/media/js/jquery/jquery-1.10.2.min.js',
                                         '/media/js/bootstrap/bootstrap.js'];

        $this->template->loc_styles = [];

        $this->template->loc_scripts = [];
    }
}//end of class