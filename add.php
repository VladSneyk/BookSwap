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
		<p>Додавання новин</p>
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
</body>

</html>  <?php endif; ?> 
