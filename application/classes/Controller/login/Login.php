<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login_Login extends Controller_Base {

    public function before()
    {   
        $this->template = 'templates/login';

        parent::before();

        $this->template->loc_styles = ['/media/css/login/login.css'=>'screen',
                                       '/media/css/bootstrap_validator/formValidation.css'=>'screen'];

        $this->template->loc_scripts = ['/media/js/bootstrap_validator/dist/formValidation.js',
                                        '/media/js/bootstrap_validator/dist/bootstrap.js',
                                        '/media/js/login/login.js'];

        $this->template->body = View::factory('login/login');
    }
    
    public function action_index()
    {
        if (HTTP_Request::POST == $this->request->method()) 
        {
            $post = $this->request->post();
            $user = Auth::instance()->login($post['username'], $post['password']);

            if ($user)
            {
                $this->request->redirect('dashboard');
            }

            $message = 'Login failed';
        }
    }

    public function action_signup()
    {
        die;
        $username = $message = $errors = $email = NULL;

        if (HTTP_Request::POST == $this->request->method()) 
        {
            $username = $this->request->post('username');

            try
            {
                $user = new Model_User;

                $user->create_user($this->request->post(), array( 'username', 'password', 'full_name'));

                $user->add('roles', ORM::factory('Role', array('name' => 'login')));

                $message = $user->full_name.' has been successfully created. Please contact your administrator to activate your account.';
                $this->template->body->set('message', $message);

            }
            catch (ORM_Validation_Exception $e) 
            { 
                $message = 'There were errors.';
                $errors = $e->errors('models');
                echo json_encode($errors);
            }
            catch (Exception $error)
            {
                $message = 'The following errors occured';
                $errors = $error->getMessage();
                echo json_encode($errors);
            }
        }

        $this->template->body
               ->bind('message', $message)
               ->bind('errors', $errors)
               ->bind('username', $username);

    }

    public function action_logout()
    {
        Auth::instance()->logout();
        $this->request->redirect('login');
    }
    
} // End of class