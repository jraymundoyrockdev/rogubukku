<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
    'avatar' => [
        'absolute' => DOCROOT . 'uploads' . DIRECTORY_SEPARATOR . 'avatar' . DIRECTORY_SEPARATOR,
        'relative' => URL::base() . 'uploads' . '/' . 'avatar' . '/'
    ],
);