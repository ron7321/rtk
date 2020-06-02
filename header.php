<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
</head>
<body>
<header>	
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand" href="#">
	  	<img src="/images/тоторо.png" alt="" width="100">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav ml-auto">
	      <a class="nav-item stas p-3" href="/">Главная</a>
	      <a class="nav-item stas p-3" href="shop.php">адреса магазинов</a>
	      <a class="nav-item stas p-3" href="feedback.php">отзывы</a>
	      <?php
	      if(!isset($_SESSION['id_user'])){
	      	echo '<a class="nav-item stas p-3" href="register.php">регистрация</a>';
	      	echo '<a class="nav-item stas p-3" href="login.php">вход</a>';
	      }
	      else{
	      	if($_SESSION['status'] == 1){
	      		echo '<a class="nav-item stas p-3" href="admin_tovars.php">товары (админ)</a>';
	      		echo '<a class="nav-item stas p-3" href="exit.php">выход</a>';
	      	}
	      	else{
	      	    if($_SESSION['number'] == 0){
                    echo '<a class="nav-item stas p-3" href="basket.php">корзина</a>';
                }
	      	    else{
                    echo '<a class="nav-item stas p-3" href="basket.php">корзина<span>'.$_SESSION['number'].'</span></a>';
                }
	      		echo '<a class="nav-item stas p-3" href="exit.php">выход</a>';
	      	}
	      }
	      ?>
	    </div>
	  </div>
	</nav>
</header>