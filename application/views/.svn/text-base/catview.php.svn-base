<div style="margin: 0 auto; width: 700px; padding: 10px;">
<h2>Содержимое категории <?=$category['name']?>:</h2>
<?if(count($name)) {?>
<div style="margin: 0 auto; width: 700px; padding: 10px;">
<?php
for($a = 0, $b=sizeof($content); $a < $b; $a++)
{
?>
<div id="post">
<a class="title" href='/materials/showcontent/<?=$id[$a]?>'><?=$name[$a]?></a>
<div id="postbody">
<?=$content[$a]?>
<p><a class="more" href='/materials/showcontent/<?=$id[$a]?>'>Читать дальше...</a></p>
</div>
<div id="tags">
<?php
for($i = 0, $j=sizeof($tag[$a]); $i < $j; $i++)
{?>
<a class="tag" href='/tag/showtag/<?=$tagid[$a][$i]?>'>
<?php
if ($tag[$a][$i]){ echo $tag[$a][$i];
?></a>&nbsp;
<?}}?>
</div>
<div id="info">
<img class="icon" src="/img/clock.png" width="16" height="16"/>&nbsp;&nbsp;&nbsp;<span class="datetime"><?=$ctime[$a]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img class="icon2" src="/img/comment.png" width="12" height="12"/>&nbsp;&nbsp;<?=$countcom[$a]?></span>
</div>
</div>
<?}?>
</div>
			
			
			<?}else{?>
				<p>В выбранной категории нет материалов</p>
			<?}?>
</div>