<?php
include "header.php";
include "slider.php";
include (__DIR__ . "/../Trang_Chu/class/phu_huynh_class.php");
?>
<?php
$lop_chua_giao = new phu_huynh_class;
$show_lop_chua_giao = $lop_chua_giao ->show_lop_chua_giao();
?>
<div class="admin_content_right">
    <div class="admin_content_right_list">
        <h1>Danh sách các lớp chưa giao</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>SĐT</th>
                <th>Môn học</th>
                <th>Lớp học</th>
                <th>Cấp học</th>
                <th>Địa chỉ</th>
                <th>Số buổi dạy</th>
                <th>Mức lương</th>
                <th>Note</th>
                <th>Tùy biến</th>
            </tr>
            <?php
                if($show_lop_chua_giao){
                    $i = 0;
                    while($result = $show_lop_chua_giao->fetch_assoc()){
                        $i++;
                        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['phu_huynh_id'] ?></td>
                <td><?php echo $result['fullName'] ?></td>
                <td><?php echo $result['phoneNumber'] ?></td>
                <td><?php echo $result['subject'] ?></td>
                <td><?php echo $result['class_name'] ?></td>
                <td><?php echo $result['educationLevel'] ?></td>
                <td><?php echo $result['address'] ?></td>
                <td><?php echo $result['numberOfSessions'] ?></td>
                <td><?php echo htmlspecialchars(number_format((int)$result['salary'], 0, ',', '.') . ' VNĐ'); ?></td>
                <td><?php echo $result['note'] ?></td>
                <td>
                    <a href="lop_chua_giao_delete.php?phu_huynh_id=<?php echo $result['phu_huynh_id'] ?>">Xóa</a>
                </td>
            </tr>
            <?php
            }
            }
            ?>
        </table>
    </div>
</div>
</body>

</html>