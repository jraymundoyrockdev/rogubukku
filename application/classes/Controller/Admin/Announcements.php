<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Gab
 * Date: 6/30/2015
 * Time: 1:04 PM
 */

class Controller_Admin_Announcements extends Controller_Base {

    /**
     * @var Announcements
     */
    protected $_announcements;

    /**
     * @var Logged In User Id
     */
    protected $_user_id;
    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        parent::before();

        if (!Rogubukku::isAdmin()) {
            $this->request->redirect('404');
        }

        $this->_announcements = ORM::factory('Announcements');

        $this->_user_id = Auth::instance()->get_user()->id;

        $this->template->resourceModule = 'admin-announcements';
    }

    /**
     * Display form of announcement
     *
     */
    public function action_index()
    {
        if (!Rogubukku::isAdmin()) {
            $this->request->redirect('404');
        }

        $announcements = $this->_announcements->where(
            'announced_by',
            '=',
            $this->_user_id
        )->order_by(
            'from_date', 'desc'
        )->limit(5)->find_all();

        $this->template->body = View::factory('admin/announcements/index')->bind('announcements', $announcements);
    }

    /**
     * Create Page
     *
     */
    public function action_create()
    {
        $this->template->body = View::factory('admin/announcements/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function action_save()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            $result = $this->_announcements->roguSave(Rogubukku::mergeCurrentlyLoggedInUser($this->request->post(), 'announced_by'));

            $this->responseAjaxResult($result);
        }
    }

    /**
     * Edit Page
     *
     */
    public function action_edit()
    {

        $announcements = $this->_announcements->where(
            'id',
            '=', $this->request->param('id')
        )->where(
            'announced_by',
            '=', $this->_user_id
        )->find();

        if (empty($announcements->id)) {
            $this->request->redirect('404');
        }

        $this->template->body = View::factory('admin/announcements/edit')
            ->bind('announcements', $announcements);

    }

    /**
     * Delete Announcement
     *
     */
    public function action_destroy()
    {
        $announcements = $this->_announcements->where(
            'id',
            '=', $this->request->param('id')
        )->where(
            'announced_by',
            '=', $this->_user_id
        )->find();

        if (empty($announcements->id)) {
            $this->request->redirect('404');
        }

        $delete = ORM::factory('announcements', $this->request->param('id'))->delete();

        $result['isSuccess'] = false;

        if (true) {
            $result['isSuccess'] = true;
        }

        $this->responseAjaxResult($result);

    }
}