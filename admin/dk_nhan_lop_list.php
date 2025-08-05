<?php
include "header.php";
include "slider.php";
include (__DIR__ . "/../Trang_Chu/class/phu_huynh_class.php");
?>
<?php
$dk_nhan_lop = new phu_huynh_class;
$show_dk_nhan_lop = $dk_nhan_lop ->show_dk_nhan_lop();
?>
<div class="admin_content_right">
    <div class="admin_content_right_list">
        <h1>Danh sách các lớp chưa giao</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Tên gia sư</th>
                <th>SĐT gia sư</th>
                <th>Cccd gia sư</th>
                <th>Tên học sinh</th>
                <th>Môn+lớp</th>
                <th>SĐT học sinh</th>
                <th>Tùy biến</th>
            </tr>
            <?php
                if($show_dk_nhan_lop){
                    $i = 0;
                    while($result = $show_dk_nhan_lop->fetch_assoc()){
                        $i++;
                        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['dk_nhan_lop_id'] ?></td>
                <td><?php echo $result['fullName_gia_su'] ?></td>
                <td><?php echo $result['phoneNumber_gia_su'] ?></td>
                <td><?php echo $result['cccd_gia_su'] ?></td>
                <td><?php echo $result['fullName_phu_huynh'] ?></td>
                <td><?php echo $result['subject+class_name'] ?></td>
                <td><?php echo $result['phoneNumber_class'] ?></td>
                <td>
                    <a href="dk_nhan_lop_delete.php?dk_nhan_lop_id=<?php echo $result['dk_nhan_lop_id'] ?>">Xóa</a>
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