<?php
session_start();
include_once "connect.php";
if ($_SESSION['status'] != 1) {
    header("Location /");
}
if(isset($_POST['submit'])){
    $id_user = $_SESSION['id_user'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $file = $_FILES["pictures"]["name"];

    $link->query("INSERT INTO `tovars` (`id`, `id_category`, `name`, `price`, `photo`) VALUES (NULL, '$category', '$name', '$price', '$file')");

    $uploads_dir = 'images';
    $tmp_name = $_FILES["pictures"]["tmp_name"];
    $name = basename($_FILES["pictures"]["name"]);
    move_uploaded_file($tmp_name, "$uploads_dir/$name");

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
                <input type="text" class="form-control" name="name" id="input-1">
            </div>
            <div class="form-group">
                <label for="input-2">Цена</label>
                <input type="number" class="form-control" name="price" id="input-2">
            </div>
            <div class="form-group">
                <label for="inputState">Категория</label>
                <select id="inputState" class="form-control" name="category">
                    <option selected>Выбрать</option>
                    <?php
                    $result_category = $link->query("SELECT * FROM `category`");
                    while ($row_category = mysqli_fetch_assoc($result_category)) {
                        ?>
                        <option value="<?= $row_category['id_category'] ?>"><?= $row_category['name_category'] ?></option>
                        <?php
                    }
                    ?>
                    ?>
                </select>
            </div>
            <div class="form-group custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile" name="pictures">
                <label class="custom-file-label" for="customFile">Изображение товара</label>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-secondary btn-lg btn-block" value="Добавить">
            </div>
        </form>
    </div>
</main>
