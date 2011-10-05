<div style="margin: 0 auto; width: 700px; padding: 10px;">

<div id="post">
<a class="title" href='/materials/showcontent/<?=$id?>'><?=$name?></a>
<p class="subtext">в категории <a class="category" href='/category/showcat/<?=$categoryurl?>'><?=$category?></a></p>
<div id="postbody">
<?=$content?>
</div>
<div id="tags">
<img src="/img/tag.png" width="16" height="16"/>&nbsp;&nbsp;
<?foreach($tag as $item){?>
<a class="tag" href='/tag/showtag/<?=$item['id']?>'>
<?=$item['name']?>
</a>&nbsp;
<?}?>
</div>
<div id="info">
<img class="icon" src="/img/clock.png" width="16" height="16"/>&nbsp;&nbsp;&nbsp;<span class="datetime"><?=$ctime?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img class="icon2" src="/img/comment.png" width="12" height="12"/>&nbsp;&nbsp;<?=$count?></span>
</div>
</div>
<div id="commentform">
<?
$request = Request::factory('/comments');
$response = $request->execute();
echo $response;
?>
</div>
<div>
<?foreach($comment as $item){?>
<div id="comments">
<p><span style="border-bottom: 1px dotted;"><?=$item['userid']?></span></p>
<p><?=$item['text']?></p>
<p style="font-style: italic;"><?=$item['ctime']?></p>
</div>
<?}?>

</div>

</div>