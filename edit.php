<?php require_once("includes/connection.php"); ?>
<?php
session_start();
if(!isset($_SESSION["session_username"])):
header("location:vxod.php");
else:
?>

<?php 
session_start(); 
?> 
<?php 
if ($_SESSION['session_username']=="") { 
header("location:index.php"); 
} 
?>
<?php require_once("includes/header.php"); ?>
<section class="session">
<p>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span> <a  id="out" href="logout.php"> Вийти</a> з системи</p>
</section>	
	<header>
		<p>Редагування новин</p>
	</header>
	 <?php  if(isset($_GET["id"]))
{$id = $_GET["id"];}
else{
header("location:show.php");
}
	 $sql = mysql_query("SELECT * FROM news WHERE id='$id'");
while ($nd = mysql_fetch_array ($sql))
{?>
	<div class="panel panel-default">
  <div class="panel-body">
    <?php  $name=$nd['name'];
                $avtor=$nd['avtor'];
                echo $name;
             echo "<br>";
          echo $avtor;
                ?>
  </div>
  <div class="panel-footer"><?php $description=$nd['description']; 
  echo $description;
  ?></div>
</div>
<?php } ?>
	

<?php


// снова подключение

/*$sql = mysql_query("SELECT * FROM news WHERE id='$id'");
while ($nd = mysql_fetch_array ($sql))
{
	  $name=$nd['name'];
	  $description=$nd['description'];
	  $avtor=$nd['avtor'];
            // Здесь выводим сначала ссылкой название статьи или новости, затем описание
            echo $name;
            echo "<br>";
// Здесь выводим текс полный
 			echo $avtor;
            echo "<br>";
            echo $description;
} */
?>
</body>

</html>
<?php endif; ?> 
