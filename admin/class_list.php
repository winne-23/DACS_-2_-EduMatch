<?php
include "header.php";
include "slider.php";
include "class/class_class.php";
?>
<?php
$class = new class_subject;
$show_class = $class ->show_class();
?>
<div class="admin_content_right">
    <div class="admin_content_right_cartegory_list">
        <h1>Danh sách Sub_menu</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Môn học</th>
                <th>Lớp học</th>
                <th>Cấp học</th>
                <th>Địa chỉ</th>
                <th>Số buổi</th>
                <th>Mức lương</th>
                <th>Ghi chú</th>
                <th>Tùy biến</th>
            </tr>
            <?php
                if($show_class){
                    $i = 0;
                    while($result = $show_class->fetch_assoc()){
                        $i++;
                        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['class_id'] ?></td>
                <td><?php echo $result['subject'] ?></td>
                <td><?php echo $result['class_name'] ?></td>
                <td><?php echo $result['educationLevel'] ?></td>
                <td><?php echo $result['address'] ?></td>
                <td><?php echo $result['numberOfSessions'] ?></td>
                <td><?php echo number_format($result['salary'], 0, ',', '.') . ' VNĐ' ?></td>
                <td><?php echo $result['note'] ?></td>
                <td><a href="class_edit.php?class_id=<?php echo $result['class_id'] ?>">Sửa</a>|
                    <a href="class_delete.php?class_id=<?php echo $result['class_id'] ?>">Xóa</a>
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