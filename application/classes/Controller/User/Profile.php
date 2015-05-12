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
        

        $ministries = ORM::factory('Ministry');

        
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

    public function action_dp()
    {
        $user_id = Auth::instance()->get_user()->id;

        $post = $this->request->post();
        print_r($_POST);

        $filename = NULL;

        try
        {
            if ($this->request->method() == Request::POST)
            {
                echo 'post mo to';
                if (isset($_FILES['avatar']))
                {
                    echo 'avatar';
                    $filename = $this->_save_image($_FILES['avatar']);
                    $result['isSuccess'] = true;
                    $result['filename'] = $filename;
                    echo json_encode($result); die;
                }
            }

            if ( ! $filename)
            {
                throw new Exception('There was a problem while uploading the image.
                    Make sure it is uploaded and must be JPG/PNG/GIF file.');
            }


        }
        catch(ORM_Validation_Exception $e)
        {
            $result['errorFields'] = $e->errors('models');
            echo json_encode($result); die; //@TODO CREATE A HELPER CLASS TO OUTPUT JSON DATA
        }
        catch(Exception $error)
        {
            $result['errorFields'] = $error->getMessage();
            echo json_encode($result); die; //@TODO CREATE A HELPER CLASS TO OUTPUT JSON DATA
        }
    }

    protected function _save_image($image)
    {
        $user_id = Auth::instance()->get_user()->id;

        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }
        $directory = DOCROOT.'uploads/'.$user_id;
        if(!is_dir($directory))
        {
            mkdir($directory,0755,TRUE);
        }

        if ($file = Upload::save($image, NULL, $directory))
        {
            $filename = strtolower(Text::random('alnum', 20)).'.jpg';
            
            $img = Image::factory($file);
            
            // Crop the image square half the height and crop from center
            $new_height = (int) $img->height / 2;
            
            $img->crop($new_height, $new_height)
                ->save($directory.$filename);
                
            // Delete the temporary file
            unlink($file);

            $user_result = $user->save_dp($user_id, $filename);
            
            return $filename;
        }
        
        return FALSE;
    }
    
        
} // End of class