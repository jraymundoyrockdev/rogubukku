<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Profile extends Controller_Base
{

    public function before()
    {
        $this->_is_logged_in();

        parent::before();

        $this->template->resourceModule = 'profile';
    }

    public function action_index()
    {
        $user = ORM::factory('Users', Auth::instance()->get_user()->id);
        $ministries = ORM::factory('Ministry')->find_all()->as_array('ministry_id', 'ministry');

        if (HTTP_Request::POST == $this->request->method()) {
            $post = $this->request->post();
        }

        $this->template->body = View::factory('user/profile')
            ->bind('user', $user)
            ->bind('ministries', $ministries)
            ->bind('avatarDirectory', $this->avatarDirectory);
    }

    public function action_save()
    {
        if (HTTP_Request::POST == $this->request->method()) {

            $user_id = Auth::instance()->get_user()->id;
            $post = $this->request->post();
            $result = ['isSuccess' => false, 'updatedUser' => '', 'errorFields' => []];

            try {
                $user = new Model_Users;
                $result['isSuccess'] = $user->save_profile($user_id, $post) ? true : false;
                $result['updatedUser'] = $post['full_name'];

            } catch (ORM_Validation_Exception $e) {
                $result['errorFields'] = $e->errors('models');
            } catch (Exception $error) {
                $result['errorFields'] = $error->getMessage();
            }

            $this->responseAjaxResult($result);
        }
    }

    public function action_avatar()
    {
        $user_id = Auth::instance()->get_user()->id;

        $post = $this->request->post();

        $result = ['isSuccess' => false, 'updatedUser' => '', 'errorFields' => []];

        $filename = null;

        try {
            if ($this->request->method() == Request::POST) {
                if (isset($_FILES['avatar'])) {
                    $filename = $this->_save_image($_FILES['avatar']);
                    $result['isSuccess'] = true;
                    $result['filename'] = $filename;
                    $result['src'] = $this->avatarDirectory['relative'] . $user_id . '/' . $filename;
                }
            }

            if (!$filename) {
                throw new Exception('There was a problem while uploading the image.
                    Make sure it is uploaded and must be JPG/PNG/GIF file.');
            }

        } catch (ORM_Validation_Exception $e) {
            $result['errorFields'] = $e->errors('models');
        } catch (Exception $error) {
            $result['errorFields'] = $error->getMessage();
        }

        $this->responseAjaxResult($result);
    }

    protected function _save_image($image)
    {
        $user_id = Auth::instance()->get_user()->id;

        if (
            !Upload::valid($image) OR
            !Upload::not_empty($image) OR
            !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))
        ) {
            throw new Exception('Error. Unknown Format');
        }
        $directory = $this->avatarDirectory['absolute'] . $user_id . '/';

        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        if ($file = Upload::save($image, null, $directory)) {
            $filename = strtolower(Text::random('alnum', 20)) . '.jpg';

            $img = Image::factory($file);

            // Crop the image square half the height and crop from center
            $height = (int)$img->height;
            $width = (int)$img->width;

            if ($height > $width) {
                $size = $width;
            } elseif ($height < $width) {
                $size = $height;
            } elseif ($height = $width) {
                $size = $width;
            }

            $new_height = (int)$img->height / 2;
            $plus_height = (int)$new_height / 2;
            $new_height = (int)$new_height + $plus_height;

            $img->crop($size, $size)
                ->save($directory . $filename);

            unlink($file);

            $user = new Model_Users;
            $user->save_dp($user_id, $filename);

            return $filename;
        }

        return false;
    }


} // End of class