<?php
include (__DIR__ . "/../Trang_Chu/class/phu_huynh_class.php");
$dk_nhan_lop_delete = new phu_huynh_class();

if (isset($_GET['dk_nhan_lop_id'])) {
    $dk_nhan_lop_id = intval($_GET['dk_nhan_lop_id']);
    $result = $dk_nhan_lop_delete->get_dk_nhan_lop($dk_nhan_lop_id);
    if ($result && $row = $result->fetch_assoc()) {
        $dk_nhan_lop_delete->delete_dk_nhan_lop($dk_nhan_lop_id);
        header("Location: dk_nhan_lop_list.php");
        exit();
    }
}

?>