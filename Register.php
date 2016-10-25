<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="Register.css">
		
		<script src="jquery-2.1.4.min.js"></script>

	<script src="jquery.maskedinput.min.js"></script>
		<meta charset="utf-8">
		<title>Реєстрація</title>

	</head>
	<header>
			<center><H1><label>Реєстрація на сайті</label></H1></center>
			
			

			</header>
	<div class=body>

		<body>
			
			
						
			<br>

			<div class=dani>

			<article>
			<h3><b><label>Введіть свої дані</label></b></h3>
			<form action="" method="post">
			<label>Email</label>
			<input type ="email" name="email" required><br>
			<br>
			<label>Прізвище</label>
			<input type ="prizv" maxlength="20" name="prizv" pattern="[А-Я а-я Є є Ї ї І і]{2,}" title="Використовуйте символи [А-Я а-я] "  required><br>
			<br>
				<label>І'мя</label>
			<input type ="name" maxlength="20" name="name" pattern="[А-Я а-я Є є Ї ї І і]{2,}" title="Використовуйте символи [А-Я а-я] " required><br>
			<br>
				<label>По-Батькові</label>
			<input type ="batk" maxlength="20" name="batk" pattern="[А-Я а-я Є є Ї ї І і]{2,}" title="Використовуйте символи [А-Я а-я] " required><br>
		
			<br>
			<label>Область</label>
			<input type ="obl" maxlength="30" name="obl" pattern="[А-Я а-я Є є Ї ї І і]{2,}" title="Введіть свою область" required><br>
			<br>
				<label>Місто</label>
			<input type ="misto" maxlength="30" name="misto" pattern="[А-Я а-я Є є Ї ї І і]{2,}" title="Введіть своє місто" required><br>
			<br>
				<label>Номер телефон</label>
			<input id="phone" type="tel" maxlength="20" name="nomer" title="Введіть номер свого телефону" required><br> 
				<script>
				$(function(){
  				$("#phone").mask("+38(999) 999-99-99");
				});
				</script>

			<br>
			<label>Пароль</label>
			<input type ="password" maxlength="12" name="password" pattern="{4,15}" title="Пароль повинен мати 4-12 символів" required><br>
			<br>

			<label>Я прочитав правила сайту </label> <br>
			<label>i погоджуюсь з ними.</label><input type ="checkbox" required >
			<br>
			  <input type="submit" value="Зареєструватися">
			</form>
			</article>
			</div>



		</body>
	
	</div>
</html>