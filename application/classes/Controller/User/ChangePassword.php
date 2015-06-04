<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_ChangePassword extends Controller_Base
{

    protected $_users;

    public function before()
    {
        $this->_is_logged_in();

        parent::before();
        $this->_users =  ORM::factory('Users');
        $this->template->resourceModule = 'change-password';
    }

    public function action_index()
    {
        $this->template->body = View::factory('user/change_password');
    }

    //@todo in the future this must be handled backend like an endpoint api
    public function action_save()
    {
        if (HTTP_Request::POST == $this->request->method()) {

            $result = [
                'isSuccess' => false,
                'errorFields' => [],
                'objectModel' => []
            ];

            $post = $this->request->post();

            if($this->_validatePasswords($post)){
                $post = array_merge(['id'=>Auth::instance()->get_user()->id],$post);
                $post['password'] = Auth::instance()->hash($post['new_password']);

                $result = $this->_users->roguSave($post);
            }

            $this->responseAjaxResult($result);
        }
    }

    private function _validatePasswords($post){

        if(! $this->_validateOldPassword($post)){
            return false;
        }

        if(! $this->_validateNewPassword($post)){
            return false;
        }

        return true;
    }

    private function _validateOldPassword($post){

        $oldPassword = Auth::instance()->hash($post['old_password']);

        if($oldPassword  ==  Auth::instance()->get_user()->password){
            return true;
        }

        return false;
    }

    private function _validateNewPassword($post){
        if($post['new_password']==$post['confirm_new_password']){
            return true;
        }
        return false;
    }
} // End of class