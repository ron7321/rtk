<?php
include_once "connect.php";
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$adres = $_POST['adres'];
	$lastname = $_POST['lastname'];
	$name = $_POST['name'];

	$link->query("INSERT INTO `user`(`id`, `password`, `lastname`, `firstname`, `email`, `tel`, `adress`,`status`) VALUES (NULL,'$password','$lastname','$name','$email','','$adres','0')");

	header('Location: /login.php');
}
include_once "header.php";
?>
<main>
	<h1 class="mb-5">Регистрация</h1>
	<hr class="liner">
	<div class="container">
		<form action="register.php" method="POST">
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Email</label>
		      <input type="email" name="email" class="form-control" id="inputEmail4">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Пароль</label>
		      <input type="password" name="password" class="form-control" id="inputPassword4">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Адрес</label>
		    <input type="text" class="form-control" name="adres" id="inputAddress" placeholder="1234 Main St">
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Фамилия</label>
		      <input type="text" class="form-control" name="lastname" id="inputEmail4">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Имя</label>
		      <input type="text" class="form-control" name="name" id="inputPassword4">
		    </div>
		  </div>
		  <input type="submit" name="submit" class="btn btn-secondary btn-lg btn-block" value="Регистрация">
		</form>
	</div>
</main>
