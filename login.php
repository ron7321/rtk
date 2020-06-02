<?php
include_once "connect.php";
include_once "header.php";
?>
<main>
	<h1 class="mb-5">Авторизация</h1>
	<hr class="liner">
	<div class="container">
		<form action="php/logick_login.php" method="POST">
			<div class="form-group">
	    		<label for="inputAddress">Ваша почта</label>
		    	<input type="email" class="form-control" name="login">
  			</div>
			<div class="form-group">
		    	<label for="inputAddress">Пароль</label>
		    	<input type="password" class="form-control <?php if(isset($_GET['error'])){echo 'is-invalid';} ?>" name="password" placeholder="Пароль">
			</div>
			<input type="submit" name="submit" class="btn btn-secondary btn-lg btn-block" value="Вход">
		</form>
	</div>
</main>
<?php
include_once "footer.php";
?>