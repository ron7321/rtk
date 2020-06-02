<?php
session_start();
include_once "connect.php";
$id_tovar = $_GET['id'];
$result_tovar = $link->query("SELECT * FROM `tovars` WHERE `id` = '$id_tovar'");
$row_tovar = mysqli_fetch_assoc($result_tovar);
if ($_SESSION['status'] != 1) {
    header("Location /");
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    $link->query("UPDATE `tovars` SET `name` = '$name', `price` = '$price',`id_category` = '$category' WHERE `id` = '$id_tovar'");

    header("Location: /admin_tovars.php");
}
include_once "header.php";
?>
<main>
    <h1 class="mb-5">Добавление товара</h1>
    <hr class="liner">
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="input-1">Название</label>
                <input type="text" class="form-control" name="name" id="input-1" value="<?= $row_tovar['name'] ?>">
            </div>
            <div class="form-group">
                <label for="input-2">Цена</label>
                <input type="number" class="form-control" name="price" id="input-2"  value="<?= $row_tovar['price'] ?>">
            </div>
            <div class="form-group">
                <label for="inputState">Категория</label>
                <select id="inputState" class="form-control" name="category">
                    <option selected>Выбрать</option>
                    <?php
                    $result_category = $link->query("SELECT * FROM `category`");
                    while ($row_category = mysqli_fetch_assoc($result_category)) {
                        if($row_category['id_category'] == $row_tovar['id_category']){
                            ?>
                            <option value="<?= $row_category['id_category'] ?>" selected><?= $row_category['name_category'] ?></option>
                            <?php
                        }
                        else{
                            ?>
                            <option value="<?= $row_category['id_category'] ?>"><?= $row_category['name_category'] ?></option>
                            <?php
                        }
                    }
                    ?>
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-secondary btn-lg btn-block" value="Сохранить изменения">
            </div>
        </form>
    </div>
</main>
