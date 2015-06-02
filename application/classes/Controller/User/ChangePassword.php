<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_ChangePassword extends Controller_Base {

    public function before()
    {
    	$this->_is_logged_in();
        
        parent::before();

        $this->template->loc_scripts = ['/media/js/validation/user/change_password.js'];
    }
    
    public function action_index()
    {
    	$user = ORM::factory('Users', Auth::instance()->get_user()->id);
        
        $this->template->body = View::factory('user/change_password')
        									->bind('user', $user);
    }

    public function action_save(){
    	
    	$auth = Auth::instance();

        $username = $message = $errors = $email = NULL;

    	if (HTTP_Request::POST == $this->request->method()) 
        {   
            $user_id = $auth->get_user()->id;

            $post = $this->request->post();
            $result = ['isSuccess'=>false, 'updatedPasswordUser'=>'','errorFields'=>[]];
            $post['old_password'] = $auth->hash($post['old_password']);

            try
            {
    			$user_model = new Model_Users;
        		$user_result = $user_model->save_password($user_id, $post);          	

                $result['isSuccess'] = true;
                $result['updatedPasswordUser'] = $post['new_password'];
                
                if(! $user_result){
                    $result['isSuccess'] = false;
                    $result['errorFields']['old_password'] = 'Old password does not exist.';
                }
                
                echo json_encode($result); die; //@TODO CREATE A HELPER CLASS TO OUTPUT JSON DATA
            }
            
            catch (ORM_Validation_Exception $e) 
            { 
                $result['errorFields'] = $e->errors('models');
                echo json_encode($result); die; //@TODO CREATE A HELPER CLASS TO OUTPUT JSON DATA
            }
            catch (Exception $error)
            {
                $result['errorFields'] = $error->getMessage();
                echo json_encode($result); die; //@TODO CREATE A HELPER CLASS TO OUTPUT JSON DATA
            }

            
        }
    }
        
} // End of class