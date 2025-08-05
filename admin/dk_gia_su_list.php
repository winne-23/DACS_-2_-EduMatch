<?php
include "header.php";
include "slider.php";
include (__DIR__ . "/../Trang_Chu/class/gia_su_class.php");
?>
<?php
$dk_gia_su = new gia_su_class;
$show_dk_gia_su = $dk_gia_su ->show_dk_gia_su();
?>
<div class="admin_content_right">
    <div class="admin_content_right_list">
        <h1>Danh sách ứng tuyển của các gia sư</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>SĐT</th>
                <th>CCCD</th>
                <th>Email</th>
                <th>Trình độ học vấn</th>
                <th>Môn học có thể dạy</th>
                <th>Cấp học có thể dạy</th>
                <th>Khu vực có thể dạy</th>
                <th>Kinh nghiệm làm gia sư</th>
                <th>Giới thiệu về bản thân</th>
                <th>Chấp nhận</th>
            </tr>
            <?php
                if($show_dk_gia_su){
                    $i = 0;
                    while($result = $show_dk_gia_su->fetch_assoc()){
                        $i++;
                        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['gia_su_id'] ?></td>
                <td><?php echo $result['fullName'] ?></td>
                <td><?php echo $result['phoneNumber'] ?></td>
                <td><?php echo $result['cccd'] ?></td>
                <td><?php echo $result['email'] ?></td>
                <td><?php echo $result['educationLevel'] ?></td>
                <td><?php echo $result['subject'] ?></td>
                <td><?php echo $result['certificate'] ?></td>
                <td><?php echo $result['address'] ?></td>
                <td><?php echo $result['exp_teaching'] ?></td>
                <td><?php echo $result['self_introduction'] ?></td>
                <td><a href="dk_gia_su_accept.php?gia_su_id=<?php echo $result['gia_su_id'] ?>">Yes</a>|
                    <a href="dk_gia_su_delete.php?gia_su_id=<?php echo $result['gia_su_id'] ?>">No</a>
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