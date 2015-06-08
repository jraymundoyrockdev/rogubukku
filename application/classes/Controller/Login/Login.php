<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Login Controller For Login and User Sign Up
 *
 */
class Controller_Login_Login extends Controller_Base
{

    /**
     * default construct.
     * Set global config variables
     */
    public function before()
    {
        $this->template = 'templates/login';

        parent::before();

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

            if ($user) {
                $this->request->redirect('dashboard');
            }

            $message = 'Invalid Login Credentials';
            $has_error = 'has-error';
            $disable_button = 'disabled="disabled"';
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
            $result = ['isSuccess' => false, 'signupUser' => null, 'errorFields' => []];

            try {
                $user = new Model_Users;
                $user->create_user($this->request->post(), ['username', 'password', 'full_name']);

                $roles = new Model_Roles_Users;
                $roles->create_user_roles($user->id);

                $result['isSuccess'] = true;
                $result['signupUser'] = $user->full_name;

            } catch (ORM_Validation_Exception $e) {
                $result['errorFields'] = $e->errors('models');
            } catch (Exception $error) {
                $result['errorFields'] = $error->getMessage();
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
} // End of class