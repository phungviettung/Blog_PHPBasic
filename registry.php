<?php
    include "model/MyDBConnetion.php";
    $db = new DB();
    $db->connect();
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
<div class="modal fade  " id="demoModal"  tabindex="-1" role="dialog"
     aria-labelledby="demoModal" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close light" data-dismiss="modal"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="m-h-30 bg-img rounded-top " style="background-image: url('https://images.unsplash.com/photo-1543363136-3fdb62e11be5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80')">

            </div>
            <div class="modal-body">
                <form class="px-sm-4 py-sm-4" method="post">
                    <h3>Start Investing in your health</h3>
                    <div class="form-group">
                        <label for="exampleInputtext1">Name</label>
                        <input name="u_name" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Enter your name" required>
                    </div>

                    <div class="form-group">

                        <label for="exampleInputEmail1">Password</label>
                        <input name="u_pass" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <button name="regis" type="submit" class="btn btn-cstm-danger btn-cta btn-block" >Subscribe</button>
                </form>
                <?php
                    if (isset($_POST["regis"])) {
                        $u_pass = password_hash($_POST["u_pass"],PASSWORD_DEFAULT);
                        $u_name = $_POST["u_name"];
                        if ($db->U_InsertData($u_name,$u_pass)){
                            echo "cho";
                            header("location: index.php");
                        }
                    }
                ?>
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