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
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

</head>
<body>
		
				<div class="text">
                    <section>
          <form action="index.php" id="registerform" method="post"name="registerform">
            <h2>Реєстрація </h2>
<table>

  <p><label for="user_login">Ім'я<br>
 <input class="input" id="full_name" name="full_name"size="32"  type="text" value=""></label></p>


<p><label for="user_login">Прізвище<br>
 <input class="input" id="full_prizv" name="full_prizv"size="32"  type="text" value=""></label></p>


<p><label for="user_pass">Мобільний телефон<br>
<input class="input" id="telephone" name="telephone"size="32"   type="text" value=""></label></p>


<p><label for="user_pass">E-mail<br>
<input class="input" id="email" name="email" size="32"type="email" value=""></label></p>


<p><label for="user_pass">Логін<br>
<input class="input" id="username" name="username"size="32" type="text" value=""></label></p>


<p><label for="user_pass">Пароль<br>
<input class="input" id="password" name="password"size="32"   type="password" value=""></p>


<p><label for="user_pass">Повторіть пароль<br>
<input class="input" id="passwordd" name="passwordd"size="32"   type="password" value=""></p>


 <p class="submit"><input class="button" id="submit" name= "register" type="submit" value="Зареєструватися"></p>
	  <p class="regtext">Вже зареєстровані? <a href= "logout.php">Війти в систему</a>!</p>
</table>
            </form>
              					
</div>
</body>
</html>