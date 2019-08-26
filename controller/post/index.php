<?php

//print_r($_SESSION);
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
$thanhcong = array();
switch ($action) {
    case 'add':
        if (isset($_POST['add_post'])) {
           //Tạo thư mục lưu file
            $error = array();
            $target_dir = "asset/admin/post/img/";
            $target_file = $target_dir . basename($_FILES['image']['name']);
            // Kiểm tra kiểu file hợp lệ
            $type_file = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');
            if (!in_array(strtolower($type_file), $type_fileAllow)) {
                $error['image'] = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
                break;
            }
            //Kiểm tra kích thước file
            $size_file = $_FILES['image']['size'];
            if ($size_file > 5242880) {
                $error['image'] = "File bạn chọn không được quá 5MB";
                require_once "view/post/add_post.php";
                break;
            }
            // Kiểm tra file đã tồn tại trê hệ thống
            if (file_exists($target_file)) {
                $error['image'] = "File bạn chọn đã tồn tại trên hệ thống";
                require_once "view/post/add_post.php";
                break;
            }
            if (empty($error)) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    echo "Bạn đã upload file thành công";
                    $flag = true;
                } else {
                    echo "File bạn vừa upload gặp sự cố";
                }
            }
            $post_title = $_POST["title"];
            $admin_id = $_SESSION["admin_id"];
            $img = $target_file;
            $pdetail_content = $_POST["post_content"];
            if ($db->Post_InsertData($post_title,$admin_id,$img)) {
                $last_id_post = $db->last_id();
                if($db->PostDetail_InsertData($last_id_post,$pdetail_content)){
                    $thanhcong[] = "add_success";
                    echo '<script> location.replace("admin.php?controller=post&action=list"); </script>';
                }
            }
        }
        require_once "view/post/add_post.php";
        break;
    case 'edit':
        echo "<pre>";
        print_r($_GET);
        print_r($_POST);
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $tblTable = "posts";
            $dataID = $db->getDataIDPost($tblTable, $id);
            $tblTableDetails = "post_details";
            $dataIDPDetails = $db->getDataIDPost($tblTableDetails, $id);
            if (isset($_POST["update_post"])) {
                //take data from view to model
                $content = $_POST["post_content"];
                $title = $_POST["title"];
                //sent to model
                if ($db->PostDetails_UpdateData($id, $content) ) {
                     $db->Post_UpdateData($id,$title);
                    echo '<script> location.replace("admin.php?controller=post&action=list"); </script>';
                    break;
                }
            }
        }
        require_once "view/post/edit_post.php";
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $tblTable = "posts";
            if ($db->post_Delete($id, $tblTable)) {
                $db->post_Delete($id, "post_details");
                echo '<script> location.replace("admin.php?controller=post&action=list"); </script>';
                break;
            }
        }
        break;
    case 'list':
        $tblTable = "posts";
        $data = $db->getAllData($tblTable);
        require_once "view/post/list_post.php";
        break;
    case 'see':
        $tblTable = "post_details";
        $id = $_GET['id'];
        $data = $db->getDataIDPost($tblTable,$id);
        require_once "view/post/see_post.php";
        break;
    default:
        require_once "view/admin/list_admin.php";
        break;
}