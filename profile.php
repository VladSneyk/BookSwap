<?php
include_once("includes/connection.php");
 session_start();
 $username= $_SESSION['session_username'];
$resultat = mysql_query("SELECT * FROM usertbl WHERE username='$username'");
$array = mysql_fetch_array($resultat);
?>
<?php include("includes/header.php"); ?>
<section class="session">
<p>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </p>
<p></span> <a  id="out" href="profile.php"> Особистий кабінет</a></p>
<p></span> <a  id="out" href="logout.php"> Вийти</a> з системи</p>
</section>
   <html lang="en-GB">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="style.css" >    
    
<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jq.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

</head>
<body>


<h1>Вітаємо вас на нашому сайті!</h1> 
    <center>
        <div id="main">
  <div id="content">
    
            <div id="left">
              
<h2>Профіль <?php echo $array['username']; ?></h2>
 
 
 
<?php

$result = mysql_query("SELECT * FROM usertbl WHERE username='$username'");
    while($row=mysql_fetch_array($result)){
        $full_prizv=$row['full_prizv'];
        $full_name=$row['full_name'];
        $email=$row['email'];
        $telephone=$row['telephone'];  

     echo "Прізвище:  ".$full_prizv. "<br>";
     echo "Ім'я:  ".$full_name. "<br>";
     echo "Email:   ".$email. "<br>";
     echo "Телефон:  ".$telephone. "<br>";

      } 
      
?>
</center>