<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Admin Controller For Ministries
 *
 */
class Controller_Admin_Ministry extends Controller_Base
{

    /**
     * @var Model_Ministry
     */
    protected $_ministry;

    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        parent::before();

        $this->_ministry = ORM::factory('Ministry');
        $this->template->resourceModule = 'admin-ministry';
    }

    /**
     * Display listing of the resource
     *
     * @return Response
     */
    public function action_index()
    {
        if (!Rogubukku::isAdmin()) {
            $this->request->redirect('404');
        }

        $ministries = $this->_ministry->find_all();
        $this->template->body = View::factory('admin/ministry')->bind('ministries', $ministries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
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