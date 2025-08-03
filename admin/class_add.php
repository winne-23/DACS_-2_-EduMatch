<?php
include "header.php";
include "slider.php";
include "class/class_class.php";
?>

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
    $insert_class = $class ->insert_class($subject,$class_name,$educationLevel,$address,$numberOfSessions,$salary,$note);
}
?>

<div class="admin_content_right">
    <h1>Thêm lớp học</h1>
    <div class="admin_content_right_class_add">
        <form action="" method="POST">
            <div style="margin-top: 10px">
                <label for="">Môn học:</label>
                <select name="subject" required>
                    <option value="">Chọn môn học</option>
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
                    <option value="">--Chọn lớp học--</option>
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
                    <option value="">--Chọn cấp học--</option>
                    <option value="Cấp 1">Cấp 1</option>
                    <option value="Cấp 2">Cấp 2</option>
                    <option value="Cấp 3">Cấp 3</option>
                </select>
            </div>

            <div style="margin-top: 10px">
                <label for="">Địa chỉ:</label>
                <input name="address" type="text" style="width: 500px"
                    placeholder="VD: 504 Đ. Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng" />
            </div>

            <div style="margin-top: 10px">
                <label for="">Số buổi dạy trong một tuần:</label>
                <input name="numberOfSessions" type="text" placeholder="VD: 1,2,3,4,..." />
            </div>

            <div style="margin-top: 10px">
                <label for="">Mức lương:</label>
                <input name="salary" type="text" placeholder="VD: 1.200.000vnđ, ..." />

            </div>

            <div style="margin: 10px">
                <label for="">Note:</label>
                <textarea name="note" name="" rows="4"></textarea>
            </div>

            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>

</html>