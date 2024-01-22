<?php include_once "header.php" ?>

<!--Danh sách sản phẩm-->
<?php foreach ($products as $product) : ?>
    <div class="product">
        <a href="#">
            <h3><?= $product['name'] ?></h3>
        </a>
        <img src="<?= $product['image'] ?>" width="200" alt="">
    </div>
<?php endforeach ?>

<?php include_once "footer.php" ?>