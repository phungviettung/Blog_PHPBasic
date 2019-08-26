<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
    include "model/MyDBConnetion.php";
    $db = new DB();
    $db->connect();
?>

<?php
    session_start();
    $message = '';
    if (isset($_SESSION['admin_id'])) {
        header('location:admin.php');
    }

    if (isset($_POST["login"])) {
        $admin_name = $_POST["admin_name"];
        $sql = <<<sql
        SELECT * FROM admin 
        WHERE admin_name = "$admin_name"
sql;
    $db->excute($sql);
    if ($db->num_row() > 0) {
        $result = $db->getData();
        echo "<pre>";
        print_r($result);
        print_r($_POST);
        if (password_verify($_POST["admin_pass"], $result["admin_pass"]))
        {
            $_SESSION['admin_id'] = $result['admin_id'];
            $_SESSION['admin_name'] = $result['admin_name'];
//            echo "<pre>";
//            print_r($_SESSION);
            header("location: admin.php");
            //echo"<script>location.replace('admin.php')</script>>";
        } else {
            $message = "<label style = 'color : #ffd090' >Mật khẩu hoặc tài khoản sai</label>";
        }
    } else {
        $message = "<label style = 'color : #ffd090'>Mật khẩu hoặc tài khoản sai</labe>";
    }
}
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login.css">

    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
</head>

<body>
<div class="container ">
    <form method="POST" onsubmit=" return validateForm()">
        <h4 class="col-md-offset-5">Đăng nhập</h4>
        <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <div class="form-group">
                    <label for="username"> Tài khoản</label>
                    <input id="admin_name" name="admin_name" type="text" class="form-control"
                           placeholder="Nhập tên người dùng"/>
                </div>
                <div class="form-group">
                    <label for="password"> Mật khẩu </label>
                    <input id="admin_pass" name="admin_pass" type="password" class="form-control"
                           placeholder="Nhập mật khẩu"/><?php echo $message ?>
                </div>
                <div class="text-center">
                    <input name="login"  type="submit" class="btn btn-info" value="Login"/>
                    <br>
                    <br>
                    <a href="">Quên mật khẩu</a>
                    <br>
                    <br>
                    <div>
                        <small>Không có tài khoản?</small>
                        <a href="">Tạo tài khoản</a></div>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    function validateForm() {
        var u = document.getElementById("admin_name").value;
        var p = document.getElementById("admin_pass").value;
        if (u == '') {
            alert("Cần nhập tên đăng nhập !!");
            return false;
        }
        if (p == '') {
            alert("Cần nhập mật khẩu !!");
            return false;
        }
        return true;
    }
</script>


</body>

</html>



