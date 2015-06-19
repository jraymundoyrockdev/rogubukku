<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Rogubukku Helper Class
 *
 * Methods to be used only for Rogubukku application
 */
class Rogubukku
{

    /**
     * Merge the passed array(post data) payload to the the currently logged in user
     *
     * @param $arrayToMerge array
     * @param $optionalKey string default 'id' to be merge can be of different field name
     * @return array The merged currently logged in user to post array payload
     */
    public static function mergeCurrentlyLoggedInUser($arrayToMerge, $optionalKey = 'id')
    {
        return array_merge([$optionalKey => Auth::instance()->get_user()->id], $arrayToMerge);
    }


    /**
     * Merge the passed array(post data) payload to the the currently logged in user
     *
     * @param $image array S_FILES data from the page containing information from the file uploaded
     * @param $directory string Directory to save the Image
     *
     * @return array list (bool, string)
     */
    public static function saveImage($image, $directory)
    {
        $result = false;
        $errorMessageOrFilename = 'There was a problem while uploading the image.Make sure it is uploaded and must be JPG/PNG/GIF file.';

        if (
            !Upload::valid($image) OR
            !Upload::not_empty($image) OR
            !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))
        ) {
            return array($result, 'Error. Unknown Format');
        }

        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        if ($file = Upload::save($image, null, $directory)) {
            $filename = strtolower(Text::random('alnum', 20)) . '.jpg';

            $img = Image::factory($file);

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

            $result = true;
            $errorMessageOrFilename = $filename;
        }

        return array($result, $errorMessageOrFilename);
    }

    /**
     * Call the Api
     *
     * @$name string API name
     *
     * @return object api
     */
    public static function API($name)
    {
        $api = 'Api_' . $name;

        return new $api();
    }
}