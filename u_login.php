<?php
include "model/MyDBConnetion.php";
$db = new DB();
$db->connect();
?>

<?php

session_start();
$message = '';
    if (isset($_POST["u_login"])) {
        $u_name = $_POST["u_name"];
        $sql = <<<sql
                SELECT * FROM users
                WHERE u_name = "$u_name"
sql;
        $db->excute($sql);
        if ($db->num_row() > 0) {
            $result = $db->getData();
            if (password_verify($_POST["u_pass"], $result["u_pass"])) {
                $_SESSION['u_id'] = $result['u_id'];
                $_SESSION['u_name'] = $result['u_name'];
                $id = $_GET["id"];
                header("location: single_page.php?id=$id");

            } else {
                $message = "<label style = 'color : #ffd090' >Mật khẩu hoặc tài khoản sai</label>";
                echo $message;
            }
        } else {
            $message = "<label style = 'color : #ffd090'>Mật khẩu hoặc tài khoản sai</labe>";
            echo $message;
        }
    }


?>

<!doctype html>
<html lang="en">
<head>
    <title>Lunar -  Free Bootstrap Modal and Popups  </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <!-- Lunar CSS -->
    <link rel="stylesheet" href="asset/css/lunar.css">
    <link rel="stylesheet" href="asset/css/demo.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="asset/css/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,600,700,800,900" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="asset/img/lunar.png"/>
    <link rel="icon" href="asset/img/lunar.png" type="image/png" sizes="16x16">
</head>
<body>

<div class="demo-area">
    <button  type="button"  class="btn btn-dark btn-cta" data-toggle="modal" data-target="#demoModal">
        Open Modal
    </button>
</div>
<!-- Modal -->
<div class="modal fade "   id="demoModal"  tabindex="-1" role="dialog"
     aria-labelledby="demoModal" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 bg-img d-none d-sm-flex align-items-end" style="background-image: url('https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1331&q=80')">
                        <div class="pb-5 pt-5 text-white">
                            <div> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque error esse et ex "</div>
                            <h6>Adam Stuart, Super Paints</h6>
                        </div>
                    </div>
                    <div class="col-md-6 py-5 px-sm-5 ">
                        <h2>Sign In</h2>
                        <form method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input name="u_name" type="text" class="form-control" id="inputEmail4" placeholder="Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input name="u_pass" type="text" class="form-control" id="inputPassword4" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>New York</option>
                                    </select>
                                </div>

                            </div>

                            <button name="u_login" type="submit" class="btn btn-cta btn-cstm-success"  >Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Ends -->





<!--end content here-->
<div id="image"></div>
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/bootstrap/js/bootstrap.min.js"></script>
<script src="asset/js/lunar.js"></script>
<script src="asset/js/demo.js"></script>

</body>
</html>

