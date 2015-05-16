<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Ministry extends Controller_Base {
    public function before()
    {
        parent::before();
   
        $this->template->loc_scripts = ['/media/js/validation/admin/ministry.js'];
    }
    
    public function action_index()
    {
    	$ministries = ORM::factory('Ministry')->find_all();
    	
    	$this->template->body = View::factory('admin/ministry')->bind('ministries', $ministries);
		
	}
    public function action_save()
    {
        if (HTTP_Request::POST == $this->request->method()) 
        {   
            
             $ministry_id = Auth::instance()->get_ministry()->id;
$ministry->create_ministry($this->request->post('ministry'));

            $post = $this->request->post();
            $result = ['isSuccess'=>false, 'updatedMinistry'=>'','errorFields'=>[]];
            $ministry_result = $ministry->create_ministry($ministry_id, $post);

           try
            {
                $ministry = new Model_Ministry;   

             

                $result['isSuccess'] = true;
                $result['updatedMinistry'] = $post['ministry'];
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