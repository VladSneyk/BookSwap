<?php require_once("includes/connection.php"); ?>
<?php
	session_start();
	if(isset($_SESSION["session_username"])){
	header("Location: add.php");
	}
	if(isset($_POST["login"])){
	if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	$query =mysql_query("SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");
	$numrows=mysql_num_rows($query);

	if($numrows!=0)
 {
while($row=mysql_fetch_assoc($query))
 {
	$dbusername=$row['username'];
  $dbpassword=$row['password'];
 }
  if($username == $dbusername && $password == $dbpassword)
 {

	 $_SESSION['session_username']=$username;	
 /* Перенаправление браузера */
   header("Location: add.php");
	}
	} else {
	echo  "Invalid username or password!";
 }
	} else {
    $message = "All fields are required!";
	}
	}
	?>

	<?php include("includes/header.php"); ?>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/main.js"></script>

</head>
<body>
				<div class="text">
                    <section>
          <form action="#" method="post" class="form">
            <h2>Вхід </h2>
<table>
	
<div id="login">
<form action="" id="loginform" method="post"name="loginform">
<p><label for="user_login">Логін<br>
<input class="input" id="username" name="username"size="20"
type="text" value=""></label></p>
<p><label for="user_pass">Пароль<br>
 <input class="input" id="password" name="password"size="20"
  type="password" value=""></label></p> 
	<p class="submit"><input class="button" id="submit" name="login" type= "submit" value="Війти"></p>
	<p class="regtext">Ще не зареєстувалися?<a href= "index.php">Реєстрація</a>!</p>
   </form>
  </div>
</table>
            </form>
                      
</div>
</body>
