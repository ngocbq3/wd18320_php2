<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sách</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        Tên sách: <input type="text" name="tensach" id=""> <br>
        Giá: <input type="number" name="gia" id=""> <br>
        Ảnh: <input type="file" name="anh" id="">
        <span style="color: red;"><?= $errors['anh'] ?? '' ?></span> <br>
        Mô tả <br>
        <textarea name="mota" id="" cols="99" rows="10"></textarea> <br>
        Số lượng: <input type="number" name="soluong" id=""> <br>
        Loại sách:
        <select name="maloai" id="">
            <?php foreach ($loaisach as $ls) : ?>
                <option value="<?= $ls->id ?>">
                    <?= $ls->tenloai ?>
                </option>
            <?php endforeach ?>
        </select> <br>
        <button type="submit">Thêm sách</button>
    </form>
</body>

</html>