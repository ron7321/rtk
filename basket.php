<?php
session_start();
include_once "connect.php";
if(isset($_POST['delete'])){
    $id = $_POST['id_delete'];
    $id_user = $_SESSION['id_user'];
    $link->query("DELETE FROM `basket` WHERE `id` = '$id'");
    $result_number = $link->query("SELECT * FROM `basket` WHERE `id_user` = '$id_user'");
    $_SESSION['number'] = $result_number->num_rows;
    header("Location: /basket.php");
}
$id_user = $_SESSION['id_user'];
$result_number = $link->query("SELECT * FROM `basket` WHERE `id_user` = '$id_user'");
include_once "header.php";
$id_user = $_SESSION['id_user'];
?>
<main>
	<h1 class="mb-5">Корзина</h1>
	<hr class="liner">
	<div class="container">
        <?php
        if($result_number->num_rows != 0) {
            ?>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Название</th>
                    <th scope="col">Цена</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $result_calc = 0;
                $result_tovar = $link->query("SELECT *,basket.id as idbasket  FROM `basket` INNER JOIN `tovars` ON basket.id_tovar = tovars.id  WHERE `id_user` = '$id_user'");
                while ($row_tovar = mysqli_fetch_assoc($result_tovar)) {
                    ?>
                    <tr>
                        <td><?= $row_tovar['name']; ?></td>
                        <td><?= $row_tovar['price'] ?> р.</td>
                        <td class="float-right">
                            <form action="" method="POST">
                                <input type="hidden" name="id_delete" value="<?= $row_tovar['idbasket'] ?>">
                                <input type="submit" class="button_custom_add" name="delete" value="Удалить">
                            </form>
                        </td>
                    </tr>
                    <?php
                    $result_calc += $row_tovar['price'];
                }
                ?>
                </tbody>
            </table>
            <div class="w-100 mb-3">
                Итого: <b><?= $result_calc ?> р.</b>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Адрес доставки</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Комментарий</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-secondary btn-lg btn-block" value="Отправить">
            </form>
        <?php
        }
        else{
            echo '<p class="text-center">Корзина пуста</p>';
        }
        ?>
	</div>
</main>
<?php
include_once "footer.php";
?>