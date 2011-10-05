<div style="margin: 0 auto; width: 700px; text-align: center; padding: 10px;">
<!--Вызов отображение формы логина-->

<!-- / Вызов отображение формы логина-->

<!-- Вывод сообщения об успешной смене пароля -->
<?if(isset($newpassok)){?>
	<p style="text-align:center; color:green;">
		Новый пароль успешно сохранен
	</p>
<?}?>
<!-- /Вывод сообщения об успешной смене пароля -->

<?if(isset($newuserok)){?>
	<p style="text-align:center; color:green;">
		Смена имени пользователя прошла успешно
	</p>
<?}?>

<?if(isset($inviteok)){?>
	<p style="text-align:center; color:green;">
		Инвайт успешно отправлен
	</p>
<?}?>

<!-- Вывод ошибок валидации при сохранении нового пароля -->
<? if(isset($errors)){?>
<?foreach($errors as $item){?>
<p style="color:red"><?=$item?></p>
<?}?>
<?}?>
<!-- / Вывод ошибок валидации при сохранении нового пароля -->

<h2 style="border-bottom: 1px dotted;">Личный кабинет пользователя</h2><br />
<p>Имя пользователя и адрес эл. почты:<span style="border-bottom: 1px dotted;"> <?=$username." / ".$email?></span></p>
<p><a href="/comments/showcomments/<?=Auth::instance()->get_user()?>">Показать мои комментарии</a></p>
<p><b>Если хотите сменить пароль:</b> <input type="checkbox" id="showpassbtn"><label for="showpassbtn"> Не прятать пароль</label></p>
<form action="" method="post">
	<table class="changepassword" style="margin-left: 130px;">
		<tr>
			<td style="text-align: right">Старый пароль:</td>
			<td><input type="password" name="oldpass" id="oldpass"></td>
			<td>
				<span style="display: none" id="oldpassok"><img src="/img/ok.png" title="Старый пароль введен правильно" alt="Старый пароль введен правильно"></span>
				<span style="display: none" id="oldpasserror"><img src="/img/error.png" title="Ошибка в старом пароле" alt="Ошибка в старом пароле"></span>
			</td>
		</tr>
		<tr>
			<td style="text-align: right">Новый пароль:</td>
			<td><input type="password" name="newpass1" id="newpass1"></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align: right">Повторите новый пароль:</td>
			<td><input type="password" name="newpass2" id="newpass2"></td>
			<td>
				<span style="display: none" id="newpassmatchesok"><img src="/img/ok.png" title="Пароли совпадают" alt="Пароли совпадают"></span>
				<span style="display: none" id="newpassmatcheserror"><img src="/img/error.png" title="Пароли несовпадают" alt="Пароли несовпадают"></span>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="Сохранить новый пароль" name="btnsubmit"></td>
		</tr>
	</table>
</form>
<br />
<HR>
<br />
<form action="" method="post">
	<table class="changepassword" style="margin-left: 130px;">
		<tr>
			<td style="text-align: right">Изменить имя пользователя:</td>
			<td><input type="text" name="username" id="username"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="Сохранить новое имя" name="btnsubmit2"></td>
		</tr>
	</table>
</form>
<br />
<HR>
<br />
<form action="" method="post">
	<p>Отправить инвайт</p>
	<table class="changepassword" style="margin-left: 130px;">
		<tr>
			<td style="text-align: right">Введите e-mail:</td>
			<td><input type="text" name="invite" id="invite"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="Пригласить друга" name="btnsubmit3"></td>
		</tr>
	</table>
</form>
</div>

<script type="text/javascript">
	function checkOldPass()
	{
		var oldpass = $("#oldpass").val();

		$.ajax({
		  type: "POST",
		  data: "oldpass=" + oldpass,
		  url: "/ajax/checkOldPass",
		  dataType: "json",
		  success: function(data)
		  {
			if(data.result)
			{
				$("#oldpassok").css('display','inline');
				$("#oldpasserror").css('display','none');
			}
			else
			{
				$("#oldpasserror").css('display','inline');
				$("#oldpassok").css('display','none');
			}
		  }
		})
	}

	function showPass()
	{
		var checked = $("#showpassbtn").attr('checked');

		if(checked == "checked")
		{
			document.getElementById('oldpass').type = 'text';
			document.getElementById('newpass1').type = 'text';
			document.getElementById('newpass2').type = 'text';
		}
		else
		{
			document.getElementById('oldpass').type = 'password';
			document.getElementById('newpass1').type = 'password';
			document.getElementById('newpass2').type = 'password';
		}
	}

	function matchesPass()
	{
		if($("#newpass1").val() == $("#newpass2").val())
		{
			$("#newpassmatchesok").css('display','inline');
			$("#newpassmatcheserror").css('display','none');
		}
		else
		{
			$("#newpassmatcheserror").css('display','inline');
			$("#newpassmatchesok").css('display','none');
		}
	}

	$(document).ready(function(){
		$("#oldpass").blur(checkOldPass);
		$("#showpassbtn").click(showPass);
		$("#newpass2").keyup(matchesPass);
	});
</script>
