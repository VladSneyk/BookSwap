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
            <meta charset="utf-8">
                <title>Книгообмін Хмельницький</title>
                     <?php require_once("includes/connection.php"); ?>
                    <link rel="stylesheet" href="Register.css">
                    <link rel="Stylesheet" href="StyleCSS/menu.css">
                    <script src="jquery-2.1.4.min.js"></script>
                    <script src="jquery.maskedinput.min.js"></script>
                    <link href="css/style1.css" media="screen" rel="stylesheet">
                    <link href="StyleCSS/bootstrap.min.css" rel="stylesheet">
                    <link href="StyleCSS/bootstrap-theme.min.css" rel="stylesheet">
                    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> 
                    <script type="text/javascript" src="js/jquery-ui.js"></script>

    </head>

<body>
        <header>

   <div class="navbar-wrapper">
      <div class="container">

<section id="menu">
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">BookSwap</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php"><img id="imgurl" src="images/main_page.jpg" alt="Головна сторінка"></a></li>
                <li><a class="menuha" href="reg.php">Реєстрація</a></li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Книги<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="show.php">Перегляд</a></li>
                    <li><a href="add.php">Добавлення</a></li>
                  </ul>
                </li>
                <li> 
                <section id="lk"> 
                <?php if ($_SESSION['session_username']!="") { 
                echo "<a class='menuha1' href='profile.php'>".$_SESSION['session_username']."</a>"."<br>"; 
                echo "<span><a class='menuha1' href='logout.php'>Вийти</a></span>"; 
                }
                ?> 
                </section> 
                </li> 
              </ul>
            </div>
          </div>
        </nav>
</section>

      </div>
    </div>


        </header>
<body>
		
                    <section>
          <form action="reg.php" id="registerform" method="post"name="registerform">
<p><br><br><br></p>
           <section class="dani">

      <article>
      <h3><b><label>Введіть свої дані</label></b></h3>
<table>

  <p><label>Прізвище:</label>
 <input class="input" id="full_prizv" name="full_prizv" size="32"  type="text" value="" pattern="[А-Я а-я Є є Ї ї І і]{2,}" title="Введіть своє прізвище" required></label></p>


<p><label>Ім'я:</label>
 <input class="input" id="full_name" name="full_name" size="32"  type="text" value="" pattern="[А-Я а-я Є є Ї ї І і]{2,}" title="Введіть своє ім'я" required></label></p>


<p><label>Номер:</label>
<input class="input" id="telephone" name="telephone"size="32"   type="text" value=""></label></p>
<script>
        $(function(){
          $("#telephone").mask("+38(999) 999-99-99");
        });
        </script>

<p><label>E-mail:</label>
<input class="input" id="email" name="email" size="32"type="email"  value=""></label></p>


<p><label>Логін:</label>
<input class="input" id="username" name="username"size="32" type="text" value=""></label></p>


<p><label>Пароль:</label>
<input class="input" id="password" name="password"size="32"   type="password" value=""pattern="{4,15}" title="Пароль повинен мати 4-12 символів" required></p>


<p><label>*Пароль:</label>
<input class="input" id="passwordd" name="passwordd"size="32"   type="password" value="" pattern="{4,15}" title="Пароль повинен мати 4-12 символів" required></p>

<label>Я прочитав правила сайту </label> <br>
      <label>i погоджуюсь з ними.</label><input type ="checkbox" required >
      <br>
 <p class="submit"><input class="button" id="submit" name= "register" type="submit" value="Зареєструватися"></p>
	  <p class="regtext">Вже зареєстровані? <a href= "logout.php">Війти в систему</a>!</p>
</table>
            </form>
              					
</section>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

</body>
</html>