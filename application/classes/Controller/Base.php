<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Base extends Controller_Template
{

    // Define the template to use
    public $template = 'templates/main';

    public function before()
    {
        parent::before();

        $this->isRequestAjax();

        $this->template->title = 'DEV-practice';
        $this->template->nav = View::factory('templates/nav');
        $this->template->footer = View::factory('templates/footer')->set('message', 'sampler');

        $this->template->resourceSource = Kohana::$config->load('styles-scripts-resource')->get('resource');
        $this->template->resourceModule = '';

        $this->_uploads_directory = Kohana::$config->load('resource_dir')->get('avatar');

    }

    protected function _is_logged_in()
    {
        if (!Auth::instance()->logged_in()) {
            $this->request->redirect('login');
        }

        return true;
    }

    protected function isRequestAjax()
    {
        if ($this->request->is_ajax()) {
            $this->auto_render = false;
        }
    }

    protected function responseAjaxResult(Array $message)
    {
        $this->response->headers('Content-type', 'application/json; charset=' . Kohana::$charset);
        $this->response->body(json_encode($message));
    }
}//end of class