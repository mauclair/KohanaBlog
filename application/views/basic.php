<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Yet another blog</title>
<link href="/css/style.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
</head>


<body>
	<div id="contaner">
		<div id="header">
			<h2><a href="/" style="color: black; text-decoration: none;">Еще один блог</a></h2>
			<p style="font-size: 12px;">...И еще один одинокий блоггер...</p>
			<?
			$request = Request::factory('auth/form');
			$response = $request->execute();
			echo $response;
			?>
		</div>
		<div id="content">
			<?php  echo $content ?>
		</div>
		<div style="clear:both"></div>
		<div id="empty"></div>
	</div>
	<div id="footer">
		<hr>
		<p style="padding-top:5px">Лев Рубель &copy; 2011</p>
	</div>
</body>
</html>
