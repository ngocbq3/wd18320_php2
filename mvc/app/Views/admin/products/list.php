<table border="1">
    <tr>
        <th>#ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>
            <a href="<?= ROOT_PATH ?>product/create">Create Product</a>
        </th>
    </tr>
    <?php foreach ($products as $pro) : ?>
        <tr>
            <td><?= $pro->id ?></td>
            <td><?= $pro->name ?></td>
            <td><?= $pro->price ?></td>
            <td>
                <img src="<?= ROOT_PATH . "images/" . $pro->image ?>" width="100" alt="">
            </td>
            <td>
                <a href="<?= ROOT_PATH ?>product/edit?id=<?= $pro->id ?>">Edit</a>
                <a href="<?= ROOT_PATH ?>product/delete?id=<?= $pro->id ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>