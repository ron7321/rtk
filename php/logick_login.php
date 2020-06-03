<?php
session_start();
include_once "../connect.php";

$login = $_POST['login'];
$password = $_POST['password'];

$result = $link->query("SELECT * FROM `user` WHERE `email` = '$login' AND `password` = '$password'");
if($result->num_rows >= 1){
	$row = mysqli_fetch_assoc($result);
	if($row['status'] == 1){
		$_SESSION['status'] = 1;
		header('Location: /');
	}
	else{
		$_SESSION['status'] = 0;
		header('Location: /');
	}
	$_SESSION['id_user'] = $row['id'];
    $id_user = $row['id'];
    $result_number = $link->query("SELECT * FROM `basket` WHERE `id_user` = '$id_user'");
    $_SESSION['number'] = $result_number->num_rows;
}
else{
	header('Location: /login.php?error=false');
}
?>