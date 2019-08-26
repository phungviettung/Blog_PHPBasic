<?php
   $com_mess = $_POST["mess"];
   $com_name = $_POST["name"];
   $com_id = $_POST["id"];
   $com_u_id = $_POST["u_id"];
   $hostname = "172.28.128.4";
   $username = "root";
   $password = "tung";
   $dbname = "Blog";
  $conn = mysqli_connect($hostname,$username,$password,$dbname);
  mysqli_query($conn,"INSERT INTO comments(cmt_content, u_id, post_id, u_name)
    VALUES ('$com_mess','$com_u_id','$com_id','$com_name')"
  );

?>
            <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard">
                                <img src="/asset/user/images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3><?php echo $com_name?></h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p><?php echo $com_mess?></p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>
                        </li>
            </ul>