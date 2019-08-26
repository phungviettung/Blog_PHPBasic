<div class="danhsachadmin">

    <button class="btn btn-primary mb-5" onclick="location.replace('admin.php?controller=admin&action=add')">Thêm mới cộng tác viên </button>
    <h5 style= "color: green;">Danh sách admin</h5>
    <table class="table ">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>User name</th>
        <th>Password</th>
        <th>Rule</th>
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
                <td><?php echo $value["admin_name"] ?></td>
                <td><?php echo $value["admin_pass"] ?></td>
                <td><?php echo $value["author"] ?></td>
                <td><i style="color: green" class="fa fa-edit"></i><a style="color: green" onclick="return confirm('Muốn sửa thật không???')"href="admin.php?controller=admin&action=edit&id=<?php echo $value["admin_id"]; ?>"> Sửa</a></td>
                <td><i style="color: red" class="fa fa-trash"></i><a style="color: red" onclick="return confirm('Muốn xóa thật không???')" href="admin.php?controller=admin&action=delete&id=<?php echo $value["admin_id"]; ?>"> Xóa</a></td>
            </tr>
            <?php $stt++;
        }
    ?>
    </tbody>
</table>
</div>
