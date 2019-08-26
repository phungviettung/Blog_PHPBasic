
<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	//print_r($_SESSION);
?>
    <div class="themadmin">
        <h1 class="text-info text-center">Thêm cộng tác viên</h1>
        <a href = "admin.php?controller=admin&action=list"><h2 style= "color: #0B90C4;">Danh sách admin</h2></a>
        <form method="post">
            <div class="form-group">
                <label>Tài Khoản</label>
                <input name = "admin_name" type="text" class="form-control" placeholder="Tài khoản">
            </div>
            <div class="form-group">
                <label>Mật Khẩu</label>
                <input name = "admin_pass" type="password" class="form-control" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Quyền
                <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">admin</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">sub_admin</a></li>
                </ul>
            </div>
            <br>
            <br>
            <br>
            <button name = "add_admin" type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
<?php
    if (isset($thanhcong) && in_array('add_success', $thanhcong)){
        echo "<p style = 'color : green'> Thêm admin thành công</p>";
    }
?>
