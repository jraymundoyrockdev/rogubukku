<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * MODULES AND GLOBALS RESOURCE SETUP
 */

return array
(
    'resource' => [

        //GLOBAL
        'global-styles' => [
            '//media/css/bootstrap/bootstrap.min.css',
            '//media/css/fonts/css/font-awesome.min.css',
            '//media/css/main/main_style.css',
            '//media/css/shieldui/shieldui-all.min.css',
            '//media/css/shieldui/all.min.css',
            '//media/css/hackmain.css'
        ],
        'global-scripts' => [
            '//media/js/jquery/jquery-1.10.2.min.js',
            '//media/js/bootstrap/bootstrap.js',
            '//media/js/bootstrap_validator/dist/formValidation.js',
            '//media/js/bootstrap_validator/dist/bootstrap.js'
        ],

        //MODULE-LOGIN
        'login-styles' => [
            '//media/css/login/login.css',
            '//media/css/bootstrap_validator/formValidation.css'
        ],
        'login-scripts' => [
            '//media/js/bootstrap_validator/dist/formValidation.js',
            '//media/js/bootstrap_validator/dist/bootstrap.js',
            '//media/js/login/login.js',
            '//media/js/validation/login/login.js'
        ],
        //MODULE-PROFILE
        'profile-scripts' => [
            '//media/js/validation/user/profile.js',
            '//media/js/bootbox/bootbox.min.js',
            '//media/js/jquery/jquery.form.js'
        ],
        //MODULE-CHANGE-PASSWORD
        'change-password-scripts' => [
            '//media/js/validation/user/change_password.js'
        ],
        //MODULE-MINISTRY
        'admin-ministry-scripts' => [
            '//media/js/validation/admin/ministry.js'
        ],
        //MODULE-USERS-MANAGEMENT
        'admin-users-management-styles' => [
            '//media/css/bootstrap/bootstrap-switch.css',
        ],
        'admin-users-management-scripts' => [
            '//media/js/bootstrap/bootstrap-switch.js',
            '//media/js/admin/users.js'
        ],
    ]
);