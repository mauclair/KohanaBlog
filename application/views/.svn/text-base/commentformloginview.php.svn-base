<!-- Форма логина -->
<div id="slider2">
	<div id="slider-in2">
		<form action="/comments/insertcomment" method="post">
			<textarea rows="6" cols="40" name="text" placeholder="Введите текст комментария"></textarea><br />
			<input type="submit" name="btnsubmit" value="Отправить" style="width: 100px; height: 25px; margin-top: 10px">
		</form>
	</div>
	<div id="open-div"><a href="#" id="open-button">Оставить комментарий</a></div>
	<div id="close-div" style="display:none"><a href="#" id="close-button">Закрыть</a></div><br />
</div>

<script type="text/javascript">
	function OpenSlider()
	{
		$("#slider-in2").animate({ height: "170px" });
		$("#login").focus();
		$("#open-div").toggle();
		$("#close-div").toggle();
		return false;
	}

	function CloseSlider()
	{
		$("#slider-in2").animate({ height: "0" });
		$("#open-div").toggle();
		$("#close-div").toggle();
		return false;
	}

	$(document).ready(function(){
		$("#open-button").click(OpenSlider);
		$("#close-button").click(CloseSlider);
	});
</script>