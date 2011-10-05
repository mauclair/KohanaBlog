<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-02 06:04:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: contentik ~ APPPATH\views\home.php [ 3 ]
2011-10-02 06:04:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: contentik ~ APPPATH\views\home.php [ 3 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 3, Array)
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
2011-10-02 06:17:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\home.php [ 15 ]
2011-10-02 06:17:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\home.php [ 15 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 15, Array)
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
2011-10-02 06:18:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagid ~ APPPATH\views\home.php [ 15 ]
2011-10-02 06:18:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagid ~ APPPATH\views\home.php [ 15 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 15, Array)
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
2011-10-02 06:19:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagname ~ APPPATH\views\home.php [ 17 ]
2011-10-02 06:19:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagname ~ APPPATH\views\home.php [ 17 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 17, Array)
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
2011-10-02 06:23:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH\views\home.php [ 21 ]
2011-10-02 06:23:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 3 ~ APPPATH\views\home.php [ 21 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\Apache\local...', 21, Array)
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
2011-10-02 06:57:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_Tags_material' not found ~ APPPATH\classes\controller\materials.php [ 15 ]
2011-10-02 06:57:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_Tags_material' not found ~ APPPATH\classes\controller\materials.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-02 06:57:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Tags_material' not found ~ APPPATH\classes\controller\materials.php [ 15 ]
2011-10-02 06:57:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Tags_material' not found ~ APPPATH\classes\controller\materials.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-02 06:57:25 --- ERROR: ErrorException [ 1 ]: Class 'Model_Tags_material' not found ~ APPPATH\classes\controller\materials.php [ 15 ]
2011-10-02 06:57:25 --- STRACE: ErrorException [ 1 ]: Class 'Model_Tags_material' not found ~ APPPATH\classes\controller\materials.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-02 06:57:53 --- ERROR: ErrorException [ 1 ]: Class 'Model_Tagsmaterial' not found ~ APPPATH\classes\controller\materials.php [ 15 ]
2011-10-02 06:57:53 --- STRACE: ErrorException [ 1 ]: Class 'Model_Tagsmaterial' not found ~ APPPATH\classes\controller\materials.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-02 06:59:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Tagsmaterial' not found ~ APPPATH\classes\controller\materials.php [ 15 ]
2011-10-02 06:59:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Tagsmaterial' not found ~ APPPATH\classes\controller\materials.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-02 06:59:40 --- ERROR: Database_Exception [ 1146 ]: Table 'blog.tagsmaterials' doesn't exist [ SHOW FULL COLUMNS FROM `tagsmaterials` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-02 06:59:40 --- STRACE: Database_Exception [ 1146 ]: Table 'blog.tagsmaterials' doesn't exist [ SHOW FULL COLUMNS FROM `tagsmaterials` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('tagsmaterials')
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\Apache\localhost\www\application\classes\controller\materials.php(15): Kohana_ORM->__construct()
#6 [internal function]: Controller_Materials->action_category()
#7 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#8 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-10-02 07:00:33 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\controller\materials.php [ 21 ]
2011-10-02 07:00:33 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\controller\materials.php [ 21 ]
--
#0 D:\Apache\localhost\www\application\classes\controller\materials.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 21, Array)
#1 [internal function]: Controller_Materials->action_category()
#2 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#3 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-02 07:00:56 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\controller\materials.php [ 21 ]
2011-10-02 07:00:56 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\controller\materials.php [ 21 ]
--
#0 D:\Apache\localhost\www\application\classes\controller\materials.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 21, Array)
#1 [internal function]: Controller_Materials->action_category()
#2 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#3 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-02 07:07:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 49 ]
2011-10-02 07:07:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 49 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 49, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 07:08:24 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 49 ]
2011-10-02 07:08:24 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 49 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 49, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 07:08:46 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 49 ]
2011-10-02 07:08:46 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 49 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 49, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 07:09:13 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 49 ]
2011-10-02 07:09:13 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 49 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 49, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 07:09:15 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 49 ]
2011-10-02 07:09:15 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 49 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 49, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 07:13:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\classes\controller\materials.php [ 17 ]
2011-10-02 07:13:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\classes\controller\materials.php [ 17 ]
--
#0 D:\Apache\localhost\www\application\classes\controller\materials.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 17, Array)
#1 [internal function]: Controller_Materials->action_category()
#2 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#3 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-02 07:13:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagname ~ APPPATH\views\home.php [ 17 ]
2011-10-02 07:13:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagname ~ APPPATH\views\home.php [ 17 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 17, Array)
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
2011-10-02 07:14:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagname ~ APPPATH\views\home.php [ 17 ]
2011-10-02 07:14:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagname ~ APPPATH\views\home.php [ 17 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 17, Array)
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
2011-10-02 07:14:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagname ~ APPPATH\views\home.php [ 17 ]
2011-10-02 07:14:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagname ~ APPPATH\views\home.php [ 17 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 17, Array)
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
2011-10-02 07:15:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: tag ~ APPPATH\views\home.php [ 17 ]
2011-10-02 07:15:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: tag ~ APPPATH\views\home.php [ 17 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 17, Array)
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
2011-10-02 09:22:29 --- ERROR: Kohana_Exception [ 0 ]: The tag property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-10-02 09:22:29 --- STRACE: Kohana_Exception [ 0 ]: The tag property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(45): Kohana_ORM->__get('tag')
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 09:44:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\model\material.php [ 38 ]
2011-10-02 09:44:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\model\material.php [ 38 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(38): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\Apache\local...', 38, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(17): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 09:45:16 --- ERROR: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\model\material.php [ 38 ]
2011-10-02 09:45:16 --- STRACE: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\model\material.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-02 09:45:42 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\home.php [ 17 ]
2011-10-02 09:45:42 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\home.php [ 17 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(17): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\Apache\local...', 17, Array)
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
2011-10-02 09:48:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\model\material.php [ 39 ]
2011-10-02 09:48:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\model\material.php [ 39 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 39, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(17): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 09:50:03 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 48 ]
2011-10-02 09:50:03 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 48 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 48, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(17): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 10:15:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: tag ~ APPPATH\views\home.php [ 17 ]
2011-10-02 10:15:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: tag ~ APPPATH\views\home.php [ 17 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 17, Array)
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
2011-10-02 10:16:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: tag ~ APPPATH\views\home.php [ 17 ]
2011-10-02 10:16:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: tag ~ APPPATH\views\home.php [ 17 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 17, Array)
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
2011-10-02 10:20:42 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\home.php [ 21 ]
2011-10-02 10:20:42 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\home.php [ 21 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\Apache\local...', 21, Array)
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
2011-10-02 10:20:56 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\home.php [ 21 ]
2011-10-02 10:20:56 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\home.php [ 21 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(21): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\Apache\local...', 21, Array)
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
2011-10-02 10:21:40 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\home.php [ 20 ]
2011-10-02 10:21:40 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\home.php [ 20 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(20): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\Apache\local...', 20, Array)
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
2011-10-02 10:22:18 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\home.php [ 19 ]
2011-10-02 10:22:18 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\views\home.php [ 19 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(19): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\Apache\local...', 19, Array)
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
2011-10-02 10:31:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 48 ]
2011-10-02 10:31:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 48 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 48, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(17): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 10:33:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 48 ]
2011-10-02 10:33:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 48 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 48, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(17): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 10:33:47 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\home.php [ 19 ]
2011-10-02 10:33:47 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\home.php [ 19 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(19): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\Apache\local...', 19, Array)
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
2011-10-02 10:47:21 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\home.php [ 19 ]
2011-10-02 10:47:21 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\home.php [ 19 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(19): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\Apache\local...', 19, Array)
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
2011-10-02 10:48:44 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\home.php [ 19 ]
2011-10-02 10:48:44 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\home.php [ 19 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(19): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\Apache\local...', 19, Array)
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
2011-10-02 10:49:46 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\home.php [ 19 ]
2011-10-02 10:49:46 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\home.php [ 19 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(19): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\Apache\local...', 19, Array)
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
2011-10-02 13:28:29 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 87 ]
2011-10-02 13:28:29 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 87 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(87): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 87, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(33): Model_Material->showMaterialById('2')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 13:28:33 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 87 ]
2011-10-02 13:28:33 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 87 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(87): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 87, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(33): Model_Material->showMaterialById('1')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 14:11:05 --- ERROR: Database_Exception [ 1292 ]: Incorrect datetime value: '1317582665' for column 'ctime' at row 1 [ INSERT INTO `materials` (`category_id`, `content`, `ctime`) VALUES ('1', '\r\n	Ларри Пейдж и Эрик Шмидт приняли участие в конференции Zeitgeist 2011, после которой ответили на вопросы аудитории (видео). Отвечая на один из вопросов о законе Мура, Ларри Пейдж привёл пример автономных автомобилей как одного из тех приложений, которые до сих пор остро нуждаются в увеличении производительности процессоров. Он сказал, что когда начали работу над такими системами, то убедились, что на самом деле это не так сложно, как казалось раньше. Компьютеры довольно успешно справляются с управлением уже сейчас, если получают всю необходимую информацию в режиме реального времени. Тут Эрик Шмидт перебил коллегу и добавил: «Они водят машину лучше, чем вы, когда пьяный. Это то, с чего мы начинаем».*Читать далее*.\r\n\r\n	Такая ремарка вызвала смех в аудитории, а Ларри Пейдж начал рассуждать о водительских качествах людей разного возраста. Определённо, компьютер уже сейчас справляется с управлением автомобиля лучше, чем самые юные и самые старые водители, приближаясь к среднему человеческому уровню. Ларри Пейдж сказал, что здесь наблюдается существенный прогресс, качество программ постепенно улучшается.\r\n	Видео всего выступления 45 минут, речь об автономных автомобилях начинается на 29:19.\r\n', 1317582665) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-02 14:11:05 --- STRACE: Database_Exception [ 1292 ]: Incorrect datetime value: '1317582665' for column 'ctime' at row 1 [ INSERT INTO `materials` (`category_id`, `content`, `ctime`) VALUES ('1', '\r\n	Ларри Пейдж и Эрик Шмидт приняли участие в конференции Zeitgeist 2011, после которой ответили на вопросы аудитории (видео). Отвечая на один из вопросов о законе Мура, Ларри Пейдж привёл пример автономных автомобилей как одного из тех приложений, которые до сих пор остро нуждаются в увеличении производительности процессоров. Он сказал, что когда начали работу над такими системами, то убедились, что на самом деле это не так сложно, как казалось раньше. Компьютеры довольно успешно справляются с управлением уже сейчас, если получают всю необходимую информацию в режиме реального времени. Тут Эрик Шмидт перебил коллегу и добавил: «Они водят машину лучше, чем вы, когда пьяный. Это то, с чего мы начинаем».*Читать далее*.\r\n\r\n	Такая ремарка вызвала смех в аудитории, а Ларри Пейдж начал рассуждать о водительских качествах людей разного возраста. Определённо, компьютер уже сейчас справляется с управлением автомобиля лучше, чем самые юные и самые старые водители, приближаясь к среднему человеческому уровню. Ларри Пейдж сказал, что здесь наблюдается существенный прогресс, качество программ постепенно улучшается.\r\n	Видео всего выступления 45 минут, речь об автономных автомобилях начинается на 29:19.\r\n', 1317582665) ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ma...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\material.php(72): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\admin\main.php(36): Model_Material->addMaterial('1', '<p>????????????...')
#5 [internal function]: Controller_Admin_Main->action_index()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-02 14:47:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 89 ]
2011-10-02 14:47:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 89 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 89, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(33): Model_Material->showMaterialById('20')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 14:47:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 89 ]
2011-10-02 14:47:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 89 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 89, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(33): Model_Material->showMaterialById('18')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 14:47:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 89 ]
2011-10-02 14:47:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 89 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 89, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(33): Model_Material->showMaterialById('4')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 14:49:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 89 ]
2011-10-02 14:49:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 89 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 89, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(33): Model_Material->showMaterialById('4')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 14:49:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 89 ]
2011-10-02 14:49:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 89 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 89, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(33): Model_Material->showMaterialById('4')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 15:02:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_NEW ~ APPPATH\classes\model\material.php [ 18 ]
2011-10-02 15:02:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_NEW ~ APPPATH\classes\model\material.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-02 15:06:39 --- ERROR: Kohana_Exception [ 0 ]: The useful property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-10-02 15:06:39 --- STRACE: Kohana_Exception [ 0 ]: The useful property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(86): Kohana_ORM->__get('useful')
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(33): Model_Material->showMaterialById('21')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 15:58:10 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-02 15:58:10 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `materia...', 'Model_Material', Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\Apache\localhost\www\application\classes\model\material.php(30): Kohana_ORM->find_all()
#4 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, -3)
#5 [internal function]: Controller_Materials->action_category()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-02 15:58:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-02 15:58:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `materia...', 'Model_Material', Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\Apache\localhost\www\application\classes\model\material.php(30): Kohana_ORM->find_all()
#4 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, -3)
#5 [internal function]: Controller_Materials->action_category()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-02 16:00:18 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-02 16:00:18 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `materia...', 'Model_Material', Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\Apache\localhost\www\application\classes\model\material.php(30): Kohana_ORM->find_all()
#4 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, -3)
#5 [internal function]: Controller_Materials->action_category()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-02 16:00:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 46 ]
2011-10-02 16:00:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 46 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 46, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, 3)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 16:01:11 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 47 ]
2011-10-02 16:01:11 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 47 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 47, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, 3)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 16:01:49 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 47 ]
2011-10-02 16:01:49 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\material.php [ 47 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 47, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, 3)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 16:02:47 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\model\material.php [ 49 ]
2011-10-02 16:02:47 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\model\material.php [ 49 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 49, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, 3)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-02 16:06:42 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-02 16:06:42 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `materia...', 'Model_Material', Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\Apache\localhost\www\application\classes\model\material.php(33): Kohana_ORM->find_all()
#4 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, -3)
#5 [internal function]: Controller_Materials->action_category()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-02 16:24:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-02 16:24:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `materia...', 'Model_Material', Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\Apache\localhost\www\application\classes\model\material.php(33): Kohana_ORM->find_all()
#4 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, -3)
#5 [internal function]: Controller_Materials->action_category()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-02 16:25:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-02 16:25:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `materia...', 'Model_Material', Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\Apache\localhost\www\application\classes\model\material.php(33): Kohana_ORM->find_all()
#4 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, -3)
#5 [internal function]: Controller_Materials->action_category()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-02 16:25:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-02 16:25:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-3' at line 1 [ SELECT `material`.* FROM `materials` AS `material` LIMIT 3 OFFSET -3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `materia...', 'Model_Material', Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\Apache\localhost\www\application\classes\model\material.php(33): Kohana_ORM->find_all()
#4 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, -3)
#5 [internal function]: Controller_Materials->action_category()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-02 16:41:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\home.php [ 3 ]
2011-10-02 16:41:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\home.php [ 3 ]
--
#0 D:\Apache\localhost\www\application\views\home.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 3, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(18): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Main))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}