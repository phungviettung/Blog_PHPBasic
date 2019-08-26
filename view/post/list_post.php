<button class="btn btn-primary" onclick="location.replace('admin.php?controller=post&action=add')">Thêm mới bài viết </button>

<div class="danhsachadmin">
    <h2 style= "color: green;">Danh sách bài đăng </h2>
    <table class="table table-image ">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Ảnh</th>
            <th>Tiêu đề</th>
            <th>Người thêm</th>
            <th>Thời gian thêm</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $stt = 1;
        foreach ($data as $value) {
            ?>
            <tr>
                <td><?php echo $stt ?></td>
                <td class="w-25"><img class="img-fluid img-thumbnail" src="<?php echo $value["img"]?>"></td>
                <td><?php echo $value["post_title"] ?></td>
                <td><?php echo $_SESSION["admin_name"] ?></td>
                <td><?php echo $value["post_date"] ?></td>
                <td><i style="color: green" class="fa fa-edit"></i><a style="color: green" href="admin.php?controller=post&action=see&id=<?php echo $value["post_id"]; ?>"> Xem</a></td>
                <td><i style="color: green" class="fa fa-edit"></i><a style="color: green" onclick="return confirm('Muốn sửa thật không???')"href="admin.php?controller=post&action=edit&id=<?php echo $value["post_id"]; ?>"> Sửa</a></td>
                <td><i style="color: red" class="fa fa-trash"><a style="color: red" onclick="return confirm('Muốn xóa thật không???')" href="admin.php?controller=post&action=delete&id=<?php echo $value["post_id"]; ?>"> Xóa</a></i></td>
            </tr>
            <?php $stt++;
        }
        ?>
        </tbody>
    </table>
</div>

