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
}