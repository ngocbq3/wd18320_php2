<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>#ID</th>
            <th>Tên sách</th>
            <th>Giá</th>
            <th>Ảnh</th>
            <th>Số lượng</th>
            <th><a href="<?= ROOT_PATH ?>create">Thêm mới</a></th>
        </tr>
        <?php foreach ($books as $book) : ?>
            <tr>
                <td><?= $book->id ?></td>
                <td><?= $book->tensach ?></td>
                <td><?= $book->gia ?></td>
                <td>
                    <img src="<?= ROOT_PATH ?>images/<?= $book->anh ?>" width="100" alt="" />
                </td>
                <td><?= $book->soluong ?></td>
                <td>
                    <a href="#">Cập nhật</a>
                    <a onclick="return confirm('Bạn có muốn xóa không?')" href="<?= ROOT_PATH ?>delete?id=<?= $book->id ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>