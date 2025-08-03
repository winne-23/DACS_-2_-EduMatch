<?php
    include "class/submenu_class.php";
    $submenu = new submenu;
    if(!isset($_GET['submenu_id']) || $_GET['submenu_id']==NULL){
        echo "<scrip> window.location = 'submenu_list.php";
    }
    else{
        $submenu_id = $_GET['submenu_id'];
    }
    $_delete_submenu = $submenu ->delete_submenu($submenu_id);
?>
