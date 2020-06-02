<?php
session_start();
include_once "connect.php";
$id_tovar = $_GET['id'];
if ($_SESSION['status'] != 1) {
    header("Location /");
}
$link->query("DELETE FROM `tovars` WHERE `id` = '$id_tovar'");
$link->query("DELETE FROM `basket` WHERE `id_tovar` = '$id_tovar'");

header("Location: /admin_tovars.php");
?>