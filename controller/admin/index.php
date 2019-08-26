<?php
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    $thanhcong = array();
    switch ($action) {
        case 'add':
            if (isset($_POST['add_admin'])){
                $admin_name = $_POST['admin_name'];
                $admin_pass = password_hash($_POST['admin_pass'],PASSWORD_DEFAULT);
                if($db ->Ad_InsertData($admin_name, $admin_pass)){
                    $thanhcong[] = "add_success";
                }
            }
            require_once "view/admin/add_admin.php";
            break;
        case 'edit':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $tblTable = "admin";
                $dataID = $db->getDataID($tblTable,$id);
                if(isset($_POST["update_admin"])){
                    //take data from view to model
                    $admin_name = $_POST["admin_name"];
                    //sent to model
                    if($db->Ad_UpdateData($id, $admin_name)){
                        echo '<script> location.replace("/admin.php?controller=admin&action=list"); </script>';
                        break;
                    }
                }
            }
            require_once "view/admin/edit_admin.php";
            break;
        case 'delete':
            if (isset($_GET['id'])){
                $id = $_GET['id'];
                $tblTable = "admin";
                if($db->Ad_Delete($id,$tblTable)){
                    echo '<script> location.replace("/admin.php?controller=admin&action=list"); </script>';
                    break;
                }
            }
            break;
        case 'list':
            $tblTable = "admin";
            $data = $db->getAllData($tblTable);
            require_once "view/admin/list_admin.php";
            break;
        default:
            require_once "view/admin/list_admin.php";
            break;
    }