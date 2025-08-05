<?php
include "header.php";
include "class/phu_huynh_class.php";
?>

<?php
$phu_huynh = new phu_huynh_class;
if($_SERVER ['REQUEST_METHOD']=== 'POST'){
    $fullName = $_POST['fullName'];
    $phoneNumber = $_POST['phoneNumber'];
    $subject = $_POST['subject'];
    $class_name = $_POST['class_name'];
    $educationLevel = $_POST['educationLevel'];
    $address = $_POST['address'];
    $numberOfSessions = $_POST['numberOfSessions'];
    $salary = $_POST['salary'];
    $note = $_POST['note'];
    $insert_phu_huynh = $phu_huynh ->insert_phu_huynh($fullName,$phoneNumber,$subject,$class_name,$educationLevel,$address,$numberOfSessions,$salary,$note);
}
?>
<!-- -------------------Làm tìm kiếm gia sư----------------- -->
<div class="container">
    <h2 class="custom_h2">Đăng Ký Tìm Gia Sư</h2>
    <form id="tutorRequestForm" action="" method="POST">
        <div class="form-group">
            <label for="fullName">Họ và Tên:</label>
            <input type="text" id="fullName" name="fullName" placeholder="VD: Trần Mạnh Thắng" />
        </div>

        <div class="form-group">
            <label for="phoneNumber">Số điện thoại:</label>
            <input type="text" id="phoneNumber" name="phoneNumber" required placeholder="VD: 0935707794"
                pattern="[0-9]{10,11}" title="Vui lòng nhập số điện thoại hợp lệ (10-11 chữ số)" />
        </div>

        <div class="form-group">
            <label for="subject">Môn học cần gia sư:</label>
            <select id="subject" name="subject" required>
                <option value="">Chọn môn học</option>
                <option value="Toán">Toán</option>
                <option value="Lý">Lý</option>
                <option value="Hóa">Hóa</option>
                <option value="Anh">Anh</option>
                <option value="Văn">Văn</option>
                <option value="Sinh">Sinh</option>
                <option value="Sử">Sử</option>
                <option value="Địa">Địa</option>
            </select>
        </div>

        <div class="form-group">
            <label for="class_name">Lớp:</label>
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

        <div class="form-group">
            <label for="educationLevel">Cấp:</label>
            <select name="educationLevel" name="" required>
                <option value="">--Chọn cấp học--</option>
                <option value="Cấp 1">Cấp 1</option>
                <option value="Cấp 2">Cấp 2</option>
                <option value="Cấp 3">Cấp 3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ:</label>
            <input name="address" type="text" style="width: 500px"
                placeholder="VD: 504 Đ. Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng" />
        </div>

        <div class="form-group">
            <label for="">Số buổi dạy trong một tuần:</label>
            <input name="numberOfSessions" type="text" placeholder="VD: 1,2,3,4,..." />
        </div>

        <div class="form-group">
            <label for="">Mức lương (vnđ):</label>
            <input name="salary" type="text" placeholder="VD: 1200000, 800000 ..." />
        </div>

        <div class="form-group">
            <label for="">Note:</label>
            <textarea name="note" name="" rows="4"></textarea>
        </div>

        <button type="submit">Gửi Yêu Cầu</button>
        <div class="message" id="formMessage"></div>
    </form>
</div>

<!---------------------- làm footer------------------------- -->
<?php
include "footer.php";  
?>