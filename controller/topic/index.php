<?php
    if (isset($_GET["action"])){
        $action = $_GET["action"];
    }else{
        $action="";
    }

    $thanhcong = array();

    switch ($action){
        case "add" :
            if ($_POST["add_topic"]){
                $topic_name = $_POST["topic_name"];
                if()
            }
            break;
        case "edit" :
            break;
        case "delete":
            break;
    }


?>