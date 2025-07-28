<?php
    include "class/cartegory_class.php";
    $cartegory = new cartegory;
    if(!isset($_GET['cartegory_id']) || $_GET['cartegory_id']==NULL){
        echo "<scrip> window.location = 'cartegory_list.php";
    }
    else{
        $cartegory_id = $_GET['cartegory_id'];
    }
    $_delete_cartegory = $cartegory ->delete_cartegory($cartegory_id);
?>