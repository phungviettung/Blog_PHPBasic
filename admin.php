<?php

	include "model/MyDBConnetion.php";
	$db = new DB();
    $db->connect();

    session_start();

    //check login
    if(!isset($_SESSION['admin_id']))
    {
       // echo "đm";
        header("Location: login.php");
    }
    //end check login

    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    }else{
        $controller = '';
    }
?>

    <?php
        include "view/share/admin/head.php";
    ?>
    <!-- start: Content -->


                <?php
                switch ($controller) {
                    case 'admin':
                        include "controller/admin/index.php";
                        break;
                    case 'post':
                        include "controller/post/index.php";
                        break;
                    default;
                        break;
                }
            ?>
	</div><!--/.fluid-container-->
            <!-- end: Content -->
    </div> <!--/#content.span10-->
    </div><!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	<?php
        include "view/share/admin/footer.php";
    ?>

