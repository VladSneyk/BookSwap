<?php 
include_once("includes/connection.php");
session_start();
 $username= $_SESSION['session_username'];
?>
<?php include("includes/header.php"); ?>
<?php


////////Зміна фамилии
 
 if (isset($_POST['name'])){//Если существует прізвище
    $name = $_POST['name']; 
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $name = trim($name);//удаляем все лишнее
    
    if ($name == '') {
        exit("Вы не ввели назву книги<br><a href='lk.php'>Повернутися назад</a>");
    }
 
    $up = mysql_query("UPDATE news SET full_prizv='$name' WHERE username='$username'");//обновляем фамилию
    if ($up=='TRUE') {//если верно, то обновляем его в сессии
        $_SESSION['lastname'] = $lastname;
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?username=".$username."'>";
    }
}


 ////////Зміна имени
 
 else if (isset($_POST['author'])){//Якщо існує ім'я
    $author = $_POST['author'];
    $author = stripslashes($author);
    $author = htmlspecialchars($author);
    $author = trim($author);//удаляем все лишнее
    
    if ($author == '') {
        exit("Ви не ввели автора книги<br><a href='lk.php'>Повернутися назад</a>");
    }
 
    $up = mysql_query("UPDATE news SET full_name='$author' WHERE username='$username'");//обновляем имя
    if ($up == true) {
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?username=".$username."'>";
    }
}

////////Зміна email
 
 if (isset($_POST['genre'])){//Якщо існує email
    $genre = $_POST['genre']; 
    $genre = stripslashes($genre);
    $genre = htmlspecialchars($genre);
    $genre = trim($genre);//удаляем все лишнее
    
    if ($genre == '') {
        exit("Ви не ввели жанр книги<br><a href='lk.php'>Повернутися назад</a>");
    }
 
    $up = mysql_query("UPDATE news SET email='$genre' WHERE username='$username'");//обновляем фамилию
    if ($up=='TRUE') {//если верно, то обновляем его в сессии
        $_SESSION['lastname'] = $lastname;
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?username=".$username."'>";
    }
}
 

 
////////Зміна номера телефону
 
else if (isset($_POST['opus'])){//Якщо існує телефон
    $opus = $_POST['opus'];
    $opus = stripslashes($opus);
    $opus = htmlspecialchars($opus);
    $opus = trim($opus);//удаляем все лишнее
    
    if ($opus == '') {
        exit("Ви не ввели телефон<br><a href='lk.php'>Повернутися назад</a>");
    }
 
    $up = mysql_query("UPDATE news SET telephone='$opus' WHERE username='$username'");//обновляем страну
    if ($up == true) {
        echo "<meta http-equiv='Refresh' content='0; URL=profile.php?username=".$username."'>";
    }
}

?>
