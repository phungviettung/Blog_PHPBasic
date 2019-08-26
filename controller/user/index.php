<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}else{
    $action = '';
}
$thanhcong = array();
switch ($action) {
    case 'post':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $tblTable = "post_details";
            $dataID = $db->getDataID($tblTable,$id);
            $tblTable = "posts";
            $dataIDPost = $db->getDataID($tblTable,$id);
        }
        header("location: single_page.php");
        break;

}