<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Ministry extends Controller_Base
{
    public function before()
    {
        parent::before();

        $this->template->resourceModule = 'admin-ministry';
    }

    public function action_index()
    {
        $ministries = ORM::factory('Ministry')->find_all();
        $this->template->body = View::factory('admin/ministry')->bind('ministries', $ministries);
    }

    public function action_save()
    {
        if (HTTP_Request::POST == $this->request->method()) {

            $post = $this->request->post();

            $result = ['isSuccess' => false, 'errorFields' => []];

            try {
                $ministry = new Model_Ministry;
                $ministry->create_ministry($post['ministry']);
                $result['isSuccess'] = true;
                $result['updatedMinistry'] = $post['ministry'];

            } catch (ORM_Validation_Exception $e) {
                $result['errorFields'] = $e->errors('models');
            } catch (Exception $error) {
                $result['errorFields'] = $error->getMessage();
            }

            $this->responseAjaxResult($result);
        }

    }

} // End of class