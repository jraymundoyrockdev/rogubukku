<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Login Controller For Login and User Sign Up
 *
 */
class Controller_Login_Login extends Controller_Base
{

    /**
     * @var Users
     */
    protected $_users;

    /**
     * @var Roles_Users
     */
    protected $_rolesUsers;

    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        $this->template = 'templates/login';

        parent::before();
        $this->_users = ORM::factory('Users');
        $this->_rolesUsers = ORM::factory('Roles_Users');
        $this->template->resourceModule = 'login';
        $this->template->body = View::factory('login/login');
    }

    /**
     * Displays the Login Page.
     * Log in the user and Redirect to dashboard if payload user credential is correct
     *
     * @return Response
     */
    public function action_index()
    {
        $this->_redirect_if_logged_in();

        if (HTTP_Request::POST == $this->request->method()) {
            $post = $this->request->post();

            $user = Auth::instance()->login($post['signin_username'], $post['signin_password']);

            $message = 'Invalid Login Credentials';
            $has_error = 'has-error';
            $disable_button = 'disabled="disabled"';

            if ($user) {

                if($this->_isActive())
                    $this->request->redirect('dashboard');

                $message = 'Your account is not yet activated please contact your administrator.';
                $has_error = '';
                $disable_button = '';
            }
        }

        $this->template->body
            ->bind('message', $message)
            ->bind('signin_username', $post['signin_username'])
            ->bind('has_error', $has_error)
            ->bind('disable_button', $disable_button);

    }

    /**
     * Signs Up new user.
     * Method to create new user and assign its default role
     *
     * @return Response
     */
    public function action_signup()
    {
        if (HTTP_Request::POST == $this->request->method()) {

            $this->request->post('username');

            $post = $this->request->post();

            $userResult = $this->_users->roguSave($post);

            if (! $userResult['isSuccess']) {
                return $this->responseAjaxResult($userResult);
            }

            $data = ['role_id' => 1, 'user_id' => $userResult['objectModel']->get('id')];

            $result = $this->_rolesUsers->roguSave($data);

            if ($result['isSuccess']) {

                Auth::instance()->login($post['username'], $post['password']);

                $result['signupUser'] = $userResult['objectModel']->get('full_name');
            }

            $this->responseAjaxResult($result);
        }
    }

    /**
     * Logout User.
     * Redirect to Login Page
     */
    public function action_logout()
    {
        Auth::instance()->logout();
        $this->request->redirect('login');
    }

    /**
     * Check if user is Logged in.
     * If logged in redirect to dashboard page
     */
    private function _redirect_if_logged_in()
    {
        if (Auth::instance()->logged_in()) {
            $this->request->redirect('dashboard');
        }

        return false;
    }

    /**
     * Check if user is approved by admin.
     * Method to check the active flag and number of login of an authenticated user.
     *
     */
    private function _isActive()
    {
        $active_flag = Auth::instance()->get_user()->active_flag;

        if($active_flag == 'Y') return true;

        if($active_flag == 'N' && (int) $this->_users->where('id','=', Auth::instance()->get_user()->id)->find()->logins == 1) return true;

        Auth::instance()->logout();

        return false;
    }

    /**
     * Cancel login now.
     * Method to destroy session of authenticated user after sign up.
     *
     */
    public function action_cancelLoginNow()
    {
        Auth::instance()->logout();

        return false;
    }
} // End of class