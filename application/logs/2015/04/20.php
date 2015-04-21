<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-20 22:39:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''px'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\views\welcome.php [ 15 ] in file:line
2015-04-20 22:39:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-20 22:39:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''px'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\views\welcome.php [ 15 ] in file:line
2015-04-20 22:39:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-20 23:02:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: glob_scripts ~ APPPATH\views\templates\main.php [ 18 ] in C:\xampp\htdocs\gfccm\rogubukku\application\views\templates\main.php:18
2015-04-20 23:02:35 --- DEBUG: #0 C:\xampp\htdocs\gfccm\rogubukku\application\views\templates\main.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 18, Array)
#1 C:\xampp\htdocs\gfccm\rogubukku\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\gfccm\rogubukku\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\gfccm\rogubukku\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\gfccm\rogubukku\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\gfccm\rogubukku\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\gfccm\rogubukku\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\gfccm\rogubukku\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\gfccm\rogubukku\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\gfccm\rogubukku\application\views\templates\main.php:18