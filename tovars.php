<?php
session_start();
include_once "connect.php";
if(isset($_POST['price'])){
    $id_product = $_POST['id_product'];
    $id_user = $_SESSION['id_user'];

    $link->query("INSERT INTO `basket`(`id`, `id_user`, `id_tovar`) VALUES (NULL,'$id_user','$id_product')");
    $result_number = $link->query("SELECT * FROM `basket` WHERE `id_user` = '$id_user'");
    $_SESSION['number'] = $result_number->num_rows;
    header("Location: /tovars.php?id=".$_GET['id']);
}
include_once "header.php";
?>
<main>
	<?php
	$id_category = $_GET['id'];
	$result = $link->query("SELECT * FROM `category` WHERE `id_category` = '$id_category'");
	$row = mysqli_fetch_assoc($result);
	?>
	<h1 class="mb-5"><?= $row['name_category']; ?></h1>
	<hr class="liner">
	<div class="container">
		<div class="row">
			<?php
			$result_tovar = $link->query("SELECT * FROM `tovars` WHERE `id_category` = '$id_category'");
			while ($row_tovar = mysqli_fetch_assoc($result_tovar)) {
				?>
				<div class="col-md-4 mb-5">
					<div class="card border-0 bg-transparent">
					  <div class="card-body" style="background-color: #fae2e9;">
					    <div class="stas text-center"><?= $row_tovar['name']; ?></div>
					  </div>
					  <div class="card-img-top card-custom" 
					  style="background-image: url('/images/<?= $row_tovar['photo']; ?>');"></div>
					  <div>
					  	<form action="" method="POST">
                            <input type="hidden" name="id_product" value="<?= $row_tovar['id'] ?>">
                            <input type="submit" class="button_custom_add" name="price" value="Купить">
					  	</form>
					  	<div class="price"><?= $row_tovar['price'] ?> P.</div>
					  </div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</main>
<?php
include_once "footer.php";
?>