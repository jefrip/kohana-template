<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-09 04:15:58 --- ERROR: View_Exception [ 0 ]: The requested view template/dashboard could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-09 04:15:58 --- STRACE: View_Exception [ 0 ]: The requested view template/dashboard could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\kohana-3.2\system\classes\kohana\view.php(137): Kohana_View->set_filename('template/dashbo...')
#1 D:\www\kohana-3.2\system\classes\kohana\view.php(30): Kohana_View->__construct('template/dashbo...', NULL)
#2 D:\www\kohana-3.2\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template/dashbo...')
#3 D:\www\cek.jef\www\kohana\application\classes\controller\template\layout.php(14): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Template_Layout->before()
#5 D:\www\kohana-3.2\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 D:\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\www\cek.jef\www\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-09 04:16:24 --- ERROR: View_Exception [ 0 ]: The requested view page/home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-09 04:16:24 --- STRACE: View_Exception [ 0 ]: The requested view page/home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\www\kohana-3.2\system\classes\kohana\view.php(137): Kohana_View->set_filename('page/home')
#1 D:\www\kohana-3.2\system\classes\kohana\view.php(30): Kohana_View->__construct('page/home', NULL)
#2 D:\www\cek.jef\www\kohana\application\classes\controller\welcome.php(9): Kohana_View::factory('page/home')
#3 [internal function]: Controller_Welcome->action_index()
#4 D:\www\kohana-3.2\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 D:\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\www\cek.jef\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-09 04:50:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 04:50:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\cek.jef\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-09 04:51:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-09 04:51:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\kohana-3.2\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\kohana-3.2\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\cek.jef\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}