<?php require_once("includes/connection.php"); ?>
<?php
session_start();
if(!isset($_SESSION["session_username"])){
header("Location: index.php");
}	

?>
<?php require_once("includes/header.php"); ?>
<!DOCTYPE html>
<html>
 <section id="vse">
    <head>
            <meta charset="utf-8">
                <title>Добавлення новин</title>
                     <?php require_once("includes/connection.php"); ?>
                    <link href="css/style1.css" media="screen" rel="stylesheet">
                    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'rel='stylesheet' type='text/css'>
                    <link rel="Stylesheet" href="StyleCSS/style.css">
                    <link rel="Stylesheet" href="StyleCSS/style1.css">
                    <link rel="Stylesheet" href="StyleCSS/menu.css">
                    <link href="StyleCSS/bootstrap.min.css" rel="stylesheet">
                    <link href="StyleCSS/bootstrap-theme.min.css" rel="stylesheet">
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
	<?php
if(isset($_POST["add"])){
	if(!empty($_POST['name']) && !empty($_POST['author']) && !empty($_POST['description']))
	{
		$name=htmlspecialchars($_POST['name']);
		$author=htmlspecialchars($_POST['author']);
		$genre=htmlspecialchars($_POST['genre']);
		$photo=htmlspecialchars($_POST['photo']);
		$description=htmlspecialchars($_POST['description']);
		$avtor=$_SESSION['session_username'];

                    $sql="INSERT INTO news
  					(name, author, genre, photo, description, avtor)
						VALUES('$name','$author','$genre','$photo' ,'$description', '$avtor')";
  						$result=mysql_query($sql);
	}
}
?>
<section class="add">
	<form action="add.php" id="addrform" method="post" name="addrform"> 
<p>Поля * повинні бути обов'язково заповнені</p><br><br> 
<p><label>Введіть назву книги *<br> 
<input clas="input" id="name" name="name" size="40" type="text"></p> 

<p><label>Введіть автора книги *<br> 
<input class="input" id="author" name="author" size="40" type="text"></p> 

<p><label>Введіть жанр книги <br> 
<input class="input" id="genre" name="genre" size="40" type="text"></p> 

<p><label>Фото<br> 
<input class="input" id="photo" name="photo" type="file"></p> 

<p><label>Введіть опис книги *<br> 
<input class="input" id="description" name="description" size="40" type="text"></p> 

<p class="submit"><input class="button" id="add" name= "add" type="submit" value="Додати"></p>
</section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

</body>
</html> 