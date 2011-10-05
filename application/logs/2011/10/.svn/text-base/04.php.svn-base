<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-04 04:27:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `comment`.* FROM `comments` AS `comment` WHERE 0 = 'userid' AND `1` = '15' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-04 04:27:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `comment`.* FROM `comments` AS `comment` WHERE 0 = 'userid' AND `1` = '15' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `comment...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(258): Kohana_ORM->find()
#4 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(Array)
#5 D:\Apache\localhost\www\application\classes\model\comment.php(27): Kohana_ORM::factory('comment', Array)
#6 D:\Apache\localhost\www\application\classes\controller\comments.php(32): Model_Comment->getCommentsByUserid('15')
#7 [internal function]: Controller_Comments->action_showcomments()
#8 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#9 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#12 {main}
2011-10-04 04:31:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\model\comment.php [ 28 ]
2011-10-04 04:31:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH\classes\model\comment.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 04:33:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: userid ~ APPPATH\views\commentsview.php [ 2 ]
2011-10-04 04:33:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: userid ~ APPPATH\views\commentsview.php [ 2 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 2, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 04:34:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: materials ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 04:34:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: materials ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 04:37:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: materials ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 04:37:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: materials ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 04:39:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ']', expecting ',' or ';' ~ APPPATH\views\commentsview.php [ 6 ]
2011-10-04 04:39:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ']', expecting ',' or ';' ~ APPPATH\views\commentsview.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 04:40:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\comment.php [ 37 ]
2011-10-04 04:40:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\model\comment.php [ 37 ]
--
#0 D:\Apache\localhost\www\application\classes\model\comment.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 37, Array)
#1 D:\Apache\localhost\www\application\classes\controller\comments.php(32): Model_Comment->getCommentsByUserid('14')
#2 [internal function]: Controller_Comments->action_showcomments()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-04 04:41:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialid ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 04:41:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialid ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 04:42:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\model\comment.php [ 32 ]
2011-10-04 04:42:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\model\comment.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-04 04:43:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialid ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 04:43:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialid ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 05:27:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialid ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 05:27:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialid ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 05:28:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 05:28:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 05:29:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 05:29:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 05:32:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 05:32:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 05:32:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 05:32:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 05:34:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 05:34:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 07:30:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 07:30:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 07:30:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 07:30:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 07:30:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 07:30:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 07:30:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 07:30:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 07:30:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 07:30:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 16:37:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 16:37:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 16:39:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 16:39:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 16:45:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 16:45:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 16:48:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 16:48:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 16:48:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 16:48:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 17:01:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 5 ]
2011-10-04 17:01:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: materialname ~ APPPATH\views\commentsview.php [ 5 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 5, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 17:01:45 --- ERROR: ErrorException [ 8 ]: Undefined index: ok ~ APPPATH\views\commentsview.php [ 4 ]
2011-10-04 17:01:45 --- STRACE: ErrorException [ 8 ]: Undefined index: ok ~ APPPATH\views\commentsview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\commentsview.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 17:14:08 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\controller\comments.php [ 47 ]
2011-10-04 17:14:08 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\controller\comments.php [ 47 ]
--
#0 D:\Apache\localhost\www\application\classes\controller\comments.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 47, Array)
#1 [internal function]: Controller_Comments->action_showcomments()
#2 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#3 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-04 17:28:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\contentview.php [ 4 ]
2011-10-04 17:28:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\contentview.php [ 4 ]
--
#0 D:\Apache\localhost\www\application\views\contentview.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 4, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Comments))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-04 17:33:10 --- ERROR: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'HAHA') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-04 17:33:10 --- STRACE: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'HAHA') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(70): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\comments.php(71): Model_Comment->saveNewComment(Object(Model_User), 'HAHA', NULL)
#5 [internal function]: Controller_Comments->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-04 17:34:51 --- ERROR: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Ну так это же пушенция') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-04 17:34:51 --- STRACE: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Ну так это же пушенция') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(70): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\comments.php(71): Model_Comment->saveNewComment(Object(Model_User), '???? ?????? ???...', NULL)
#5 [internal function]: Controller_Comments->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}