<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết</title>
</head>

<body>
    <h1>Chi tiết sản phẩm</h1>
    <div>
        <h2><?= $product->name ?></h2>
        <div>
            Đơn giá: <?= $product->price ?>
        </div>
        <div>
            <?= $product->detail ?>
        </div>
    </div>
</body>

</html>