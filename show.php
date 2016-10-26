<?php require_once("includes/connection.php"); ?>
<?php
session_start();
?>
<?php require_once("includes/header.php"); ?>
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

</div> 
</div> 
		<p>Перегляд новин</p>
	</header>
    <?php  $sql = mysql_query("SELECT * FROM news");
        while ($nd = mysql_fetch_array ($sql))
            {?>
    <div class="panel panel-default">
  <div class="panel-body">
    <?php  $name=$nd['name'];
                $avtor=$nd['avtor'];
                echo '<a href="edit.php?id='.$nd["id"].'">'.$name.'</a> ';
             echo "<br>";
          echo $avtor;
                ?>
  </div>
  <div class="panel-footer"><?php $description=$nd['description']; 
  echo $description;
  ?></div>
</div>
<?php } ?>
<section class = "news">
 <?php     
        ?>
    </section>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
              <script src="js/bootstrap.min.js"></script>
              <script src="js/docs.min.js"></script>
</body>
</html>