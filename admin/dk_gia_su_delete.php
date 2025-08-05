<?php
include (__DIR__ . "/../Trang_Chu/class/gia_su_class.php");
$dk_gia_su = new gia_su_class();

if (isset($_GET['gia_su_id'])) {
    $gia_su_id = intval($_GET['gia_su_id']);
    $result = $dk_gia_su->get_dk_gia_su($gia_su_id);
    if ($result && $row = $result->fetch_assoc()) {
        $dk_gia_su->delete_dk_gia_su($gia_su_id);
        header("Location: dk_gia_su_list.php");
        exit();
    }
}

?>