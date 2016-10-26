<?php require_once("includes/connection.php"); ?>
<?php
session_start();
if(!isset($_SESSION["session_username"])):
header("location:vxod.php");
else:
?>
<?php require_once("includes/header.php"); ?>
<section class="session">
<p>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span> <a  id="out" href="logout.php"> Вийти</a> з системи</p>
</section>	
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
<a class="navbar-brand" href="#">BookSwap</a> 
</div> 
<div id="navbar" class="navbar-collapse collapse"> 
<ul class="nav navbar-nav"> 
<li><a href="index.php"><img id="imgurl" src="images/main_page.jpg" alt="Головна сторінка"></a></li> 
<li><a class="menuha" href="reg.php">Реєстрація</a></li> 
<li><a class="menuha" href="2.php">Новини</a></li> 
<li> 
<section id="lk"> 
<?php if ($_SESSION['username']=="" || $_SESSION['password']=="") { 
echo "<a class='menuha1' 'href='index.php'>Уввійти</a></span>"; 
} 
if ($_SESSION['username']!="" && $_SESSION['password']!="") { 
echo "<a class='menuha1' href='index.php'>".$_SESSION['session_username']."</a>"."<br>"; 
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
         /*$result = mysql_query("SELECT * FROM news ");
    while($row=mysql_fetch_array($result)){
      echo "<table>";
      echo "<tr>";
        $name=$row['name'];
        $author=$row['author'];
        $genre=$row['genre'];
        $photo=$row['photo'];  
        $description=$row['description'];
        echo $name;
        echo "<br>";
        echo "</tr>";
        echo "<tr>";
        echo $author;
        echo "<br>";
        echo "</tr>";
        echo "<tr>";
        echo $genre;
        echo "</tr>";
        echo "<tr>";
        echo $photo;
        echo "</tr>";
        echo "<tr>";
        echo $description;
        echo "</tr>";
            echo "<tr>
        <td><input type=\"button\" value=\"Редагувати\" onclick=\" location.href='edit.php'  \" id=\"edit\"></td>
            <td height='10'> </td>
        </tr>"; 
            echo "</table>";  
      } */
      
                /*$name=$nd['name'];
                $description=$nd['description'];
                $avtor=$nd['avtor'];
            // Здесь выводим сначала ссылкой название статьи или новости, затем описание
            echo '<a href="edit.php?id='.$nd["id"].'">'.$name.'</a> ';
             echo "<br>";
          echo $avtor;
          echo "<br>";
            echo $description;
             echo "<br>";
            }   */       
        ?>
    </section>
</body>
</html>
<?php endif; ?> 