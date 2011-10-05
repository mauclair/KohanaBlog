<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-22 05:06:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\model\category.php [ 70 ]
2011-08-22 05:06:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\model\category.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-22 05:06:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\model\material.php [ 41 ]
2011-08-22 05:06:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\classes\model\material.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-22 05:16:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_[model name]' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-08-22 05:16:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_[model name]' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-22 05:17:29 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT ``.* FROM `` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:17:29 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT ``.* FROM `` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', false, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 D:\sites\kohana\www\application\classes\model\material.php(38): Kohana_ORM->__get('category')
#5 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#6 [internal function]: Controller_Materials->action_showcontent()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-22 05:18:33 --- ERROR: ErrorException [ 8 ]: Use of undefined constant tree - assumed 'tree' ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-08-22 05:18:33 --- STRACE: ErrorException [ 8 ]: Use of undefined constant tree - assumed 'tree' ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(37): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\sites\kohana...', 37, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1525): Kohana_ORM::factory('category')
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(560): Kohana_ORM->_related('category')
#3 D:\sites\kohana\www\application\classes\model\material.php(38): Kohana_ORM->__get('category')
#4 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#5 [internal function]: Controller_Materials->action_showcontent()
#6 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-08-22 05:19:07 --- ERROR: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:19:07 --- STRACE: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', false, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 D:\sites\kohana\www\application\classes\model\material.php(38): Kohana_ORM->__get('category')
#5 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#6 [internal function]: Controller_Materials->action_showcontent()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-22 05:19:33 --- ERROR: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:19:33 --- STRACE: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', false, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 D:\sites\kohana\www\application\classes\model\material.php(38): Kohana_ORM->__get('category')
#5 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#6 [internal function]: Controller_Materials->action_showcontent()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-22 05:19:38 --- ERROR: ErrorException [ 8 ]: Undefined index: category ~ APPPATH\classes\model\material.php [ 40 ]
2011-08-22 05:19:38 --- STRACE: ErrorException [ 8 ]: Undefined index: category ~ APPPATH\classes\model\material.php [ 40 ]
--
#0 D:\sites\kohana\www\application\classes\model\material.php(40): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\kohana...', 40, Array)
#1 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-22 05:20:58 --- ERROR: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:20:58 --- STRACE: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', false, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 D:\sites\kohana\www\application\classes\model\material.php(40): Kohana_ORM->__get('category')
#5 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#6 [internal function]: Controller_Materials->action_showcontent()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-22 05:21:26 --- ERROR: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:21:26 --- STRACE: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', false, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 D:\sites\kohana\www\application\classes\model\material.php(40): Kohana_ORM->__get('category')
#5 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#6 [internal function]: Controller_Materials->action_showcontent()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-22 05:22:31 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT ``.* FROM `` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:22:31 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT ``.* FROM `` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', false, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 D:\sites\kohana\www\application\classes\model\material.php(40): Kohana_ORM->__get('category')
#5 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#6 [internal function]: Controller_Materials->action_showcontent()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-22 05:22:42 --- ERROR: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:22:42 --- STRACE: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', false, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 D:\sites\kohana\www\application\classes\model\material.php(40): Kohana_ORM->__get('category')
#5 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#6 [internal function]: Controller_Materials->action_showcontent()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-22 05:23:57 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT ``.* FROM `` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:23:57 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT ``.* FROM `` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', false, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 D:\sites\kohana\www\application\classes\model\material.php(40): Kohana_ORM->__get('category')
#5 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#6 [internal function]: Controller_Materials->action_showcontent()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-22 05:24:19 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT ``.* FROM `` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:24:19 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT ``.* FROM `` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', false, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 D:\sites\kohana\www\application\classes\model\material.php(40): Kohana_ORM->__get('category')
#5 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#6 [internal function]: Controller_Materials->action_showcontent()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-22 05:25:00 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT ``.* FROM `` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:25:00 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT ``.* FROM `` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', false, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 D:\sites\kohana\www\application\classes\model\material.php(40): Kohana_ORM->__get('category')
#5 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#6 [internal function]: Controller_Materials->action_showcontent()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-22 05:25:23 --- ERROR: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT ``.* FROM `` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:25:23 --- STRACE: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT ``.* FROM `` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', false, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 D:\sites\kohana\www\application\classes\model\material.php(40): Kohana_ORM->__get('category')
#5 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#6 [internal function]: Controller_Materials->action_showcontent()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-22 05:25:48 --- ERROR: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:25:48 --- STRACE: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', false, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 D:\sites\kohana\www\application\classes\model\material.php(40): Kohana_ORM->__get('category')
#5 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#6 [internal function]: Controller_Materials->action_showcontent()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-22 05:26:17 --- ERROR: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:26:17 --- STRACE: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE ``.`id` = '7' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', false, Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 D:\sites\kohana\www\application\classes\model\material.php(40): Kohana_ORM->__get('category')
#5 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#6 [internal function]: Controller_Materials->action_showcontent()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-08-22 05:33:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\model\material.php [ 17 ]
2011-08-22 05:33:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\model\material.php [ 17 ]
--
#0 D:\sites\kohana\www\application\classes\model\material.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\kohana...', 17, Array)
#1 D:\sites\kohana\www\application\classes\controller\materials.php(23): Model_Material->getMaterialsByCategory('7')
#2 [internal function]: Controller_Materials->action_category()
#3 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-22 05:35:04 --- ERROR: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-22 05:35:04 --- STRACE: Database_Exception [ 1051 ]: Unknown table '' [ SELECT ``.* FROM `tree` WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT ``.* FRO...', 'Model_Category', Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(NULL)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\sites\kohana\www\application\classes\model\material.php(18): Kohana_ORM->find_all()
#4 D:\sites\kohana\www\application\classes\controller\materials.php(23): Model_Material->getMaterialsByCategory('7')
#5 [internal function]: Controller_Materials->action_category()
#6 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-08-22 05:40:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\model\material.php [ 38 ]
2011-08-22 05:40:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\model\material.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-22 05:41:09 --- ERROR: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-08-22 05:41:09 --- STRACE: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\sites\kohana\www\application\classes\model\material.php(36): Kohana_ORM->__get('email')
#1 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-22 05:42:45 --- ERROR: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-08-22 05:42:45 --- STRACE: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\sites\kohana\www\application\classes\model\material.php(36): Kohana_ORM->__get('email')
#1 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-22 05:42:52 --- ERROR: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-08-22 05:42:52 --- STRACE: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\sites\kohana\www\application\classes\model\material.php(36): Kohana_ORM->__get('email')
#1 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-22 05:47:34 --- ERROR: Kohana_Exception [ 0 ]: The url property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-08-22 05:47:34 --- STRACE: Kohana_Exception [ 0 ]: The url property does not exist in the Model_Category class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\sites\kohana\www\application\classes\model\material.php(36): Kohana_ORM->__get('url')
#1 D:\sites\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-22 07:43:15 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_Category::__construct(), called in D:\sites\kohana\www\application\classes\controller\category.php on line 13 and defined ~ APPPATH\classes\model\category.php [ 9 ]
2011-08-22 07:43:15 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_Category::__construct(), called in D:\sites\kohana\www\application\classes\controller\category.php on line 13 and defined ~ APPPATH\classes\model\category.php [ 9 ]
--
#0 D:\sites\kohana\www\application\classes\model\category.php(9): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\sites\kohana...', 9, Array)
#1 D:\sites\kohana\www\application\classes\controller\category.php(13): Model_Category->__construct()
#2 [internal function]: Controller_Category->action_index()
#3 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Category))
#4 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-22 07:43:16 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_Category::__construct(), called in D:\sites\kohana\www\application\classes\controller\category.php on line 13 and defined ~ APPPATH\classes\model\category.php [ 9 ]
2011-08-22 07:43:16 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_Category::__construct(), called in D:\sites\kohana\www\application\classes\controller\category.php on line 13 and defined ~ APPPATH\classes\model\category.php [ 9 ]
--
#0 D:\sites\kohana\www\application\classes\model\category.php(9): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\sites\kohana...', 9, Array)
#1 D:\sites\kohana\www\application\classes\controller\category.php(13): Model_Category->__construct()
#2 [internal function]: Controller_Category->action_index()
#3 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Category))
#4 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-22 07:43:17 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_Category::__construct(), called in D:\sites\kohana\www\application\classes\controller\category.php on line 13 and defined ~ APPPATH\classes\model\category.php [ 9 ]
2011-08-22 07:43:17 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_Category::__construct(), called in D:\sites\kohana\www\application\classes\controller\category.php on line 13 and defined ~ APPPATH\classes\model\category.php [ 9 ]
--
#0 D:\sites\kohana\www\application\classes\model\category.php(9): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\sites\kohana...', 9, Array)
#1 D:\sites\kohana\www\application\classes\controller\category.php(13): Model_Category->__construct()
#2 [internal function]: Controller_Category->action_index()
#3 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Category))
#4 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-22 07:43:17 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_Category::__construct(), called in D:\sites\kohana\www\application\classes\controller\category.php on line 13 and defined ~ APPPATH\classes\model\category.php [ 9 ]
2011-08-22 07:43:17 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_Category::__construct(), called in D:\sites\kohana\www\application\classes\controller\category.php on line 13 and defined ~ APPPATH\classes\model\category.php [ 9 ]
--
#0 D:\sites\kohana\www\application\classes\model\category.php(9): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\sites\kohana...', 9, Array)
#1 D:\sites\kohana\www\application\classes\controller\category.php(13): Model_Category->__construct()
#2 [internal function]: Controller_Category->action_index()
#3 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Category))
#4 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-22 07:43:18 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_Category::__construct(), called in D:\sites\kohana\www\application\classes\controller\category.php on line 13 and defined ~ APPPATH\classes\model\category.php [ 9 ]
2011-08-22 07:43:18 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_Category::__construct(), called in D:\sites\kohana\www\application\classes\controller\category.php on line 13 and defined ~ APPPATH\classes\model\category.php [ 9 ]
--
#0 D:\sites\kohana\www\application\classes\model\category.php(9): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\sites\kohana...', 9, Array)
#1 D:\sites\kohana\www\application\classes\controller\category.php(13): Model_Category->__construct()
#2 [internal function]: Controller_Category->action_index()
#3 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Category))
#4 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-08-22 07:44:21 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\catview.php [ 3 ]
2011-08-22 07:44:21 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\catview.php [ 3 ]
--
#0 D:\sites\kohana\www\application\views\catview.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\kohana...', 3, Array)
#1 D:\sites\kohana\www\system\classes\kohana\view.php(61): include('D:\sites\kohana...')
#2 D:\sites\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\kohana...', Array)
#3 D:\sites\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\kohana\www\application\views\basic.php(17): Kohana_View->__toString()
#5 D:\sites\kohana\www\system\classes\kohana\view.php(61): include('D:\sites\kohana...')
#6 D:\sites\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\kohana...', Array)
#7 D:\sites\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-08-22 07:45:29 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\catview.php [ 3 ]
2011-08-22 07:45:29 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\catview.php [ 3 ]
--
#0 D:\sites\kohana\www\application\views\catview.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\sites\kohana...', 3, Array)
#1 D:\sites\kohana\www\system\classes\kohana\view.php(61): include('D:\sites\kohana...')
#2 D:\sites\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\kohana...', Array)
#3 D:\sites\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\kohana\www\application\views\basic.php(17): Kohana_View->__toString()
#5 D:\sites\kohana\www\system\classes\kohana\view.php(61): include('D:\sites\kohana...')
#6 D:\sites\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\kohana...', Array)
#7 D:\sites\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-08-22 13:45:09 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Material as array ~ APPPATH\views\catview.php [ 4 ]
2011-08-22 13:45:09 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Material as array ~ APPPATH\views\catview.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-22 14:19:25 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\catview.php [ 4 ]
2011-08-22 14:19:25 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\catview.php [ 4 ]
--
#0 D:\sites\kohana\www\application\views\catview.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\kohana...', 4, Array)
#1 D:\sites\kohana\www\system\classes\kohana\view.php(61): include('D:\sites\kohana...')
#2 D:\sites\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\kohana...', Array)
#3 D:\sites\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\kohana\www\application\views\basic.php(17): Kohana_View->__toString()
#5 D:\sites\kohana\www\system\classes\kohana\view.php(61): include('D:\sites\kohana...')
#6 D:\sites\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\kohana...', Array)
#7 D:\sites\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-08-22 14:19:45 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\catview.php [ 4 ]
2011-08-22 14:19:45 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\catview.php [ 4 ]
--
#0 D:\sites\kohana\www\application\views\catview.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\sites\kohana...', 4, Array)
#1 D:\sites\kohana\www\system\classes\kohana\view.php(61): include('D:\sites\kohana...')
#2 D:\sites\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\kohana...', Array)
#3 D:\sites\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\sites\kohana\www\application\views\basic.php(17): Kohana_View->__toString()
#5 D:\sites\kohana\www\system\classes\kohana\view.php(61): include('D:\sites\kohana...')
#6 D:\sites\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\sites\kohana...', Array)
#7 D:\sites\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}