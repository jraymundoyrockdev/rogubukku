<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Profile extends Controller_Base {

    public function before()
    {
    	$this->_is_logged_in();
        
        parent::before();

        $this->template->loc_scripts = ['/media/js/validation/user/profile.js'];

    }
    
    public function action_index()
    {   
        
        $user = ORM::factory('Users', Auth::instance()->get_user()->id);
		$ministries = ORM::factory('Ministry')->find_all()->as_array('ministry_id','ministry');

    	if (HTTP_Request::POST == $this->request->method()) 
        {
            $post = $this->request->post();
        }

        $this->template->body = View::factory('user/profile')
        									->bind('user', $user)
        									->bind('ministries', $ministries);
    }

    public function action_save()
    {
        if (HTTP_Request::POST == $this->request->method()) 
        {   
            $user_id = Auth::instance()->get_user()->id;

            $post = $this->request->post();
            $result = ['isSuccess'=>false, 'updatedUser'=>'','errorFields'=>[]];

            try
            {
                $user = new Model_Users;
                $user_result = $user->save_profile($user_id, $post);

                $result['isSuccess'] = true;
                $result['updatedUser'] = $post['full_name'];
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