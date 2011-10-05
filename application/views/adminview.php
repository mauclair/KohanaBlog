<div style="margin: 0 auto; width: 700px; text-align:center">
<h1>Администраторская</h1>
<HR>

<? if(isset($errors)){?>
<?foreach($errors as $item){?>
<p style="color:red"><?=$item?></p>
<?}?>
<?}?>

<div style="margin: 0 auto; width: 700px; text-align: center; border-bottom: 1px dotted; padding-top: 10px; padding-bottom: 10px;">
<h2>Создание новой категории</h2>
    <form method="post" action="">
        <p>Выберите родительскую категорию:</p>
        <select name="parentId">
            <?foreach($categories as $item) {?>
            <option value="<?=$item['id']?>"><?=str_repeat('&nbsp;', 4*$item['level']).htmlspecialchars($item['name'])?></option>
            <?}?>
        </select><br />
        <p>Введите имя новой категории:</p>
        <input type="text" name="categoryName"><br />
        <p>Введите адрес новой категории:</p>
		<input type="text" name="url"><br />
        <input type="submit" value="Создать" name="btnsubmit">
    </form>
</div>

<div style="margin: 0 auto; width: 700px; text-align: center; padding-top: 10px; padding-bottom: 10px;">
	<h2>Создание поста</h2>
	<form action="" method="post">
    <p>Выберите категорию в которой вы хотите создать новый пост</p>
		<select name="categoryId">
            <?foreach($categories as $item) {?>
            <option value="<?=$item['id']?>"><?=str_repeat('&nbsp;', 4*$item['level']).htmlspecialchars($item['name'])?></option>
            <?}?>
        </select><br />
    <p>Название поста:</p>
    <input type="text" name="name" style="width:700px;"><br />
    <p>Перечислите тэги через запятую (без пробелов):</p>
    <p style="font-size: 12px;">Пример: "линукс,корова,Бухарест"</p>
    <input type="text" name="tags" style="width:700px;"><br />
    <p>Тело поста:</p>
    <p style="font-size: 12px;">Для разбивки поста на кат используйте конструкцию
    <?echo htmlspecialchars('<!-- cut -->');?></p>
	<textarea name="content" id="editor"></textarea><br />
	<input type="submit" value="Сохранить" name="materialsavebtn">
	</form>
</div>

</div>
<script type="text/javascript">
	CKEDITOR.replace( 'editor' );
</script>