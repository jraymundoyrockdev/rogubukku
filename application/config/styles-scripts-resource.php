<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * MODULES AND GLOBALS RESOURCE SETUP
 */

return array
(
    'resource' => [

        //GLOBAL
        'global-styles' => [
            '//media/css/lib/bootstrap/bootstrap.css',
            '//media/css/lib/fonts/css/font-awesome.min.css',
            '//media/css/main/main_style.css',
            '//media/css/lib/shieldui/shieldui-all.min.css',
            '//media/css/lib/shieldui/all.min.css',
            '//media/css/lib/bootstrap/bootstrap_validator/formValidation.css',
            '//media/css/hackmain.css'
        ],
        'global-scripts' => [
            '//media/js/lib/jquery/jquery-2.1.4.js',
            '//media/js/lib/bootstrap/bootstrap.js',
            '//media/js/lib/bootstrap/bootstrap_validator/dist/formValidation.js',
            '//media/js/lib/bootstrap/bootstrap_validator/dist/bootstrap.js'
        ],

        //MODULE-LOGIN
        'login-styles' => [
            '//media/css/modules/login/login.css',
        ],
        'login-scripts' => [
            '//media/js/modules/login/login.js',
            '//media/js/validation/login/login.js'
        ],
        //MODULE-PROFILE
        'profile-scripts' => [
            '//media/js/modules/user/profile.js',
            '//media/js/validation/user/profile.js',
            '//media/js/lib/bootbox/bootbox.min.js',
            '//media/js/lib/jquery/jquery.form.js',
            
        ],
        //MODULE-CHANGE-PASSWORD
        'change-password-scripts' => [
            '//media/js/modules/user/change_password.js',
            '//media/js/validation/user/change_password.js'
        ],
        //MODULE-MINISTRY
        'admin-ministry-scripts' => [
            '//media/js/validation/admin/ministry.js'
        ],
        //MODULE-USERS-MANAGEMENT
        'admin-users-management-styles' => [
            '//media/css/lib/bootstrap/bootstrap-switch.css',
        ],
        'admin-users-management-scripts' => [
            '//media/js/lib/bootstrap/bootstrap-switch.js',
            '//media/js/modules/admin/users.js'
        ],
        //MODULE-TRANSACTIONS
        'transactions-styles' => [
            '//media/css/lib/bootstrap/datepicker/bootstrap-datetimepicker.css',
        ],
        'transactions-scripts' => [
            '//media/js/modules/transactions/transactions.js',
            '//media/js/lib/datepicker/moment.js',
            '//media/js/lib/datepicker/bootstrap-datetimepicker.js',
            '//media/js/lib/jquery/formatDateTime.js',
            '//media/js/validation/transactions/transactions.js'
        ]
    ]
);