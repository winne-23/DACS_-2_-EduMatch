<?php
include "class/gia_su_class.php";
include "header.php";
?>

<?php
$dk_gia_su = new gia_su_class;
if($_SERVER ['REQUEST_METHOD']=== 'POST'){
    $fullName = $_POST['fullName'];
    $phoneNumber = $_POST['phoneNumber'];
    $cccd = $_POST['cccd'];
    $email = $_POST['email'];
    $certificate = $_POST['certificate'];
    $subject = $_POST['subject'];
    $educationLevel = $_POST['educationLevel'];
    $address = $_POST['address'];
    $exp_teaching = $_POST['exp_teaching'];
    $self_introduction = $_POST['self_introduction'];
    $insert_dk_gia_su = $dk_gia_su ->insert_dk_gia_su($fullName,$phoneNumber,$cccd,$email,$certificate,$subject,$educationLevel,$address,$exp_teaching,$self_introduction);
}
?>
<!-- -------------------Làm Đăng kí gia sư----------------- -->
<div class="container">
    <h2 class="custom_h2">Đăng Ký Làm Gia Sư</h2>
    <form id="tutorRequestForm" action="" method="POST">
        <div class="form-group">
            <label for="fullName">Họ và Tên:</label>
            <input type="text" id="fullName" name="fullName" placeholder="VD: Trần Mạnh Thắng" />
        </div>

        <div class="form-group">
            <label for="phoneNumber">Số điện thoại:</label>
            <input type="text" id="phoneNumber" name="phoneNumber" required placeholder="VD: 0935707794"
                pattern="[0-9]{1,10}" title="Vui lòng nhập số điện thoại hợp lệ (10-11 chữ số)" />
        </div>

        <div class="form-group">
            <label for="cccd">Căn cước công dân:</label>
            <input type="text" id="cccd" name="cccd" required placeholder="VD: 064205******" pattern="[0-9]{1,12}"
                title="Vui lòng nhập cccd (11-12 chữ số)" />
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="VD: thangtm.23it@vku.udn.vn" />
        </div>

        <div class="form-group">
            <label for="certificate">Trình độ học vấn:</label>
            <select id="certificate" name="certificate" required>
                <option value="">Trình độ</option>
                <option value="Trung học phổ thông (THPT)">
                    Trung học phổ thông (THPT)
                </option>
                <option value="Đại học">Đại học</option>
                <option value="Cao đăng">Cao đăng</option>
                <option value="Thạc sĩ">Thạc sĩ</option>
                <option value="Tiến sĩ">Tiến sĩ</option>
            </select>
        </div>

        <div class="form-group">
            <label for="subject">Môn học có thể làm gia sư:</label>
            <select id="subject" name="subject" required>
                <option value="">Chọn môn học</option>
                <option value="Toán"> Toán</label>
                <option value="Lý"> Lý</label>
                <option value="Hóa"> Hóa</label>
                <option value="Anh"> Anh</label>
                <option value="Văn"> Văn</label>
                <option value="Sinh"> Sinh</label>
                <option value="Sử"> Sử</label>
                <option value="Địa"> Địa</label>
                <option value="Khác"> Khác</label>
            </select>
        </div>
        <div class="form-group">
            <label for="educationLevel">Cấp:</label>
            <select id="educationLevel" name="educationLevel" required>
                <option value="">Chọn cấp</option>
                <option value="Cấp 1">Cấp 1</option>
                <option value="Cấp 2">Cấp 2</option>
                <option value="Cấp 3">Cấp 3</option>
            </select>

            <div class="form-group">
                <label for="address">Khu vực có thể dạy:</label>
                <input type="text" id="address" name="address" placeholder="VD: Hải Châu, Ngũ Hành Sơn, Sơn Trà, ..."
                    required />
            </div>

            <div class="form-group">
                <div class="exp">
                    <label for="exp_teaching">Kinh nghiệm dạy học:</label>
                    <select name="exp_teaching" id="exp_teaching">
                        <option value="">Chọn kinh nghiệm</option>
                        <option value="Đã có kinh nghiệm">Đã có kinh nghiệm</option>
                        <option value="Chưa có kinh nghiệm">Chưa có kinh nghiệm</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="self_introduction">Đôi lời giới thiệu về bản thân(Có thể dán kèm các link minh
                    chứng):</label>
                <textarea id="self_introduction" name="self_introduction" rows="4"></textarea>
            </div>

            <button type="submit">Gửi Yêu Cầu</button>
            <div class="message" id="formMessage"></div>
    </form>
</div>

<!---------------------- làm footer------------------------- -->
<?php
include "footer.php";
?>