<?php
    include "header.php";
    include "slider.php";
    include "class/class_class.php";
?>

<?php
    $class = new class_subject;
    $class_id = $_GET['class_id'];
    $get_class = $class->get_class($class_id);
    if($get_class){
        $result_class = $get_class->fetch_assoc();
    }
?>
<!-- ------------Hàm update--------- -->
<?php
$class = new class_subject;
if($_SERVER ['REQUEST_METHOD']=== 'POST'){
    $subject = $_POST['subject'];
    $class_name = $_POST['class_name'];
    $educationLevel = $_POST['educationLevel'];
    $address = $_POST['address'];
    $numberOfSessions = $_POST['numberOfSessions'];
    $salary = $_POST['salary'];
    $note = $_POST['note'];
    $update_class = $class ->update_class($class_id,$subject,$class_name,$educationLevel,$address,$numberOfSessions,$salary,$note);
}
?>

<div class="admin_content_right">
    <h1>Sửa lớp học</h1>
    <div class="admin_content_right_class_add">
        <form action="" method="POST">
            <div style="margin-top: 10px">
                <label for="">Môn học:</label>
                <select name="subject" name="" required>
                    <?php 
                        $show_class = $class ->show_class();
                    if($show_class){
                        $result = $show_class ->fetch_assoc() 
                        ?>
                    <option value="<?php echo $result['subject']; ?>"
                        <?php if ($result_class['subject'] == $result['subject']) echo "selected"; ?>>
                        <?php echo $result['subject']; ?>
                    </option>
                    <?php 
                            }
                        ?>
                    <option value="Toán">Toán</option>
                    <option value="Lý">Lý</option>
                    <option value="Hóa">Hóa</option>
                    <option value="Anh">Anh</option>
                    <option value="Văn">Văn</option>
                    <option value="Sinh">Sinh</option>
                    <option value="Sử">Sử</option>
                    <option value="Địa">Địa</option>
                    <option value="Khác">Khác</option>
                </select>
            </div>

            <div style="margin-top: 10px">
                <label for="">Lớp học:</label>
                <select name="class_name" name="" required>
                    <?php 
                        $show_class = $class ->show_class();
                    if($show_class){
                        $result = $show_class ->fetch_assoc()
                        ?>
                    <option value="<?php echo $result['class_name']; ?>"
                        <?php if ($result_class['class_name'] == $result['class_name']) echo "selected"; ?>>
                        <?php echo $result['class_name']; ?>
                    </option>
                    <?php 
                            }
                        
                        ?>
                    <option value="Lớp 1">Lớp 1</option>
                    <option value="Lớp 2">Lớp 2</option>
                    <option value="Lớp 3">Lớp 3</option>
                    <option value="Lớp 4">Lớp 4</option>
                    <option value="Lớp 5">Lớp 5</option>
                    <option value="Lớp 6">Lớp 6</option>
                    <option value="Lớp 7">Lớp 7</option>
                    <option value="Lớp 8">Lớp 8</option>
                    <option value="Lớp 9">Lớp 9</option>
                    <option value="Lớp 10">Lớp 10</option>
                    <option value="Lớp 11">Lớp 11</option>
                    <option value="Lớp 12">Lớp 12</option>
                </select>
            </div>

            <div style="margin-top: 10px">
                <label for="">Cấp học:</label>
                <select name="educationLevel" name="" required>
                    <?php 
                        $show_class = $class ->show_class();
                    if($show_class){
                       $result = $show_class ->fetch_assoc()
                        ?>
                    <option value="<?php echo $result['educationLevel']; ?>"
                        <?php if ($result_class['educationLevel'] == $result['educationLevel']) echo "selected"; ?>>
                        <?php echo $result['educationLevel']; ?>
                    </option>
                    <?php 
                            }
                        ?>
                    <option value="Cấp 1">Cấp 1</option>
                    <option value="Cấp 2">Cấp 2</option>
                    <option value="Cấp 3">Cấp 3</option>
                </select>
            </div>

            <div style="margin-top: 10px">
                <label for="">Địa chỉ:</label>
                <input name="address" type="text" style="width: 500px"
                    value="<?php echo ($result_class['address'])?>" />
            </div>

            <div style="margin-top: 10px">
                <label for="">Số buổi dạy trong một tuần:</label>
                <input name="numberOfSessions" type="text" value="<?php echo ($result_class['numberOfSessions'])?>" />
            </div>

            <div style="margin-top: 10px">
                <label for="">Mức lương:</label>
                <input name="salary" type="text" value="<?php echo ($result_class['salary'])?>" />
            </div>

            <div style="margin: 10px">
                <label for="">Note:</label>
                <textarea name="note" name="" rows="4"><?php echo ($result_class['note'])?></textarea>
            </div>

            <button type="submit">Sửa</button>
        </form>
    </div>
</div>
</body>

</html>