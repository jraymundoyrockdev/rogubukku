<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-13 01:55:54 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php:67
2015-04-13 01:55:54 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('laravel_session', NULL)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('laravel_session')
#2 /home/vagrant/Code/rogubukku/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php:67
2015-04-13 01:56:32 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php:67
2015-04-13 01:56:32 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('laravel_session', NULL)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('laravel_session')
#2 /home/vagrant/Code/rogubukku/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php:67
2015-04-13 01:59:45 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php:67
2015-04-13 01:59:45 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('laravel_session', NULL)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('laravel_session')
#2 /home/vagrant/Code/rogubukku/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php:67
2015-04-13 02:01:29 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php:67
2015-04-13 02:01:29 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('laravel_session', NULL)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('laravel_session')
#2 /home/vagrant/Code/rogubukku/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php:67
2015-04-13 02:02:43 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php:67
2015-04-13 02:02:43 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('laravel_session', NULL)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('laravel_session')
#2 /home/vagrant/Code/rogubukku/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/Cookie.php:67
2015-04-13 02:11:02 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Hello.php [ 10 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Hello.php:10
2015-04-13 02:11:02 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Hello.php(10): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/vagrant/C...', 10, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Hello->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hello))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Hello.php:10
2015-04-13 02:11:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 02:11:34 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(145): Kohana_View->set_filename('site')
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(30): Kohana_View->__construct('site', NULL)
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('site')
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hello))
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#9 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 02:59:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Base' not found ~ APPPATH/classes/Controller/Hello.php [ 4 ] in file:line
2015-04-13 02:59:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 03:17:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/classes/Controller/Login.php [ 9 ] in file:line
2015-04-13 03:17:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 03:20:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/site.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:20:28 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:20:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/site.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:20:39 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:20:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/site.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:20:39 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:20:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/site.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:20:40 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:20:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/site.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:20:42 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:21:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/site.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:21:49 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:21:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/site.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:21:52 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:21:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/site.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:21:54 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:21:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/site.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:21:55 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:22:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/site.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:22:59 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:23:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/site.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:23:01 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:31:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/site.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 03:31:55 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:11
2015-04-13 04:00:14 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant PATH - assumed 'PATH' ~ APPPATH/classes/Controller/Login.php [ 7 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:7
2015-04-13 04:00:14 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/vagrant/C...', 7, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:7
2015-04-13 04:03:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/classes/Controller/Login.php [ 8 ] in file:line
2015-04-13 04:03:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:06:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view _templates/main could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:06:05 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(145): Kohana_View->set_filename('_templates/main')
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(30): Kohana_View->__construct('_templates/main', NULL)
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('_templates/main')
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#9 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:06:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view _templates/main could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:06:06 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(145): Kohana_View->set_filename('_templates/main')
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(30): Kohana_View->__construct('_templates/main', NULL)
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('_templates/main')
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#9 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:06:07 --- EMERGENCY: View_Exception [ 0 ]: The requested view _templates/main could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:06:07 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(145): Kohana_View->set_filename('_templates/main')
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(30): Kohana_View->__construct('_templates/main', NULL)
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('_templates/main')
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#9 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:06:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view _templates/main could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:06:11 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(145): Kohana_View->set_filename('_templates/main')
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(30): Kohana_View->__construct('_templates/main', NULL)
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('_templates/main')
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#9 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:06:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view _templates/main could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:06:32 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(145): Kohana_View->set_filename('_templates/main')
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(30): Kohana_View->__construct('_templates/main', NULL)
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('_templates/main')
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#9 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:21:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '`', expecting function (T_FUNCTION) ~ SYSPATH/classes/Kohana/HTML.php [ 206 ] in file:line
2015-04-13 04:21:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:28:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Base.php [ 5 ] in file:line
2015-04-13 04:28:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:28:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Base.php [ 5 ] in file:line
2015-04-13 04:28:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:32:13 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/templates/main.php [ 11 ] in file:line
2015-04-13 04:32:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:32:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH/views/templates/main.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/templates/main.php:11
2015-04-13 04:32:25 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/templates/main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/templates/main.php:11
2015-04-13 04:32:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH/views/templates/main.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/templates/main.php:11
2015-04-13 04:32:35 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/templates/main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/templates/main.php:11
2015-04-13 04:33:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Base.php [ 11 ] in file:line
2015-04-13 04:33:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:34:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Base.php [ 11 ] in file:line
2015-04-13 04:34:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:35:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Base.php [ 12 ] in file:line
2015-04-13 04:35:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:35:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Base.php [ 12 ] in file:line
2015-04-13 04:35:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:36:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Base.php [ 10 ] in file:line
2015-04-13 04:36:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:36:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Base.php [ 12 ] in file:line
2015-04-13 04:36:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:36:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view layouts/empty could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:36:45 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(145): Kohana_View->set_filename('layouts/empty')
#1 /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php(31): Kohana_View->__construct('layouts/empty')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#8 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:37:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: javascripts ~ APPPATH/views/templates/main.php [ 11 ] in /home/vagrant/Code/rogubukku/application/views/templates/main.php:11
2015-04-13 04:37:09 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/templates/main.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/templates/main.php:11
2015-04-13 04:37:17 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Base.php [ 13 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php:13
2015-04-13 04:37:17 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php(13): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/vagrant/C...', 13, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php:13
2015-04-13 04:37:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view layouts/empty could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:37:22 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(145): Kohana_View->set_filename('layouts/empty')
#1 /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php(31): Kohana_View->__construct('layouts/empty')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#8 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 04:38:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Login.php [ 8 ] in file:line
2015-04-13 04:38:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:40:20 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Base.php [ 13 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php:13
2015-04-13 04:40:20 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php(13): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/vagrant/C...', 13, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php:13
2015-04-13 04:40:21 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Base.php [ 13 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php:13
2015-04-13 04:40:21 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php(13): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/vagrant/C...', 13, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php:13
2015-04-13 04:40:27 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Base.php [ 13 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php:13
2015-04-13 04:40:27 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php(13): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/vagrant/C...', 13, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Base.php:13
2015-04-13 04:47:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/templates/main.php [ 3 ] in /home/vagrant/Code/rogubukku/application/views/templates/main.php:3
2015-04-13 04:47:58 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/templates/main.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 3, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/templates/main.php:3
2015-04-13 04:48:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/templates/main.php [ 3 ] in /home/vagrant/Code/rogubukku/application/views/templates/main.php:3
2015-04-13 04:48:19 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/templates/main.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 3, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/templates/main.php:3
2015-04-13 04:51:19 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'href' ~ APPPATH/views/templates/main.php [ 7 ] in /home/vagrant/Code/rogubukku/application/views/templates/main.php:7
2015-04-13 04:51:19 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/templates/main.php(7): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/vagrant/C...', 7, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/templates/main.php:7
2015-04-13 04:53:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/templates/main.php [ 6 ] in file:line
2015-04-13 04:53:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:53:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/templates/main.php [ 6 ] in file:line
2015-04-13 04:53:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:53:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/templates/main.php [ 6 ] in file:line
2015-04-13 04:53:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:53:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/templates/main.php [ 6 ] in file:line
2015-04-13 04:53:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:53:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/templates/main.php [ 6 ] in file:line
2015-04-13 04:53:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 04:54:12 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'href' ~ APPPATH/views/templates/main.php [ 7 ] in /home/vagrant/Code/rogubukku/application/views/templates/main.php:7
2015-04-13 04:54:12 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/templates/main.php(7): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/vagrant/C...', 7, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/templates/main.php:7
2015-04-13 04:56:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: media/css/bootstrap/bootstrap.css ~ APPPATH/views/templates/main.php [ 7 ] in /home/vagrant/Code/rogubukku/application/views/templates/main.php:7
2015-04-13 04:56:11 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/templates/main.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 7, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/templates/main.php:7
2015-04-13 04:56:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: screen, projection ~ APPPATH/views/templates/main.php [ 7 ] in /home/vagrant/Code/rogubukku/application/views/templates/main.php:7
2015-04-13 04:56:22 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/templates/main.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 7, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/templates/main.php:7
2015-04-13 05:09:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 05:09:32 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Media))
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#9 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 05:09:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 05:09:32 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Media))
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#9 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 05:09:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 05:09:52 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(145): Kohana_View->set_filename('template')
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Media))
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#9 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 05:28:12 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Login.php [ 8 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:8
2015-04-13 05:28:12 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(8): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/vagrant/C...', 8, Array)
#1 [internal function]: Controller_Login->__construct(Object(Request), Object(Response))
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#5 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#6 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:8
2015-04-13 05:28:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2015-04-13 05:28:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 05:31:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2015-04-13 05:31:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 05:32:22 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2015-04-13 05:32:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 05:34:22 --- EMERGENCY: ErrorException [ 2 ]: Attempt to modify property of non-object ~ APPPATH/classes/Controller/Login.php [ 14 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:14
2015-04-13 05:34:22 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(14): Kohana_Core::error_handler(2, 'Attempt to modi...', '/home/vagrant/C...', 14, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:14
2015-04-13 05:34:26 --- EMERGENCY: ErrorException [ 2 ]: Attempt to modify property of non-object ~ APPPATH/classes/Controller/Login.php [ 14 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:14
2015-04-13 05:34:26 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(14): Kohana_Core::error_handler(2, 'Attempt to modi...', '/home/vagrant/C...', 14, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:14
2015-04-13 05:34:34 --- EMERGENCY: ErrorException [ 2 ]: Attempt to modify property of non-object ~ APPPATH/classes/Controller/Login.php [ 14 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:14
2015-04-13 05:34:34 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(14): Kohana_Core::error_handler(2, 'Attempt to modi...', '/home/vagrant/C...', 14, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:14
2015-04-13 05:34:45 --- EMERGENCY: ErrorException [ 2 ]: Attempt to modify property of non-object ~ APPPATH/classes/Controller/Login.php [ 14 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:14
2015-04-13 05:34:45 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(14): Kohana_Core::error_handler(2, 'Attempt to modi...', '/home/vagrant/C...', 14, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:14
2015-04-13 05:34:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/Kohana/Controller/Template.php [ 44 ] in file:line
2015-04-13 05:34:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 05:38:01 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: scripts ~ SYSPATH/classes/Kohana/View.php [ 179 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:14
2015-04-13 05:38:01 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(14): Kohana_View->__get('scripts')
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:14
2015-04-13 05:39:13 --- EMERGENCY: ErrorException [ 2 ]: strpos() expects parameter 1 to be string, array given ~ SYSPATH/classes/Kohana/HTML.php [ 245 ] in file:line
2015-04-13 05:39:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strpos() expect...', '/home/vagrant/C...', 245, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/HTML.php(245): strpos(Array, '://')
#2 /home/vagrant/Code/rogubukku/application/views/templates/main.php(11): Kohana_HTML::script(Array, NULL, 'RMV/')
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2015-04-13 05:42:24 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Login.php [ 9 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:9
2015-04-13 05:42:24 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(9): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/vagrant/C...', 9, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Controller_Login->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:9
2015-04-13 05:43:40 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 05:43:40 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(145): Kohana_View->set_filename('login')
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(16): Kohana_View::factory('login')
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#9 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 05:43:43 --- EMERGENCY: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 05:43:43 --- DEBUG: #0 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(145): Kohana_View->set_filename('login')
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(30): Kohana_View->__construct('login', NULL)
#2 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(16): Kohana_View::factory('login')
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#9 {main} in /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php:145
2015-04-13 05:44:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH/classes/Controller/Login.php [ 19 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:19
2015-04-13 05:44:51 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 19, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:19
2015-04-13 05:46:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: style ~ APPPATH/views/site.php [ 4 ] in /home/vagrant/Code/rogubukku/application/views/site.php:4
2015-04-13 05:46:23 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 4, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(19): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:4
2015-04-13 05:46:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: style ~ APPPATH/views/site.php [ 4 ] in /home/vagrant/Code/rogubukku/application/views/site.php:4
2015-04-13 05:46:38 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 4, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(19): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:4
2015-04-13 05:46:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: style ~ APPPATH/views/site.php [ 4 ] in /home/vagrant/Code/rogubukku/application/views/site.php:4
2015-04-13 05:46:38 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 4, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(19): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:4
2015-04-13 05:46:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: style ~ APPPATH/views/site.php [ 4 ] in /home/vagrant/Code/rogubukku/application/views/site.php:4
2015-04-13 05:46:42 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 4, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(19): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:4
2015-04-13 05:46:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: style ~ APPPATH/views/site.php [ 4 ] in /home/vagrant/Code/rogubukku/application/views/site.php:4
2015-04-13 05:46:49 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 4, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(19): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:4
2015-04-13 05:47:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: style ~ APPPATH/views/site.php [ 4 ] in /home/vagrant/Code/rogubukku/application/views/site.php:4
2015-04-13 05:47:12 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/site.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 4, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(14): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/site.php:4
2015-04-13 05:47:31 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Login.php [ 11 ] in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:11
2015-04-13 05:47:31 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php(11): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/vagrant/C...', 11, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(69): Controller_Login->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#7 {main} in /home/vagrant/Code/rogubukku/application/classes/Controller/Login.php:11
2015-04-13 05:49:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Base' not found ~ APPPATH/classes/Controller/Login.php [ 4 ] in file:line
2015-04-13 05:49:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 05:52:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: layout ~ APPPATH/views/templates/main.php [ 15 ] in /home/vagrant/Code/rogubukku/application/views/templates/main.php:15
2015-04-13 05:52:04 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/templates/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 15, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/templates/main.php:15
2015-04-13 05:52:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: layout ~ APPPATH/views/templates/main.php [ 15 ] in /home/vagrant/Code/rogubukku/application/views/templates/main.php:15
2015-04-13 05:52:13 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/templates/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 15, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/templates/main.php:15
2015-04-13 05:53:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'factory' (T_STRING), expecting variable (T_VARIABLE) or '$' ~ APPPATH/classes/Controller/Login.php [ 20 ] in file:line
2015-04-13 05:53:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-13 06:07:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: layout ~ APPPATH/views/templates/main.php [ 15 ] in /home/vagrant/Code/rogubukku/application/views/templates/main.php:15
2015-04-13 06:07:54 --- DEBUG: #0 /home/vagrant/Code/rogubukku/application/views/templates/main.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/vagrant/C...', 15, Array)
#1 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(62): include('/home/vagrant/C...')
#2 /home/vagrant/Code/rogubukku/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/vagrant/C...', Array)
#3 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/vagrant/Code/rogubukku/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/vagrant/Code/rogubukku/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/vagrant/Code/rogubukku/index.php(118): Kohana_Request->execute()
#10 {main} in /home/vagrant/Code/rogubukku/application/views/templates/main.php:15