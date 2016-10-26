<?php require_once("includes/header.php"); ?>
<?php
	if(isset($_POST["register"])){
	if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['full_prizv']) &&
		!empty($_POST['telephone']) && !empty($_POST['passwordd'])) {
  $full_name= htmlspecialchars($_POST['full_name']);
	$email=htmlspecialchars($_POST['email']);
 $username=htmlspecialchars($_POST['username']);
 $password=htmlspecialchars($_POST['password']);
 $passwordd=htmlspecialchars($_POST['passwordd']);
  $full_prizv=htmlspecialchars($_POST['full_prizv']);
  $telephone=htmlspecialchars($_POST['telephone']);
 

	$query = ("SELECT id FROM usertbl WHERE username='$username'");
            $sql = mysql_query($query) or die(mysql_error());
            
            if (mysql_num_rows($sql) > 0) {
                echo '<font color="red">Пользователь с таким логином зарегистрирован!</font>';
            }
            else {
                $query2 = ("SELECT id FROM usertbl WHERE email='$email'");
                $sql = mysql_query($query2) or die(mysql_error());
                if (mysql_num_rows($sql) > 0){
                    echo '<font color="red">Пользователь с таким e-mail уже зарегистрирован!</font>';
                }
                else{
                    $query = "INSERT INTO usertbl (full_name, email, username, password, full_prizv, telephone )
                              VALUES ('$full_name','$email','$username','$password' ,'$full_prizv','$telephone')";
                    $result = mysql_query($query) or die(mysql_error());;
                    echo '<font color="green"> Вы успешно зарегистрировались!</font><br>';
                    
                                
                }
            }
	}
	}
	?>

	<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
  <section>
<html>
<head>
  <link rel="stylesheet" href="Register.css">
    
    <script src="jquery-2.1.4.min.js"></script>

  <script src="jquery.maskedinput.min.js"></script>
    
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

</head>
<header>
      <center><H1><label>Реєстрація на сайті</label></H1></center>
      
      

      </header>
<body>
		
                    <section>
          <form action="index.php" id="registerform" method="post"name="registerform">

           <div class=dani>

      <article>
      <h3><b><label>Введіть свої дані</label></b></h3>
<table>

  <p><label for="user_login">Ім'я</label>
 <input class="input" id="full_name" name="full_name"size="32"  type="text" value="" pattern="[А-Я а-я Є є Ї ї І і]{2,}" title="Введіть свою область" required></label></p>


<p><label for="user_login">Прізвище</label>
 <input class="input" id="full_prizv" name="full_prizv"size="32"  type="text" value="" pattern="[А-Я а-я Є є Ї ї І і]{2,}" title="Введіть свою область" required></label></p>


<p><label for="user_pass">Мобільний номер</label>
<input class="input" id="telephone" name="telephone"size="32"   type="text" value=""></label></p>
<script>
        $(function(){
          $("#phone").mask("+38(999) 999-99-99");
        });
        </script>

<p><label for="user_pass">E-mail</label>
<input class="input" id="email" name="email" size="32"type="email"  value=""></label></p>


<p><label for="user_pass">Логін</label>
<input class="input" id="username" name="username"size="32" type="text" value=""></label></p>


<p><label for="user_pass">Пароль</label>
<input class="input" id="password" name="password"size="32"   type="password" value=""pattern="{4,15}" title="Пароль повинен мати 4-12 символів" required></p>


<p><label for="user_pass">Повторіть пароль</label>
<input class="input" id="passwordd" name="passwordd"size="32"   type="password" value="" pattern="{4,15}" title="Пароль повинен мати 4-12 символів" required></p>

<label>Я прочитав правила сайту </label> <br>
      <label>i погоджуюсь з ними.</label><input type ="checkbox" required >
      <br>
 <p class="submit"><input class="button" id="submit" name= "register" type="submit" value="Зареєструватися"></p>
	  <p class="regtext">Вже зареєстровані? <a href= "logout.php">Війти в систему</a>!</p>
</table>
            </form>
              					
</div>
</body>
</html>
  </div>