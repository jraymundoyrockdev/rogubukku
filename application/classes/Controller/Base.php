<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Controller_Base extends Controller_Template
{
    public $template = 'templates/main';

    protected $uploadsDirectory;

    public function before()
    {
        parent::before();

        $this->isRequestAjax();

        $this->template->title = 'Rogubukku - GFCCM';
        $this->template->nav = View::factory('templates/nav')->set('routeName', Route::name($this->request->route()));

        $this->template->resourceSource = Kohana::$config->load('styles-scripts-resource')->get('resource');
        $this->template->resourceModule = '';

        $this->avatarDirectory = Kohana::$config->load('path-resource')->get('avatar');
        $this->imagesDirectory = Kohana::$config->load('path-resource')->get('images');

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