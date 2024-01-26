<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>

<body>
    <h1>Trang chủ</h1>
    <h2>Danh mục sản phẩm</h2>

    <?php foreach ($categories as $cate) : ?>
        <a href="#"><?= $cate->cate_name ?></a> |
    <?php endforeach ?>

    <?php foreach ($products as $pro) : ?>
        <div>
            <a href="<?= ROOT_PATH ?>detail?id=<?= $pro->id ?>">
                <h3><?= $pro->name ?></h3>
            </a>
            <div>
                Price: <?= $pro->price ?>
            </div>
        </div>
    <?php endforeach ?>
</body>

</html>