<?php
session_start();
include_once "connect.php";
if ($_SESSION['status'] != 1) {
    header("Location /");
}
include_once "header.php";
?>
    <main>
        <h1 class="mb-5">Управление товарами</h1>
        <hr class="liner">
        <div class="container">
            <a href="add_product.php" class="btn btn-secondary mb-4 btn-lg btn-block">Добавить товар</a>
            <table id="example" class="table table-striped table-bordered dataTable no-footer">
                <thead class="thead-dark">
                <tr role="row">
                    <th class="w-15p sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        aria-sort="ascending" aria-label="Product name: activate to sort column descending"
                        style="width: 484px;">Название продукта
                    </th>
                    <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        aria-label="Category: activate to sort column ascending" style="width: 288px;">Категория
                    </th>
                    <th class="wd-20p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        aria-label="Price: activate to sort column ascending" style="width: 152px;">Цена
                    </th>
                    <th class="wd-10p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                        aria-label="Action: activate to sort column ascending" style="width: 183px;">Действия
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php
                $result_tovar = $link->query("SELECT * FROM `tovars` INNER JOIN `category` ON tovars.id_category = category.id_category");
                while ($row_tovar = mysqli_fetch_assoc($result_tovar)) {
                    ?>
                    <tr role="row" class="odd">
                        <td class="sorting_1 text-center">
                            <img src="/images/<?= $row_tovar['photo']; ?>" style="max-width: 120px;" alt="img" class="h-7 w-7">
                            <p class="d-inline-block align-middle mb-0 ml-1">
                                <a href="" class="d-inline-block align-middle text-dark mb-0 product-name font-weight-semibold"><?= $row_tovar['name']; ?></a><br>
                            </p>
                        </td>
                        <td><?= $row_tovar['name_category']; ?></td>
                        <td><?= $row_tovar['price'] ?> P.</td>
                        <td>
                            <a href="/edit_tovars.php?id=<?= $row_tovar['id'] ?>" class="btn w-100 btn-info btn-sm mb-2 mb-xl-0 text-white">Редактировать</a>
                            <a href="/delete_tovars.php?id=<?= $row_tovar['id'] ?>" class="btn w-100 btn-danger btn-sm mb-2 mb-xl-0 text-white">Удалить</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>
    </main>
