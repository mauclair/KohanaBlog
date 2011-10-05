<div style="margin: 0 auto; width: 700px; padding: 10px;">
<h2>Записи по тэгу "<?=$tag['name']?>"</h2>
<?if(count($materials)) {?>
	<?foreach($materials as $item){?>
	<div id="post">
	<p><a class="title" href="/materials/showcontent/<?=$item['id']?>"><?=$item['name']?></a></p>
	<p class="subtext">в категории <a class="category" href="/category/showcat/<?=$item['caturl']?>"><?=$item['catname']?></a></p>
			<div id="postbody">
			<?php
			$useful = new Model_Useful;
			echo $useful->preview($item['content']);
			?>
			</div>
			<div id="info">
			<img class="icon" src="/img/clock.png" width="16" height="16"/>&nbsp;&nbsp;&nbsp;<span class="datetime"><?=$item['ctime']?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img class="icon2" src="/img/comment.png" width="12" height="12"/>&nbsp;&nbsp;<?=$item['catcount']?></span>
			</div>
	</div>
	<?}?>
<?}else{?>
		<p>Для выбранного тэга нет материалов</p>
<?}?>
</div>