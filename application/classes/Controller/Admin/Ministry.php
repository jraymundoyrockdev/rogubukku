<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Ministry extends Controller_Base
{
    protected $_ministry;

    public function before()
    {
        parent::before();
        $this->_ministry = ORM::factory('Ministry');
        $this->template->resourceModule = 'admin-ministry';
    }

    public function action_index()
    {
        $ministries = $this->_ministry->find_all();
        $this->template->body = View::factory('admin/ministry')->bind('ministries', $ministries);
    }

    public function action_save()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            $result = $this->_ministry->roguSave($this->request->post());

            if (!empty($result['objectModel'])) {
                $result['updatedMinistry'] = $result['objectModel']->get('ministry');
            }

            $this->responseAjaxResult($result);
        }
    }

} // End of class