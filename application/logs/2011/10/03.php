<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-03 01:27:23 --- ERROR: ErrorException [ 8 ]: Use of undefined constant DESC - assumed 'DESC' ~ APPPATH\classes\model\material.php [ 33 ]
2011-10-03 01:27:23 --- STRACE: ErrorException [ 8 ]: Use of undefined constant DESC - assumed 'DESC' ~ APPPATH\classes\model\material.php [ 33 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(33): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\Apache\local...', 33, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-03 01:53:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\contentview.php [ 4 ]
2011-10-03 01:53:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\contentview.php [ 4 ]
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
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Materials))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 01:53:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\contentview.php [ 4 ]
2011-10-03 01:53:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\contentview.php [ 4 ]
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
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Materials))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 01:54:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\views\contentview.php [ 4 ]
2011-10-03 01:54:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\views\contentview.php [ 4 ]
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
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Materials))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 01:56:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\contentview.php [ 18 ]
2011-10-03 01:56:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\contentview.php [ 18 ]
--
#0 D:\Apache\localhost\www\application\views\contentview.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 18, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Materials))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 02:14:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\tree.php [ 52 ]
2011-10-03 02:14:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\tree.php [ 52 ]
--
#0 D:\Apache\localhost\www\application\classes\model\tree.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 52, Array)
#1 D:\Apache\localhost\www\application\classes\controller\category.php(22): Model_Tree->contentСategoryById('1')
#2 [internal function]: Controller_Category->action_showcat()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Category))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-03 02:15:20 --- ERROR: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\views\catview.php [ 16 ]
2011-10-03 02:15:20 --- STRACE: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\views\catview.php [ 16 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 16, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 02:18:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\catview.php [ 23 ]
2011-10-03 02:18:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\catview.php [ 23 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 23, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 02:30:54 --- ERROR: ErrorException [ 8 ]: Undefined index: ctime ~ APPPATH\views\catview.php [ 23 ]
2011-10-03 02:30:54 --- STRACE: ErrorException [ 8 ]: Undefined index: ctime ~ APPPATH\views\catview.php [ 23 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 23, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 02:31:28 --- ERROR: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\views\catview.php [ 16 ]
2011-10-03 02:31:28 --- STRACE: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\views\catview.php [ 16 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 16, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 02:31:48 --- ERROR: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\views\catview.php [ 16 ]
2011-10-03 02:31:48 --- STRACE: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\views\catview.php [ 16 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 16, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 02:33:41 --- ERROR: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\views\catview.php [ 16 ]
2011-10-03 02:33:41 --- STRACE: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\views\catview.php [ 16 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 16, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 02:34:41 --- ERROR: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\catview.php [ 16 ]
2011-10-03 02:34:41 --- STRACE: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\catview.php [ 16 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 16, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 02:35:07 --- ERROR: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\catview.php [ 16 ]
2011-10-03 02:35:07 --- STRACE: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\catview.php [ 16 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 16, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 07:48:20 --- ERROR: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\catview.php [ 16 ]
2011-10-03 07:48:20 --- STRACE: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\catview.php [ 16 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 16, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 07:58:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\tagview.php [ 6 ]
2011-10-03 07:58:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\tagview.php [ 6 ]
--
#0 D:\Apache\localhost\www\application\views\tagview.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 6, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tag))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 07:58:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: catname ~ APPPATH\views\tagview.php [ 6 ]
2011-10-03 07:58:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: catname ~ APPPATH\views\tagview.php [ 6 ]
--
#0 D:\Apache\localhost\www\application\views\tagview.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 6, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tag))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 08:51:53 --- ERROR: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\catview.php [ 16 ]
2011-10-03 08:51:53 --- STRACE: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\catview.php [ 16 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 16, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 08:55:12 --- ERROR: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\catview.php [ 16 ]
2011-10-03 08:55:12 --- STRACE: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\catview.php [ 16 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 16, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 09:00:44 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\tree.php [ 54 ]
2011-10-03 09:00:44 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\tree.php [ 54 ]
--
#0 D:\Apache\localhost\www\application\classes\model\tree.php(54): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 54, Array)
#1 D:\Apache\localhost\www\application\classes\controller\category.php(22): Model_Tree->contentСategoryById('1')
#2 [internal function]: Controller_Category->action_showcat()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Category))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-03 09:01:06 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\tree.php [ 54 ]
2011-10-03 09:01:06 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\model\tree.php [ 54 ]
--
#0 D:\Apache\localhost\www\application\classes\model\tree.php(54): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 54, Array)
#1 D:\Apache\localhost\www\application\classes\controller\category.php(22): Model_Tree->contentСategoryById('1')
#2 [internal function]: Controller_Category->action_showcat()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Category))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-03 09:01:35 --- ERROR: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\catview.php [ 16 ]
2011-10-03 09:01:35 --- STRACE: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\catview.php [ 16 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 16, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 09:02:28 --- ERROR: ErrorException [ 8 ]: Undefined index: tag ~ APPPATH\views\catview.php [ 16 ]
2011-10-03 09:02:28 --- STRACE: ErrorException [ 8 ]: Undefined index: tag ~ APPPATH\views\catview.php [ 16 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 16, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 09:09:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\catview.php [ 39 ]
2011-10-03 09:09:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\catview.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-03 09:10:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\catview.php [ 42 ]
2011-10-03 09:10:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\catview.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-03 09:12:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\catview.php [ 2 ]
2011-10-03 09:12:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\catview.php [ 2 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 2, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 09:13:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\catview.php [ 3 ]
2011-10-03 09:13:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\catview.php [ 3 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 3, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 09:13:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\catview.php [ 10 ]
2011-10-03 09:13:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\catview.php [ 10 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 10, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 09:15:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: categoryurl ~ APPPATH\views\catview.php [ 10 ]
2011-10-03 09:15:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: categoryurl ~ APPPATH\views\catview.php [ 10 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 10, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 09:15:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\views\catview.php [ 32 ]
2011-10-03 09:15:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\views\catview.php [ 32 ]
--
#0 D:\Apache\localhost\www\application\views\catview.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 32, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#2 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#6 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#7 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Category))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 09:46:12 --- ERROR: ErrorException [ 8 ]: Undefined index: url ~ APPPATH\classes\model\material.php [ 50 ]
2011-10-03 09:46:12 --- STRACE: ErrorException [ 8 ]: Undefined index: url ~ APPPATH\classes\model\material.php [ 50 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Apache\local...', 50, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, 15)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-03 10:17:04 --- ERROR: ErrorException [ 2 ]: Missing argument 4 for Model_Material::addMaterial(), called in D:\Apache\localhost\www\application\classes\controller\admin\main.php on line 38 and defined ~ APPPATH\classes\model\material.php [ 62 ]
2011-10-03 10:17:04 --- STRACE: ErrorException [ 2 ]: Missing argument 4 for Model_Material::addMaterial(), called in D:\Apache\localhost\www\application\classes\controller\admin\main.php on line 38 and defined ~ APPPATH\classes\model\material.php [ 62 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(62): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\Apache\local...', 62, Array)
#1 D:\Apache\localhost\www\application\classes\controller\admin\main.php(38): Model_Material->addMaterial('1', '<p>???? ???????...', 'Linux HAHAHA')
#2 [internal function]: Controller_Admin_Main->action_index()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-03 10:17:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_Tags_material' not found ~ APPPATH\classes\model\material.php [ 71 ]
2011-10-03 10:17:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_Tags_material' not found ~ APPPATH\classes\model\material.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-03 10:19:07 --- ERROR: Database_Exception [ 1364 ]: Field 'tag_id' doesn't have a default value [ INSERT INTO `tags_materials` () VALUES () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 10:19:07 --- STRACE: Database_Exception [ 1364 ]: Field 'tag_id' doesn't have a default value [ INSERT INTO `tags_materials` () VALUES () ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\tagsmaterial.php(16): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\model\material.php(72): Model_Tagsmaterial->insertarray(NULL, Array)
#5 D:\Apache\localhost\www\application\classes\controller\admin\main.php(38): Model_Material->addMaterial('1', '<p>???? ???????...', 'Linux HAHAHA', 'linux,cow,onesh...')
#6 [internal function]: Controller_Admin_Main->action_index()
#7 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#8 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-10-03 10:41:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\model\tag.php [ 67 ]
2011-10-03 10:41:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\classes\model\tag.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-03 10:42:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'id' in 'where clause' [ UPDATE `tags_materials` SET `tag_id` = 5 WHERE `id` = 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 10:42:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'id' in 'where clause' [ UPDATE `tags_materials` SET `tag_id` = 5 WHERE `id` = 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `tags_ma...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1287): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#3 D:\Apache\localhost\www\application\classes\model\tagsmaterial.php(16): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\model\material.php(74): Model_Tagsmaterial->insertarray(NULL, Array)
#5 D:\Apache\localhost\www\application\classes\controller\admin\main.php(38): Model_Material->addMaterial('1', '<p>???? ???????...', 'asfasfasf', 'linux,cow,onesh...')
#6 [internal function]: Controller_Admin_Main->action_index()
#7 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#8 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#11 {main}
2011-10-03 11:31:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\messages\catErrors.php [ 20 ]
2011-10-03 11:31:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\messages\catErrors.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-03 11:32:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\messages\catErrors.php [ 20 ]
2011-10-03 11:32:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\messages\catErrors.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-03 11:57:18 --- ERROR: ErrorException [ 2 ]: mb_strlen() expects parameter 1 to be string, array given ~ SYSPATH\classes\kohana\utf8.php [ 171 ]
2011-10-03 11:57:18 --- STRACE: ErrorException [ 2 ]: mb_strlen() expects parameter 1 to be string, array given ~ SYSPATH\classes\kohana\utf8.php [ 171 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mb_strlen() exp...', 'D:\Apache\local...', 171, Array)
#1 D:\Apache\localhost\www\system\classes\kohana\utf8.php(171): mb_strlen(Array, 'utf-8')
#2 D:\Apache\localhost\www\system\classes\kohana\valid.php(51): Kohana_UTF8::strlen(Array)
#3 [internal function]: Kohana_Valid::min_length(Array, '2')
#4 D:\Apache\localhost\www\system\classes\kohana\validation.php(378): ReflectionMethod->invokeArgs(NULL, Array)
#5 D:\Apache\localhost\www\application\classes\model\material.php(76): Kohana_Validation->check()
#6 D:\Apache\localhost\www\application\classes\controller\admin\main.php(38): Model_Material->addMaterial('1', '', '()@*)@($*', '')
#7 [internal function]: Controller_Admin_Main->action_index()
#8 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#9 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#12 {main}
2011-10-03 11:58:07 --- ERROR: Kohana_Exception [ 0 ]: The errors property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2011-10-03 11:58:07 --- STRACE: Kohana_Exception [ 0 ]: The errors property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('errors', Array)
#1 D:\Apache\localhost\www\application\classes\model\material.php(78): Kohana_ORM->__set('errors', Array)
#2 D:\Apache\localhost\www\application\classes\controller\admin\main.php(38): Model_Material->addMaterial('1', '', '***', '')
#3 [internal function]: Controller_Admin_Main->action_index()
#4 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#5 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-03 12:08:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Material::getErrors() ~ APPPATH\classes\controller\admin\main.php [ 46 ]
2011-10-03 12:08:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Material::getErrors() ~ APPPATH\classes\controller\admin\main.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-03 14:00:16 --- ERROR: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2011-10-03 14:00:16 --- STRACE: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(116): Kohana_ORM->__get('comment')
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(33): Model_Material->showMaterialById('43')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-03 14:32:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\comments.php [ 28 ]
2011-10-03 14:32:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\comments.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-03 16:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comments was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-03 16:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comments was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\Apache\localhost\www\application\views\contentview.php(23): Kohana_Request->execute()
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#4 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#7 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#8 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#9 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Materials))
#12 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#15 {main}
2011-10-03 16:11:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comments/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-10-03 16:11:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comments/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\Apache\localhost\www\application\views\contentview.php(23): Kohana_Request->execute()
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#4 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#7 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#8 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#9 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Materials))
#12 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#15 {main}
2011-10-03 16:12:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comments was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-03 16:12:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comments was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\Apache\localhost\www\application\views\contentview.php(23): Kohana_Request->execute()
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#4 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#7 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#8 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#9 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Materials))
#12 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#15 {main}
2011-10-03 16:14:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comment was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-03 16:14:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comment was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\Apache\localhost\www\application\views\contentview.php(23): Kohana_Request->execute()
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#4 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#7 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#8 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#9 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Materials))
#12 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#15 {main}
2011-10-03 16:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL comments was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-03 16:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL comments was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\Apache\localhost\www\application\views\contentview.php(23): Kohana_Request->execute()
#3 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#4 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#5 D:\Apache\localhost\www\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\Apache\localhost\www\application\views\basic.php(23): Kohana_View->__toString()
#7 D:\Apache\localhost\www\system\classes\kohana\view.php(61): include('D:\Apache\local...')
#8 D:\Apache\localhost\www\system\classes\kohana\view.php(343): Kohana_View::capture('D:\Apache\local...', Array)
#9 D:\Apache\localhost\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Materials))
#12 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#15 {main}
2011-10-03 16:18:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\contentview.php [ 4 ]
2011-10-03 16:18:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\contentview.php [ 4 ]
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
#9 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Materials))
#10 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-03 16:18:32 --- ERROR: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария :)') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 16:18:32 --- STRACE: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария :)') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(43): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\materials.php(60): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...', NULL)
#5 [internal function]: Controller_Materials->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-03 16:19:14 --- ERROR: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария :)') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 16:19:14 --- STRACE: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария :)') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(43): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\materials.php(61): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...', NULL)
#5 [internal function]: Controller_Materials->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-03 16:19:41 --- ERROR: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария :)') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 16:19:41 --- STRACE: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария :)') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(43): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\materials.php(62): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...', NULL)
#5 [internal function]: Controller_Materials->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-03 16:21:29 --- ERROR: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария ))') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 16:21:29 --- STRACE: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария ))') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(43): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\comments.php(46): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...', NULL)
#5 [internal function]: Controller_Comments->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-03 16:31:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: matdata ~ APPPATH\classes\controller\comments.php [ 40 ]
2011-10-03 16:31:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: matdata ~ APPPATH\classes\controller\comments.php [ 40 ]
--
#0 D:\Apache\localhost\www\application\classes\controller\comments.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 40, Array)
#1 [internal function]: Controller_Comments->action_insertcomment()
#2 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#3 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-03 16:32:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: matdata ~ APPPATH\classes\controller\comments.php [ 40 ]
2011-10-03 16:32:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: matdata ~ APPPATH\classes\controller\comments.php [ 40 ]
--
#0 D:\Apache\localhost\www\application\classes\controller\comments.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 40, Array)
#1 [internal function]: Controller_Comments->action_insertcomment()
#2 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#3 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-03 16:50:09 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'materialid' at row 1 [ INSERT INTO `comments` (`userid`, `text`, `materialid`) VALUES ('15', 'Введите текст комментария', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 16:50:09 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '' for column 'materialid' at row 1 [ INSERT INTO `comments` (`userid`, `text`, `materialid`) VALUES ('15', 'Введите текст комментария', '') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(44): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\comments.php(47): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...', '')
#5 [internal function]: Controller_Comments->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-03 16:53:14 --- ERROR: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 16:53:14 --- STRACE: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(44): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\comments.php(47): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...', NULL)
#5 [internal function]: Controller_Comments->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-03 16:54:10 --- ERROR: Database_Exception [ 1366 ]: Incorrect integer value: '$mat_id' for column 'materialid' at row 1 [ INSERT INTO `comments` (`userid`, `text`, `materialid`) VALUES ('15', 'Введите текст комментария', '$mat_id') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 16:54:10 --- STRACE: Database_Exception [ 1366 ]: Incorrect integer value: '$mat_id' for column 'materialid' at row 1 [ INSERT INTO `comments` (`userid`, `text`, `materialid`) VALUES ('15', 'Введите текст комментария', '$mat_id') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(44): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\comments.php(47): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...', '$mat_id')
#5 [internal function]: Controller_Comments->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-03 16:56:58 --- ERROR: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 16:56:58 --- STRACE: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(44): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\comments.php(47): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...', NULL)
#5 [internal function]: Controller_Comments->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-03 16:57:36 --- ERROR: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 16:57:36 --- STRACE: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(44): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\comments.php(47): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...', NULL)
#5 [internal function]: Controller_Comments->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-03 16:58:34 --- ERROR: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 16:58:34 --- STRACE: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(44): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\comments.php(47): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...', NULL)
#5 [internal function]: Controller_Comments->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-03 17:03:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\model\comment.php [ 43 ]
2011-10-03 17:03:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\model\comment.php [ 43 ]
--
#0 D:\Apache\localhost\www\application\classes\model\comment.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Apache\local...', 43, Array)
#1 D:\Apache\localhost\www\application\classes\controller\comments.php(47): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...')
#2 [internal function]: Controller_Comments->action_insertcomment()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-03 17:03:35 --- ERROR: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария ^^') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 17:03:35 --- STRACE: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария ^^') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(44): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\comments.php(47): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...')
#5 [internal function]: Controller_Comments->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-03 17:04:34 --- ERROR: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария ^^') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-03 17:04:34 --- STRACE: Database_Exception [ 1364 ]: Field 'materialid' doesn't have a default value [ INSERT INTO `comments` (`userid`, `text`) VALUES ('15', 'Введите текст комментария ^^') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\Apache\localhost\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\Apache\localhost\www\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 D:\Apache\localhost\www\application\classes\model\comment.php(44): Kohana_ORM->save()
#4 D:\Apache\localhost\www\application\classes\controller\comments.php(47): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...')
#5 [internal function]: Controller_Comments->action_insertcomment()
#6 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#7 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-03 17:06:13 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Model_Comment::saveNewComment(), called in D:\Apache\localhost\www\application\classes\controller\comments.php on line 47 and defined ~ APPPATH\classes\model\comment.php [ 26 ]
2011-10-03 17:06:13 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Model_Comment::saveNewComment(), called in D:\Apache\localhost\www\application\classes\controller\comments.php on line 47 and defined ~ APPPATH\classes\model\comment.php [ 26 ]
--
#0 D:\Apache\localhost\www\application\classes\model\comment.php(26): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\Apache\local...', 26, Array)
#1 D:\Apache\localhost\www\application\classes\controller\comments.php(47): Model_Comment->saveNewComment(Object(Model_User), '?????????????? ...')
#2 [internal function]: Controller_Comments->action_insertcomment()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Comments))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-03 17:29:37 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\model\material.php [ 59 ]
2011-10-03 17:29:37 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\model\material.php [ 59 ]
--
#0 D:\Apache\localhost\www\application\classes\model\material.php(59): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\Apache\local...', 59, Array)
#1 D:\Apache\localhost\www\application\classes\controller\materials.php(16): Model_Material->getMaterials(3, 0)
#2 [internal function]: Controller_Materials->action_category()
#3 D:\Apache\localhost\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Materials))
#4 D:\Apache\localhost\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\Apache\localhost\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\Apache\localhost\www\index.php(109): Kohana_Request->execute()
#7 {main}