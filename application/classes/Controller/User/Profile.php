<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Profile extends Controller_Base
{

    /**
     * @var Users
     */
    protected $_users;

    /**
     * @var Ministry
     */
    protected $_ministry;

    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        $this->_is_logged_in();

        parent::before();
        $this->_users = ORM::factory('Users');
        $this->_ministry = ORM::factory('Ministry');

        $this->template->resourceModule = 'profile';
    }

    /**
     * Display Use Profile form
     *
     * @return Response
     */
    public function action_index()
    {
        $user = $this->_users->where('id', '=', Auth::instance()->get_user()->id)->find();
        $ministries = $this->_ministry->find_all()->as_array('id', 'ministry');

        $this->template->body = View::factory('user/profile')
            ->bind('user', $user)
            ->bind('ministries', $ministries)
            ->bind('avatarDirectory', $this->avatarDirectory)
            ->bind('imagesDirectory', $this->imagesDirectory);
    }

    /**
     * Stores Updated data to storage
     *
     * @return Response
     */
    public function action_save()
    {
        if (HTTP_Request::POST == $this->request->method()) {

            $result = $this->_users->roguSave(Rogubukku::mergeCurrentlyLoggedInUser($this->request->post()));


            if (!empty($result['objectModel'])) {
                $result['updatedUser'] = $result['objectModel']->get('full_name');
            }

            $this->responseAjaxResult($result);
        }
    }

    /**
     * Stores Updated data to storage
     *
     * @return Response
     */
    public function action_avatar()
    {

        if ($this->request->method() == Request::POST) {

            if (!isset($_FILES['avatar'])) {
                return false;
            }

            $post = [];
            $result = [];

            list($res, $message) = Rogubukku::saveImage($_FILES['avatar'], $this->_getUserAvatarDirectory());

            if ($res) {
                $post['avatar'] = $message;
                $result = $this->_users->roguSave(Rogubukku::mergeCurrentlyLoggedInUser($post));
                $result['src'] = $this->_getUserNewAvatar($result);
            }

            if (!$res) {
                $result['errorFields'] = $message;
            }

            $this->responseAjaxResult($result);
        }
    }

    /**
     * Creates an avatar directory
     *
     * @return string
     */
    private function _getUserAvatarDirectory()
    {
        return $this->avatarDirectory['absolute'] . Auth::instance()->get_user()->id . DIRECTORY_SEPARATOR;
    }

    /**
     * Gets the newly created avatar directory
     *
     * @return string
     */
    private function _getUserNewAvatar($result)
    {
        return $this->avatarDirectory['relative'] . $result['objectModel']->get('id') . '/' . $result['objectModel']->get('avatar');
    }

} // End of class