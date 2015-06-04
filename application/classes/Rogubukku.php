<?php defined('SYSPATH') OR die('No direct access allowed.');

class Rogubukku
{

    public static function mergeCurrentlyLoggedInUser(Array $arrayToMerge){
        return array_merge(['id' => Auth::instance()->get_user()->id],$arrayToMerge);
    }
}