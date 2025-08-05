<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $class_id = isset($_POST['class_id']) ? intval($_POST['class_id']) : 0;
    $so_dien_thoai = isset($_POST['so_dien_thoai']) ? trim($_POST['so_dien_thoai']) : '';
    if ($class_id && $so_dien_thoai) {
        include "../db_connect.php"; // Kết nối CSDL
        $stmt = $conn->prepare("INSERT INTO dang_ki_nhan_lop (phu_huynh_id, so_dien_thoai, thoi_gian) VALUES (?, ?, NOW())");
        $stmt->bind_param("is", $class_id, $so_dien_thoai);
        if ($stmt->execute()) {
            echo "Đăng ký nhận lớp thành công!";
        } else {
            echo "Lỗi khi đăng ký!";
        }
    } else {
        echo "Thiếu thông tin!";
    }
} else {
    echo "Phương thức không hợp lệ!";
}
?>