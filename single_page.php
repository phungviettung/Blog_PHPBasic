<?php
include "model/MyDBConnetion.php";
$db = new DB();
$db->connect();
session_start();
?>

<?php
//print_r($_GET);
$resultpost = $db->getDataIDPost("posts", $_GET["id"]);
$resultpostdetail = $db->getDataIDPost("post_details", $_GET["id"]);
?>


<!doctype html>
<html lang="en">
<head>
    <title>Colorlib Balita &mdash; Minimal Blog Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="/asset/user/css/bootstrap.css">
    <link rel="stylesheet" href="/asset/user/css/animate.css">
    <link rel="stylesheet" href="/asset/user/css/owl.carousel.min.css">

    <!-- <link rel="stylesheet" href="/asset/user/fonts/ionicons/ionicons.min.css"> -->
    <link rel="stylesheet" href="/asset/user/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/asset/user/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="/asset/user/css/style.css">
</head>
<body>



<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-9 social">
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-instagram"></span></a>
                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                </div>
                <div class="col-3 search-top">
                    <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                    <form  class="search-top-form">
                        <span class="icon fa fa-search"></span>
                        <input type="text" id="s" placeholder="Nhập để tìm kiếm...">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container logo-wrap">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                <h1 class="site-logo"><a href="index.html">divadi</a></h1>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">


            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Đi</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="category.html">Bắc</a>
                            <a class="dropdown-item" href="category.html">Trung</a>
                            <a class="dropdown-item" href="category.html">Nam</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Bán áo =)))</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên hệ</a>
                    </li>
                </ul>

            </div>
        </div
    </nav>
</header>
<!-- END header -->


<section class="site-section py-lg">
    <div class="container">

        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
                <h1 class="mb-4"><?php echo $resultpost["post_title"]?></h1>
                <div class="post-meta">
                    <span class="category">Food</span>
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <div class="post-content-body">
                    <?php echo $resultpostdetail["pdetail_content"]?>
                </div>


                <div class="pt-5">
                    <p>Categories:  <a href="#">Food</a>, <a href="#">Travel</a>  Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
                </div>

                <button onclick="location.replace('u_login.php?id=<?php echo $_GET["id"]?>')" name="u_login" id="u_login" class="btn btn-primary"> Đăng nhập để bình luận </button>

                <div class="pt-5">
                    <h3 class="mb-5">6 Comments</h3>

                    <div id="kqcu"></div>
                    <div id="kq"></div>

                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="#" class="p-5 bg-light" id="form_cmt">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="" id="message" cols="30" rows="10" class="com-mess form-control"></textarea>
                            </div>

                        </form>
                        <div class="form-group">
                            <input  type="submit" value="Post Comment"   class="com-submit btn btn-primary">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>



<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-3 ">Related Post</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <a href="#" class="a-block d-flex align-items-center height-md" style="background-image: url('/asset/user/images/img_2.jpg'); ">
                    <div class="text">
                        <div class="post-meta">
                            <span class="category">Lifestyle</span>
                            <span class="mr-2">March 15, 2018 </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        </div>
                        <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#" class="a-block d-flex align-items-center height-md" style="background-image: url('/asset/user/images/img_3.jpg'); ">
                    <div class="text">
                        <div class="post-meta">
                            <span class="category">Travel</span>
                            <span class="mr-2">March 15, 2018 </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        </div>
                        <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#" class="a-block d-flex align-items-center height-md" style="background-image: url('/asset/user/images/img_4.jpg'); ">
                    <div class="text">
                        <div class="post-meta">
                            <span class="category">Food</span>
                            <span class="mr-2">March 15, 2018 </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        </div>
                        <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>


</section>
<!-- END section -->
<footer class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <h3>Paragraph</h3>
                <p>
                    <img src="/asset/user/images/img_1.jpg" alt="Image placeholder" class="img-fluid">
                </p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusantium optio unde perferendis eum illum voluptatibus dolore tempora, consequatur minus asperiores temporibus reprehenderit.</p>
            </div>
            <div class="col-md-6 ml-auto">
                <div class="row">
                    <div class="col-md-7">
                        <h3>Latest Post</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="/asset/user/images/img_6.jpg" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span> &bullet;
                                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="/asset/user/images/img_3.jpg" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span> &bullet;
                                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="/asset/user/images/img_4.jpg" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">March 15, 2018 </span> &bullet;
                                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1"></div>

                    <div class="col-md-4">

                        <div class="mb-5">
                            <h3>Social</h3>
                            <ul class="list-unstyled footer-social">
                                <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                                <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                                <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->

</div>
<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<script src="/asset/user/js/jquery-3.2.1.min.js"></script>
<script src="/asset/user/js/jquery-migrate-3.0.0.js"></script>
<script src="/asset/user/js/popper.min.js"></script>
<script src="/asset/user/js/bootstrap.min.js"></script>
<script src="/asset/user/js/owl.carousel.min.js"></script>
<script src="/asset/user/js/jquery.waypoints.min.js"></script>
<script src="/asset/user/js/jquery.stellar.min.js"></script>
<script src="/asset/user/js/main.js"></script>

<?php

print_r($_SESSION);
if (isset($_SESSION["u_id"])){
    echo "
                        <script>
                            $(document).ready(function () {
                                $(\"#u_login\").hide(\"fast\");
                                $(\"#form_cmt\").show(\"fast\");
                            })
                        </script>
                    ";
}else{
    echo "
                        <script>
                            $(document).ready(function () {
                                $(\"#u_login\").show(\"fast\");
                                $(\"#form_cmt\").hide(\"fast\");
                            })
                        </script>
                    ";
}
?>




</body>
</html>


<?php $id = $_GET["id"]?>
<script>
    //lấy kết quả vừa bình luận
    $(document).ready(function () {
        $(".com-submit").click(function () {
            console.log("ok");
           var n = '<?php echo $_SESSION["u_name"]?>';
           var u_id = '<?php echo $_SESSION["u_id"]?>';
           var m = $(".com-mess").val();
           var id = '<?php echo $id?>';
            $.ajax({
                url: "xuly_cmt.php",
                type: "post",
                data: "mess="+m+"&name="+n+"&id="+id+"&u_id="+u_id,
                 async : true,
                success : function (kq) {
                    $('#kq').html(kq);
                }
            });
            return false;
        });
    });

</script>

<script>
    //lấy kết quả cmt cũ của bài đăng  kqcu
    $(document).ready(function () {
            var id = '<?php echo $id?>';
            $.ajax({
                url: "xuly_cmtcu.php",
                type: "post",
                data: "id="+id,
                async : true,
                success : function (kqcu) {
                    $('#kqcu').html(kqcu);
                }
            });

    });


</script>
