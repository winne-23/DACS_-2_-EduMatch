<?php
include (__DIR__ . "/../Trang_Chu/class/phu_huynh_class.php");
$lop_chua_giao_delete = new phu_huynh_class();

if (isset($_GET['phu_huynh_id'])) {
    $phu_huynh_id = intval($_GET['phu_huynh_id']);
    $result = $lop_chua_giao_delete->get_lop_chua_giao($phu_huynh_id);
    if ($result && $row = $result->fetch_assoc()) {
        $lop_chua_giao_delete->delete_lop_chua_giao($phu_huynh_id);
        header("Location: lop_chua_giao_list.php");
        exit();
    }
}

?>