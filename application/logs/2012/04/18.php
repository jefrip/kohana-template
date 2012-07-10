<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-18 02:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-18 02:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\cek.jef\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\cek.jef\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\cek.jef\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-18 02:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-04-18 02:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\www\cek.jef\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\www\cek.jef\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\www\cek.jef\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-18 02:23:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-04-18 02:23:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\www\cek.jef\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}