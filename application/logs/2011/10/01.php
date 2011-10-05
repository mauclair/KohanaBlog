<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-01 03:35:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_name ~ APPPATH\views\materialsview.php [ 1 ]
2011-10-01 03:35:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_name ~ APPPATH\views\materialsview.php [ 1 ]
--
#0 D:\Apache\localhost\www\application\views\materialsview.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 1, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(17): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Materials))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-01 07:10:55 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-01 07:10:55 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 D:\Apache\localhost\www\application\classes\model\myuser.php(113): Kohana_ORM->save()
#3 D:\Apache\localhost\www\application\classes\controller\account.php(33): Model_Myuser->saveNewName('adminchik')
#4 [internal function]: Controller_Account->action_index()
#5 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#6 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-01 07:13:43 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-01 07:13:43 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 D:\Apache\localhost\www\application\classes\model\myuser.php(113): Kohana_ORM->save()
#3 D:\Apache\localhost\www\application\classes\controller\account.php(33): Model_Myuser->saveNewName('shit')
#4 [internal function]: Controller_Account->action_index()
#5 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#6 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-01 07:19:41 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be an array, string given, called in D:\Apache\localhost\www\application\classes\model\myuser.php on line 98 and defined ~ SYSPATH\classes\kohana\validation.php [ 19 ]
2011-10-01 07:19:41 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be an array, string given, called in D:\Apache\localhost\www\application\classes\model\myuser.php on line 98 and defined ~ SYSPATH\classes\kohana\validation.php [ 19 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\validation.php(19): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\Apache\local...', 19, Array)
#1 D:\Apache\localhost\www\application\classes\model\myuser.php(98): Kohana_Validation::factory('shit')
#2 D:\Apache\localhost\www\application\classes\controller\account.php(33): Model_Myuser->saveNewName('shit')
#3 [internal function]: Controller_Account->action_index()
#4 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#5 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-01 07:44:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_TRY ~ APPPATH\classes\controller\account.php [ 44 ]
2011-10-01 07:44:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_TRY ~ APPPATH\classes\controller\account.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-01 07:45:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\basic.php [ 17 ]
2011-10-01 07:45:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\basic.php [ 17 ]
--
#0 D:\Apache\localhost\www\application\views\basic.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 17, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Account))
#6 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-01 07:46:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\basic.php [ 17 ]
2011-10-01 07:46:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\basic.php [ 17 ]
--
#0 D:\Apache\localhost\www\application\views\basic.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 17, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Account))
#6 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-01 07:50:30 --- ERROR: Database_Exception [ 1364 ]: Field 'email' doesn't have a default value [ INSERT INTO `users` (`username`) VALUES ('shit@shit.com') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-01 07:50:30 --- STRACE: Database_Exception [ 1364 ]: Field 'email' doesn't have a default value [ INSERT INTO `users` (`username`) VALUES ('shit@shit.com') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\myuser.php(133): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\account.php(33): Model_Myuser->saveNewName('shit@shit.com')
#5 [internal function]: Controller_Account->action_index()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-01 07:51:45 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be an array, string given, called in D:\Apache\localhost\www\application\classes\model\myuser.php on line 98 and defined ~ SYSPATH\classes\kohana\validation.php [ 19 ]
2011-10-01 07:51:45 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be an array, string given, called in D:\Apache\localhost\www\application\classes\model\myuser.php on line 98 and defined ~ SYSPATH\classes\kohana\validation.php [ 19 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\validation.php(19): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\Apache\local...', 19, Array)
#1 D:\Apache\localhost\www\application\classes\model\myuser.php(98): Kohana_Validation::factory('shit')
#2 D:\Apache\localhost\www\application\classes\controller\account.php(33): Model_Myuser->saveNewName('shit')
#3 [internal function]: Controller_Account->action_index()
#4 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#5 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-01 07:53:22 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be an array, string given, called in D:\Apache\localhost\www\application\classes\model\myuser.php on line 98 and defined ~ SYSPATH\classes\kohana\validation.php [ 19 ]
2011-10-01 07:53:22 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be an array, string given, called in D:\Apache\localhost\www\application\classes\model\myuser.php on line 98 and defined ~ SYSPATH\classes\kohana\validation.php [ 19 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\validation.php(19): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\Apache\local...', 19, Array)
#1 D:\Apache\localhost\www\application\classes\model\myuser.php(98): Kohana_Validation::factory('kala')
#2 D:\Apache\localhost\www\application\classes\controller\account.php(33): Model_Myuser->saveNewName('kala')
#3 [internal function]: Controller_Account->action_index()
#4 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#5 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-01 07:54:11 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be an array, string given, called in D:\Apache\localhost\www\application\classes\model\myuser.php on line 98 and defined ~ SYSPATH\classes\kohana\validation.php [ 19 ]
2011-10-01 07:54:11 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be an array, string given, called in D:\Apache\localhost\www\application\classes\model\myuser.php on line 98 and defined ~ SYSPATH\classes\kohana\validation.php [ 19 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\validation.php(19): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\Apache\local...', 19, Array)
#1 D:\Apache\localhost\www\application\classes\model\myuser.php(98): Kohana_Validation::factory('suck')
#2 D:\Apache\localhost\www\application\classes\controller\account.php(33): Model_Myuser->saveNewName('suck')
#3 [internal function]: Controller_Account->action_index()
#4 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#5 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-01 07:54:36 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-01 07:54:36 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 D:\Apache\localhost\www\application\classes\model\myuser.php(113): Kohana_ORM->save()
#3 D:\Apache\localhost\www\application\classes\controller\account.php(33): Model_Myuser->saveNewName('suck')
#4 [internal function]: Controller_Account->action_index()
#5 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#6 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-01 07:57:00 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2011-10-01 07:57:00 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 D:\Apache\localhost\www\application\classes\model\myuser.php(113): Kohana_ORM->save()
#3 D:\Apache\localhost\www\application\classes\controller\account.php(33): Model_Myuser->saveNewName('shit')
#4 [internal function]: Controller_Account->action_index()
#5 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#6 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-01 08:36:55 --- ERROR: Database_Exception [ 1364 ]: Field 'email' doesn't have a default value [ INSERT INTO `users` (`username`) VALUES ('shit') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-01 08:36:55 --- STRACE: Database_Exception [ 1364 ]: Field 'email' doesn't have a default value [ INSERT INTO `users` (`username`) VALUES ('shit') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\controller\account.php(37): Kohana_ORM->save()
#4 [internal function]: Controller_Account->action_index()
#5 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#6 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-01 08:55:32 --- ERROR: ErrorException [ 1 ]: Cannot break/continue 1 level ~ APPPATH\classes\controller\account.php [ 45 ]
2011-10-01 08:55:32 --- STRACE: ErrorException [ 1 ]: Cannot break/continue 1 level ~ APPPATH\classes\controller\account.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-01 08:56:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\basic.php [ 17 ]
2011-10-01 08:56:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\basic.php [ 17 ]
--
#0 D:\Apache\localhost\www\application\views\basic.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 17, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Account))
#6 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-01 09:59:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\controller\account.php [ 58 ]
2011-10-01 09:59:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\controller\account.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-01 10:00:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\controller\account.php [ 57 ]
2011-10-01 10:00:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\controller\account.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-01 10:00:49 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Validation::rule(), called in D:\Apache\localhost\www\application\classes\controller\account.php on line 59 and defined ~ SYSPATH\classes\kohana\validation.php [ 197 ]
2011-10-01 10:00:49 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Validation::rule(), called in D:\Apache\localhost\www\application\classes\controller\account.php on line 59 and defined ~ SYSPATH\classes\kohana\validation.php [ 197 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\validation.php(197): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\Apache\local...', 197, Array)
#1 D:\Apache\localhost\www\application\classes\controller\account.php(59): Kohana_Validation->rule(Array)
#2 [internal function]: Controller_Account->action_index()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 10:03:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\basic.php [ 17 ]
2011-10-01 10:03:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\basic.php [ 17 ]
--
#0 D:\Apache\localhost\www\application\views\basic.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 17, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Account))
#6 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-01 10:15:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH\classes\controller\account.php [ 64 ]
2011-10-01 10:15:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH\classes\controller\account.php [ 64 ]
--
#0 D:\Apache\localhost\www\application\classes\controller\account.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 64, Array)
#1 [internal function]: Controller_Account->action_index()
#2 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#3 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-01 10:16:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: genpass ~ APPPATH\classes\controller\account.php [ 64 ]
2011-10-01 10:16:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: genpass ~ APPPATH\classes\controller\account.php [ 64 ]
--
#0 D:\Apache\localhost\www\application\classes\controller\account.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 64, Array)
#1 [internal function]: Controller_Account->action_index()
#2 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#3 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-01 10:19:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\model\register.php [ 13 ]
2011-10-01 10:19:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\model\register.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-01 10:23:33 --- ERROR: ReflectionException [ 0 ]: Function $regcode->bad_code()() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
2011-10-01 10:23:33 --- STRACE: ReflectionException [ 0 ]: Function $regcode->bad_code()() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\validation.php(383): ReflectionFunction->__construct('$regcode->bad_c...')
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1165): Kohana_Validation->check()
#2 D:\Apache\localhost\www\application\classes\model\register.php(17): Kohana_ORM->check(Object(Validation))
#3 D:\Apache\localhost\www\application\classes\controller\auth.php(72): Model_Register->reg('helloworldovich...', 'aId1OMiS1zYzGDU', 1)
#4 [internal function]: Controller_Auth->action_reg()
#5 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-01 10:24:15 --- ERROR: ReflectionException [ 0 ]: Function $regcode->bad_code() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
2011-10-01 10:24:15 --- STRACE: ReflectionException [ 0 ]: Function $regcode->bad_code() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\validation.php(383): ReflectionFunction->__construct('$regcode->bad_c...')
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1165): Kohana_Validation->check()
#2 D:\Apache\localhost\www\application\classes\model\register.php(17): Kohana_ORM->check(Object(Validation))
#3 D:\Apache\localhost\www\application\classes\controller\auth.php(72): Model_Register->reg('helloworldovich...', 'aId1OMiS1zYzGDU', 1)
#4 [internal function]: Controller_Auth->action_reg()
#5 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-01 10:25:26 --- ERROR: ReflectionException [ 0 ]: Function bad_code() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
2011-10-01 10:25:26 --- STRACE: ReflectionException [ 0 ]: Function bad_code() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\validation.php(383): ReflectionFunction->__construct('bad_code')
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1165): Kohana_Validation->check()
#2 D:\Apache\localhost\www\application\classes\model\register.php(17): Kohana_ORM->check(Object(Validation))
#3 D:\Apache\localhost\www\application\classes\controller\auth.php(72): Model_Register->reg('helloworldovich...', 'aId1OMiS1zYzGDU', 1)
#4 [internal function]: Controller_Auth->action_reg()
#5 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-01 10:27:03 --- ERROR: ReflectionException [ 0 ]: Function bad_code() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
2011-10-01 10:27:04 --- STRACE: ReflectionException [ 0 ]: Function bad_code() does not exist ~ SYSPATH\classes\kohana\validation.php [ 383 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\validation.php(383): ReflectionFunction->__construct('bad_code')
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1165): Kohana_Validation->check()
#2 D:\Apache\localhost\www\application\classes\model\register.php(17): Kohana_ORM->check(Object(Validation))
#3 D:\Apache\localhost\www\application\classes\controller\auth.php(72): Model_Register->reg('helloworldovich...', 'aId1OMiS1zYzGDU', 1)
#4 [internal function]: Controller_Auth->action_reg()
#5 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#6 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-01 10:55:58 --- ERROR: Database_Exception [ 1146 ]: Table 'blog.makecodes' doesn't exist [ SHOW FULL COLUMNS FROM `makecodes` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-01 10:55:58 --- STRACE: Database_Exception [ 1146 ]: Table 'blog.makecodes' doesn't exist [ SHOW FULL COLUMNS FROM `makecodes` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('makecodes')
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\Apache\localhost\www\application\classes\controller\account.php(51): Kohana_ORM->__construct()
#6 [internal function]: Controller_Account->action_index()
#7 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Account))
#8 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-10-01 11:04:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\model\makecode.php [ 16 ]
2011-10-01 11:04:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\model\makecode.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-01 11:31:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY, expecting ')' ~ APPPATH\classes\model\makecode.php [ 16 ]
2011-10-01 11:31:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY, expecting ')' ~ APPPATH\classes\model\makecode.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-01 13:20:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
2011-10-01 13:20:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 54, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('3')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 13:22:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
2011-10-01 13:22:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 54, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('3')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 13:22:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
2011-10-01 13:22:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 54, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('3')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 14:05:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: first_page ~ APPPATH\views\home.php [ 9 ]
2011-10-01 14:05:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: first_page ~ APPPATH\views\home.php [ 9 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 9, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(17): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-01 14:15:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_name ~ APPPATH\views\home.php [ 7 ]
2011-10-01 14:15:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_name ~ APPPATH\views\home.php [ 7 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 7, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(17): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-01 14:15:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_name ~ APPPATH\views\home.php [ 7 ]
2011-10-01 14:15:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_name ~ APPPATH\views\home.php [ 7 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 7, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(17): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-01 14:17:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_name ~ APPPATH\views\home.php [ 7 ]
2011-10-01 14:17:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_name ~ APPPATH\views\home.php [ 7 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 7, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(17): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-01 14:19:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
2011-10-01 14:19:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 54, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('3')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 15:24:27 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-01 15:24:27 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `materia...', 'Model_Material', Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\Apache\localhost\www\application\classes\model\material.php(33): Kohana_ORM->find_all()
#4 D:\Apache\localhost\www\application\classes\controller\materials.php(15): Model_Material->getMaterials(3, -3)
#5 [internal function]: Controller_Materials->action_category()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-01 15:29:22 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-01 15:29:22 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `materia...', 'Model_Material', Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\Apache\localhost\www\application\classes\model\material.php(33): Kohana_ORM->find_all()
#4 D:\Apache\localhost\www\application\classes\controller\materials.php(15): Model_Material->getMaterials(3, -3)
#5 [internal function]: Controller_Materials->action_category()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-01 15:30:09 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in D:\Apache\localhost\www\application\classes\controller\materials.php on line 17 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2011-10-01 15:30:09 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in D:\Apache\localhost\www\application\classes\controller\materials.php on line 17 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\Apache\local...', 28, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(17): Kohana_View::factory('home', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 15:33:50 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in D:\Apache\localhost\www\application\classes\controller\materials.php on line 17 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2011-10-01 15:33:50 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in D:\Apache\localhost\www\application\classes\controller\materials.php on line 17 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\Apache\local...', 28, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(17): Kohana_View::factory('home', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 15:38:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\model\material.php [ 34 ]
2011-10-01 15:38:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\model\material.php [ 34 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\Apache\local...', 34, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(14): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 15:40:06 --- ERROR: ErrorException [ 1 ]: Call to a member function limit() on a non-object ~ APPPATH\classes\model\material.php [ 34 ]
2011-10-01 15:40:06 --- STRACE: ErrorException [ 1 ]: Call to a member function limit() on a non-object ~ APPPATH\classes\model\material.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-01 15:40:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 37 ]
2011-10-01 15:40:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 37 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 37, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(14): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 15:44:01 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, boolean given, called in D:\Apache\localhost\www\application\classes\controller\materials.php on line 18 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2011-10-01 15:44:01 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, boolean given, called in D:\Apache\localhost\www\application\classes\controller\materials.php on line 18 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\Apache\local...', 28, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(18): Kohana_View::factory('home', false)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 15:44:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '*', expecting ')' ~ APPPATH\classes\controller\materials.php [ 15 ]
2011-10-01 15:44:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '*', expecting ')' ~ APPPATH\classes\controller\materials.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-01 15:46:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '*', expecting ')' ~ APPPATH\classes\controller\materials.php [ 15 ]
2011-10-01 15:46:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '*', expecting ')' ~ APPPATH\classes\controller\materials.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-01 15:54:35 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\Apache\localhost\www\application\classes\controller\materials.php on line 19 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2011-10-01 15:54:35 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\Apache\localhost\www\application\classes\controller\materials.php on line 19 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\Apache\local...', 28, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(19): Kohana_View::factory('home', 'HAI')
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 16:09:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tag ~ APPPATH\classes\model\material.php [ 34 ]
2011-10-01 16:09:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tag ~ APPPATH\classes\model\material.php [ 34 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\Apache\local...', 34, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(14): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 16:10:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tag ~ APPPATH\classes\model\material.php [ 34 ]
2011-10-01 16:10:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$tag ~ APPPATH\classes\model\material.php [ 34 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\Apache\local...', 34, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(14): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 16:11:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 48 ]
2011-10-01 16:11:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 48 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 48, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(14): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 16:12:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 48 ]
2011-10-01 16:12:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 48 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 48, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(14): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 16:12:56 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 48 ]
2011-10-01 16:12:56 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 48 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 48, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(14): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 16:13:19 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 48 ]
2011-10-01 16:13:19 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 48 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 48, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(14): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 16:13:21 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 48 ]
2011-10-01 16:13:21 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 48 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 48, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(14): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 16:14:24 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 48 ]
2011-10-01 16:14:24 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 48 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 48, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(14): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-01 16:23:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\materials.php [ 19 ]
2011-10-01 16:23:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\materials.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-01 16:23:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\materials.php [ 19 ]
2011-10-01 16:23:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\materials.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-01 16:23:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\materials.php [ 19 ]
2011-10-01 16:23:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\materials.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}