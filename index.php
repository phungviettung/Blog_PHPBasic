<?php
include "model/MyDBConnetion.php";
$db = new DB();
$db->connect();
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
              <form action="#" class="search-top-form">
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
<?php
    $dataall = $db->getAllData("posts");
//    echo "<pre>";
//    print_r($dataall);
    $numarr = array();
    $num = $db->num_row();
    for ($i = 0; $i < $num; $i++){
        $numarr[$i] = $dataall[$i][0];
    }
//    print_r($numarr);
    $ran = array_rand($numarr,3);
//    print_r($ran)
?>
    <section class="site-section pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
    <?php
        $row = $db->getDataIDPost("posts", $numarr[$ran[0]]);
        $row1 = $db->getDataIDPost("posts", $numarr[$ran[1]]);
        $row2 = $db->getDataIDPost("posts", $numarr[$ran[2]])
    ?>
            <div class="owl-carousel owl-theme home-slider">
              <div>
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?php echo $row["img"]?>'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2"><?php echo date( 'H:i d-m-Y',strtotime($row["post_date"]))?> </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3><?php echo $row["post_title"]?></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                  </div>
                </a>
              </div>
              <div>
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?php echo $row1["img"]?>'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2"><?php echo date( 'H:i d-m-Y',strtotime($row1["post_date"]))?> </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3><?php echo $row1["post_title"]?></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                  </div>
                </a>
              </div>
              <div>
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('<?php echo $row2["img"]?>'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2"><?php echo date( 'H:i d-m-Y',strtotime($row2["post_date"]))?> </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3><?php echo $row2["post_title"]?></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                  </div>
                </a>
              </div>
            </div>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a href="blog-single.html" class="a-block d-flex align-items-center height-md" style="background-image: url('<?php echo $row2["img"]?>'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Lifestyle</span>
                  <span class="mr-2"><?php echo date( 'H:i d-m-Y',strtotime($row2["post_date"]))?></span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3><?php echo $row2["post_title"]?></h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="blog-single.html" class="a-block d-flex align-items-center height-md" style="background-image: url('<?php echo $row1["img"]?>'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Travel</span>
                  <span class="mr-2"><?php echo date( 'H:i d-m-Y',strtotime($row1["post_date"]))?> </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3><?php echo $row1["post_title"]?></h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="blog-single.html" class="a-block d-flex align-items-center height-md" style="background-image: url('<?php echo $row["img"]?>'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Food</span>
                  <span class="mr-2"><?php echo date( 'H:i d-m-Y',strtotime($row["post_date"]))?></span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3><?php echo $row["post_title"]?></h3>
              </div>
            </a>
          </div>
        </div>
      </div>


    </section>
    <!-- END section -->
    <!-- php lấy dữ liệu -->
    <?php
        $valuePost = $db->getAllData("posts");
    ?>
    <?php
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 4;
    $total_page = ceil( $db->num_row()/ $limit);

    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }
    // Tìm Start
    $start = ($current_page - 1) * $limit;

    $valuePost = $db->PhanTrangPost($start,$limit);
    ?>
    <!-- kết thúc php lấy dữ liệu -->
    <section class="site-section py-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-4">Lifestyle Category</h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row">
                <?php
                    foreach ($valuePost as $value){
                         ?>
                        <div class="col-md-6">
                        <a href="single_page.php?id=<?php echo $value["post_id"]?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                          <img class="img-fluid img-thumbnail" src="<?php echo $value["img"]?>" alt="Image placeholder">
                          <div class="blog-content-body">
                            <div class="post-meta">
                              <span class="category">Travel</span>
                              <span class="mr-2"><?php echo date( 'H:i d-m-Y',strtotime($value["post_date"]))?></span> &bullet;
                              <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                            <h2><?php echo $value["post_title"]?></h2>
                          </div>
                        </a>
                      </div>
                <?php } ?>


            </div>
              <div class="pagination">
              <?php
              // PHẦN HIỂN THỊ PHÂN TRANG
              // BƯỚC 7: HIỂN THỊ PHÂN TRANG
              // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
              if ($current_page > 1 && $total_page > 1){
                  echo '<a href="index.php?page='.($current_page-1).'">Prev</a> | ';
              }

              // Lặp khoảng giữa
              for ($i = 1; $i <= $total_page; $i++){
                  // Nếu là trang hiện tại thì hiển thị thẻ span
                  // ngược lại hiển thị thẻ a
                  if ($i == $current_page){
                      echo '<span>'.$i.'</span> | ';
                  }
                  else{
                      echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
                  }
              }

              // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
              if ($current_page < $total_page && $total_page > 1){
                  echo '<a href="index.php?page='.($current_page+1).'">Next</a> | ';
              }
              ?>
              </div>

            <div class="row mb-5 mt-5">

              <div class="col-md-12">
                <h2 class="mb-4">More Blog Posts</h2>
              </div>
        
              <div class="col-md-12">

                <div class="post-entry-horzontal">
                  <a href="blog-single.html">
                    <div class="image element-animate"  data-animate-effect="fadeIn" style="background-image: url('<?php echo $row["img"]?>');"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="category">Travel</span>
                        <span class="mr-2"> <?php echo date( 'H:i d-m-Y',strtotime($row["post_date"]))?></span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2><?php echo $row["post_title"]?></h2>
                    </span>
                  </a>
                </div>
                <!-- END post -->

                <div class="post-entry-horzontal">
                    <a href="blog-single.html">
                        <div class="image element-animate"  data-animate-effect="fadeIn" style="background-image: url('<?php echo $row1["img"]?>');"></div>
                        <span class="text">
                      <div class="post-meta">
                        <span class="category">Travel</span>
                        <span class="mr-2"> <?php echo date( 'H:i d-m-Y',strtotime($row1["post_date"]))?></span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2><?php echo $row1["post_title"]?></h2>
                    </span>
                    </a>
                </div>
                <!-- END post -->

                <div class="post-entry-horzontal">
                    <a href="blog-single.html">
                        <div class="image element-animate"  data-animate-effect="fadeIn" style="background-image: url('<?php echo $row2["img"]?>');"></div>
                        <span class="text">
                      <div class="post-meta">
                        <span class="category">Travel</span>
                        <span class="mr-2"> <?php echo date( 'H:i d-m-Y',strtotime($row2["post_date"]))?></span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2><?php echo $row2["post_title"]?></h2>
                    </span>
                    </a>
                </div>
                <!-- END post -->

              </div>
            </div>

            

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Nhập để tìm kiếm ">
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
                <img src="/asset/user/images/person_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2>toilatung</h2>
                  <p>Khát khao đi và được đến</p>
                  <p><a href="#" class="btn btn-primary btn-sm">thêm thông tin của tôi </a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <h3 class="heading">Bài viết phổ biến</h3>
              <div class="post-entry-sidebar">
                <ul>
                  <li>
                    <a href="">
                      <img src="/asset/user/images/img_2.jpg" alt="Image placeholder" class="mr-4">
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
                  <li>
                    <a href="">
                      <img src="/asset/user/images/img_12.jpg" alt="Image placeholder" class="mr-4">
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
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

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
  </body>
</html>
