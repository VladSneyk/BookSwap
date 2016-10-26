<?php 
session_start(); 
require_once("includes/connection.php");
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
header("Location: profile.php"); 
} 
} else { 
echo "Неправильний логін або пароль. Введіть заново."; 
} 
} else { 
$message = "Всі поля захищені!"; 
} 
} 
?> 

<!DOCTYPE html>
<html>
 <section id="vse">
    <head>
            <meta charset="utf-8">
                <title>Книгообмін Хмельницький</title>
                     <?php require_once("includes/connection.php"); ?>
                    <link href="css/style1.css" media="screen" rel="stylesheet">
                    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'rel='stylesheet' type='text/css'>
                    <link rel="Stylesheet" href="StyleCSS/style.css">
                    <link rel="Stylesheet" href="StyleCSS/menu.css">
                    <link href="StyleCSS/bootstrap.min.css" rel="stylesheet">
                    <link href="StyleCSS/bootstrap-theme.min.css" rel="stylesheet">
                    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                    <script type="text/javascript" src="jquary/jquery-2.1.4.min.js"></script> 
                    <script type="text/javascript" src="jquary/jquery-ui.js"></script>
                    <script type="text/javascript" src="jav.js"></script>
                    <script type="text/javascript" src="js/main.js"></script> 
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

            <section id="login_form">

    <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <h2 class="featurette-heading">
            <style type="text/css">
                    #login_form {
                        background: url(images/main.jpg);
                        background-size: 100% 100%;
                    }
                </style>
                <section id="logo">
                    <h1>Книгообмін</h1>
                        <section id="s1">у Хмельницькому</section id="s1"> <br>
                        <section id="s2">Залиш свою пропозицію та переглянь уже запропоновані :)</section id="s2">
                </section></h2>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <form class="form-horizontal" action="" id="loginform" method="post" name="loginform">
                    <table>
                        <div id="login">
                            <h2>LogIn</h2>
                                <div class="form-group">
                                    <label for="user_login" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Логін</label>
                                        <div class="col-xs-2 col-sm-4 col-md-4 col-lg-10">
                    <input name="username" size="20" value="" type="text" class="form-control" id="username" placeholder="Логін">
                                        </div>
                                </div>                                    

                                <div class="form-group">
                                    <label for="user_pass" class="col-xs-2 col-sm-2 col-md-2 col-lg-2 control-label">Пароль</label>
                                        <div class="col-xs-2 col-sm-4 col-md-4 col-lg-10">
                    <input id="password" name="password" type="password" size="20" class="form-control" value="" placeholder="Пароль">
                                        </div>
                                </div> 

                                <div class="form-group">
                        <div class="col-sm-offset-2 col-xs-offset-2 col-md-offset-2 col-lg-offset-2 col-xs-2 col-sm-4 col-md-4 col-lg-10">
                        <button id="submit" name="login" type="submit" class="btn btn-primary btn-lg btn-block btn-success">Ввійти</button>
                                    </div>
                                </div>
                                <p class="regtext">Ще не зареєстувалися? <a href= "reg.php">Реєстрація</a>!</p>
                        </div>
                    </table> 
            </form>      
        </div>

        </div>  

            </section>

<section id="main">
    <section id="content">

<section id="vk">
   <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
            <a href="https://vk.com/knigoobmin">
        <img id="img_vk" class="featurette-image img-responsive" src="images/vk.jpg" alt="Офіційна сторінка ВК: Книгообмін Хмельницький">
            </a>
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">О так! Це добре. <span class="text-muted">Дивіться самі.</span></h2>
          <p class="lead">У нашого сайту є офіційна спільнота в соціальній мережі "Вконтакте". Натиснувши на картинку ви зможете перейти на сторінку спільноти, де можете переглянути додаткові новини та пости від користувачів мережі.</p>
        </div>
      </div>
</section>

        <div class="container header">
            <div class="container-fluide">

            <h1 class="text-uppercase">Чому саме ми?</h1>
                <div class="row text-uppercase" >

            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
              <span class="glyphicon glyphicon-search"></span>
              <p class="ti">Вільний доступ</p>
            </div>

            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
              <span class="glyphicon glyphicon-heart"></span>
              <p class="ti">Нас люблять</p>
            </div>

            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
              <span class="glyphicon glyphicon-thumbs-up"></span>
              <p class="ti">Якісний сервіс</p>
            </div>

            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
              <span class="glyphicon glyphicon-sunglasses"></span>
              <p class="ti">Ми просто круті</p>
            </div>

            </div>
        </div>                    
                         
    </section>
</section>
            
<footer>
    <a href="#top">Наверх</a><br>
        <address>(c) IT-бобри, Україна, Хмельницький, вул.Зарічанська 10/2</address>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

</body>
</section>
</html>
