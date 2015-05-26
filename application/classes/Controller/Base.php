<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Base extends Controller_Template
{

    public $template = 'templates/main';

    public function before()
    {
        parent::before();

        if ($this->request->is_ajax()) {
            $this->auto_render = false;
        }

        $this->template->title = 'DEV-practice';
        $this->template->nav = View::factory('templates/nav');
        $this->template->footer = View::factory('templates/footer')->set('message','');

        //SCRIPTS AND STYLES
        $this->template->glob_styles = [
            '/media/css/bootstrap/bootstrap.css' => 'screen',
            '/media/css/fonts/css/font-awesome.min.css' => 'screen',
            '/media/css/main/main_style.css' => 'screen',
            '/media/css/shieldui/shieldui-all.min.css' => 'screen',
            '/media/css/shieldui/all.min.css' => 'screen',
            '/media/css/hackmain.css' => 'screen'
        ];

        $this->template->glob_scripts = [
            '/media/js/jquery/jquery-1.10.2.min.js',
            '/media/js/bootstrap/bootstrap.js',
            '/media/js/bootstrap_validator/dist/formValidation.js',
            '/media/js/bootstrap_validator/dist/bootstrap.js'
        ];

        $this->template->loc_styles = [];
        $this->template->loc_scripts = [];
        $this->uploadsDirectory = Kohana::$config->load('uploads_directory')->get('root');
    }

    protected function _is_logged_in()
    {
        if (!Auth::instance()->logged_in()) {
            $this->request->redirect('login');
        }

        return true;
    }

    protected function responseAjaxResult($message = [])
    {
        $this->response->headers('Content-type', 'application/json; charset=' . Kohana::$charset);
        $this->response->body(json_encode($message));
    }
}//end of class