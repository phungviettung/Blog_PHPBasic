<?php

$com_id = $_POST["id"];

$hostname = "172.28.128.4";
$username = "root";
$password = "tung";
$dbname = "Blog";
$conn = mysqli_connect($hostname,$username,$password,$dbname);

$result = mysqli_query($conn,"SELECT * FROM comments
                            WHERE post_id = '$com_id'  "
);
$resultarr = mysqli_fetch_all($result,MYSQLI_ASSOC);

foreach ($resultarr as $re){
    ?>
<ul class="comment-list">
    <li class="comment">
        <div class="vcard">
            <img src="/asset/user/images/person_1.jpg" alt="Image placeholder">
        </div>
        <div class="comment-body">
            <h3><?php echo $re["u_name"]?></h3>
            <div class="meta">January 9, 2018 at 2:21pm</div>
            <p><?php echo $re["cmt_content"]?></p>
            <p><a href="#" class="reply">Reply</a></p>
        </div>
    </li>
</ul>
<?php } ?>

