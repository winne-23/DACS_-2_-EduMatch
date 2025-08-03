<?php
    include "class/class_class.php";
    $class = new class_subject;
    if(!isset($_GET['class_id']) || $_GET['class_id']==NULL){
        echo "<scrip> window.location = 'class_list.php";
    }
    else{
        $class_id = $_GET['class_id'];
    }
    $_delete_class = $class ->delete_class($class_id);
?>