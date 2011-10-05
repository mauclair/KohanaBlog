<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-23 02:35:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_info ~ APPPATH\classes\controller\category.php [ 16 ]
2011-08-23 02:35:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_info ~ APPPATH\classes\controller\category.php [ 16 ]
--
#0 D:\sites\kohana\www\application\classes\controller\category.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\kohana...', 16, Array)
#1 [internal function]: Controller_Category->action_showcat()
#2 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Category))
#3 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-08-23 02:46:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: category_info ~ APPPATH\classes\controller\category.php [ 24 ]
2011-08-23 02:46:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: category_info ~ APPPATH\classes\controller\category.php [ 24 ]
--
#0 D:\sites\kohana\www\application\classes\controller\category.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\sites\kohana...', 24, Array)
#1 [internal function]: Controller_Category->action_showcat()
#2 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Category))
#3 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-08-23 03:09:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Orm/tree' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-08-23 03:09:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Orm/tree' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-23 03:11:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Orm/tree' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-08-23 03:11:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Orm/tree' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-23 03:15:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Orm/tree' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-08-23 03:15:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Orm/tree' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-23 05:04:41 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.orm_tags' doesn't exist [ SHOW FULL COLUMNS FROM `orm_tags` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-23 05:04:41 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.orm_tags' doesn't exist [ SHOW FULL COLUMNS FROM `orm_tags` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('orm_tags')
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(Array)
#6 D:\sites\kohana\www\application\classes\model\tag.php(7): Kohana_ORM::factory('Orm_Tag', Array)
#7 D:\sites\kohana\www\application\classes\controller\tag.php(15): Model_Tag->tagInfoByUrl('1')
#8 [internal function]: Controller_Tag->action_showtag()
#9 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tag))
#10 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-08-23 05:08:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tags_materials.orm_tag_id' in 'where clause' [ SELECT `material`.* FROM `materials` AS `material` JOIN `tags_materials` ON (`tags_materials`.`material_id` = `material`.`id`) WHERE `tags_materials`.`orm_tag_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-23 05:08:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tags_materials.orm_tag_id' in 'where clause' [ SELECT `material`.* FROM `materials` AS `material` JOIN `tags_materials` ON (`tags_materials`.`material_id` = `material`.`id`) WHERE `tags_materials`.`orm_tag_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `materia...', 'Model_Material', Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\sites\kohana\www\application\classes\model\tag.php(29): Kohana_ORM->find_all()
#4 D:\sites\kohana\www\application\classes\controller\tag.php(22): Model_Tag->contentTagById('1')
#5 [internal function]: Controller_Tag->action_showtag()
#6 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tag))
#7 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-08-23 05:09:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tags_materials.tag_id' in 'where clause' [ SELECT `material`.* FROM `materials` AS `material` JOIN `tags_materials` ON (`tags_materials`.`material_id` = `material`.`id`) WHERE `tags_materials`.`tag_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-23 05:09:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tags_materials.tag_id' in 'where clause' [ SELECT `material`.* FROM `materials` AS `material` JOIN `tags_materials` ON (`tags_materials`.`material_id` = `material`.`id`) WHERE `tags_materials`.`tag_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `materia...', 'Model_Material', Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\sites\kohana\www\application\classes\model\tag.php(36): Kohana_ORM->find_all()
#4 D:\sites\kohana\www\application\classes\controller\tag.php(22): Model_Tag->contentTagById('1')
#5 [internal function]: Controller_Tag->action_showtag()
#6 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tag))
#7 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-08-23 05:10:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tags_materials.tag_id' in 'where clause' [ SELECT `material`.* FROM `materials` AS `material` JOIN `tags_materials` ON (`tags_materials`.`material_id` = `material`.`id`) WHERE `tags_materials`.`tag_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-08-23 05:10:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tags_materials.tag_id' in 'where clause' [ SELECT `material`.* FROM `materials` AS `material` JOIN `tags_materials` ON (`tags_materials`.`material_id` = `material`.`id`) WHERE `tags_materials`.`tag_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `materia...', 'Model_Material', Array)
#1 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\sites\kohana\www\application\classes\model\tag.php(37): Kohana_ORM->find_all()
#4 D:\sites\kohana\www\application\classes\controller\tag.php(22): Model_Tag->contentTagById('1')
#5 [internal function]: Controller_Tag->action_showtag()
#6 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tag))
#7 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\sites\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}