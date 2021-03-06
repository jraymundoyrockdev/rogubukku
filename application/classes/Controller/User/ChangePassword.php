<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Change Password Controller For User Profile.
 *
 */
class Controller_User_ChangePassword extends Controller_Base
{
    /**
     * @var Users
     */
    protected $_users;

    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        $this->_is_logged_in();

        parent::before();
        $this->_users = ORM::factory('Users');
        $this->template->resourceModule = 'change-password';
    }

    /**
     * Display Change password form
     *
     * @return Response
     */
    public function action_index()
    {
        $this->template->body = View::factory('user/change_password');
    }

    /**
     * Stores Updated data to storage
     *
     * @return Response
     */
    public function action_save()
    {
        if (HTTP_Request::POST == $this->request->method()) {

            $result = [
                'isSuccess' => false,
                'errorFields' => ['old_password' => 'Old Password does not exist.'],
                'objectModel' => []
            ];

            if ($this->_validatePasswords($this->request->post())) {
                $post = Rogubukku::mergeCurrentlyLoggedInUser($this->request->post());
                $result = $this->_users->roguSave($post);
            }

            $this->responseAjaxResult($result);
        }
    }

    /**
     * Facade Validates Password
     *
     * @return bool
     */
    private function _validatePasswords($post)
    {

        if (!$this->_validateOldPassword($post)) {
            return false;
        }

        if (!$this->_validateNewPassword($post)) {
            return false;
        }

        return true;
    }

    /**
     * Validates Old Password
     *
     * @return bool
     */
    private function _validateOldPassword($post)
    {

        $oldPassword = Auth::instance()->hash($post['old_password']);

        if ($oldPassword == Auth::instance()->get_user()->password) {
            return true;
        }

        return false;
    }

    /**
     * Validates New Password
     *
     * @return bool
     */
    private function _validateNewPassword($post)
    {
        if ($post['password'] == $post['confirm_new_password']) {
            return true;
        }

        return false;
    }
} // End of class