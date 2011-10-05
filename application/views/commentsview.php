
<div style="margin: 0 auto; width: 700px; padding: 10px;">
<h2>Комментарии пользователя "<?=$user['id']?>"</h2>
<?php  if (isset($show['ok'])) { ?>
	<?for($i=0; $i<count($materialname); $i++){?>
	<div id="post">
	<p><a class="title" href="/materials/showcontent/<?=$materialid[$i]?>"><?=$mat_name[$i]?></a>&nbsp;&nbsp;->&nbsp;&nbsp;<a class="category" href="/category/showcat/<?=$materialurl[$i]?>"><?=$materialname[$i]?></a></p>
			<div id="postbody">
			<?=$text[$i]?>
			</div>
			<div id="info">
			<img class="icon" src="/img/clock.png" width="16" height="16"/>&nbsp;&nbsp;&nbsp;<span class="datetime"><?=$ctime[$i]?></span>
			</div>
	</div>
	<?}?>
<?}else{?>
		<p>Для выбранного пользователя нет комментариев</p>
<?}?>
</div>