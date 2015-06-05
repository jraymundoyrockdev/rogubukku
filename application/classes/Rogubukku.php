<?php defined('SYSPATH') OR die('No direct access allowed.');

class Rogubukku
{

    public static function mergeCurrentlyLoggedInUser(Array $arrayToMerge)
    {
        return array_merge(['id' => Auth::instance()->get_user()->id], $arrayToMerge);
    }


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
}