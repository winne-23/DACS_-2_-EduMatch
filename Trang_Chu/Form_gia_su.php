<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Form.css" />
    <link rel="icon" href="/Image/Logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <title>EduMatch</title>
</head>

<?php
include "gia_su_class.php";
?>

<?php
$gia_su = new gia_su_class;
if($_SERVER ['REQUEST_METHOD']=== 'POST'){
    $fullName = $_POST['fullName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $certificate = $_POST['certificate'];
    $subject = $_POST['subject'];
    $educationLevel = $_POST['educationLevel'];
    $address = $_POST['address'];
    $exp_teaching = $_POST['exp_teaching'];
    $self_introduction = $_POST['self_introduction'];
    $insert_gia_su = $gia_su ->insert_gia_su($fullName,$phoneNumber,$email,$certificate,$subject,$educationLevel,$address,$exp_teaching,$self_introduction);
}
?>

<body>
    <!-- -----------------làm thanh menu bên trên ------------------->
    <header class="custom_header">
        <div class="logo">
            <a href="index.php"><img src="..\Image\Logo.png" alt="Xin lỗi nha quý dị" srcset="" /></a>
        </div>
        <div class="menu">
            <li class="Giới thiệu">
                <a href="Gioi_thieu.php" title="Menu giới thiệu">Giới thiệu</a>
            </li>
            <li title="Menu phụ huynh">
                <a href="Menu_phu_huynh.php">Phụ huynh</a>
                <ul class="sub_menu">
                    <li>
                        <a href="Form_phu_huynh.php">Đăng kí tìm gia sư</a>
                    </li>
                    <li>
                        <a href="Menu_phu_huynh.php">Học phí tham khảo</a>
                    </li>
                    <li>
                        <a href="Menu_phu_huynh.php">Dịch vụ gia sư</a>
                    </li>
                    <li>
                        <a href="Menu_phu_huynh.php">Gia sư tiêu biểu</a>
                    </li>
                </ul>
            </li>
            <li title="Menu gia sư">
                <a href="Menu_gia_su.php">Gia sư</a>
                <ul class="sub_menu">
                    <li>
                        <a href="Form_gia_su.php">Đăng kí làm gia sư</a>
                    </li>
                    <li>
                        <a href="Menu_gia_su.php">Hướng dẫn nhận lớp</a>
                    </li>
                    <li>
                        <a href="Menu_gia_su.php">Hợp đồng gia sư</a>
                    </li>
                    <li>
                        <a href="Menu_gia_su.php">Tuyển dụng</a>
                    </li>
                </ul>
            </li>
            <li title="Menu lớp chưa giao">
                <a href="Menu_lop_chua_giao.php">Lớp chưa giao</a>
                <ul class="sub_menu">
                    <li>
                        <a href="Menu_lop_chua_giao.php">Cấp 1</a>
                    </li>
                    <li>
                        <a href="Menu_lop_chua_giao.php">Cấp 2</a>
                    </li>
                    <li>
                        <a href="Menu_lop_chua_giao.php">Cấp 3</a>
                    </li>
                </ul>
            </li>
            <li title="Menu tuyển dụng">
                <a href="Menu_tuyen_dung.php">Tuyển dụng</a>
            </li>
            <li title="Menu hỏi đáp">
                <a href="Menu_hoi_dap.php">Hỏi đáp</a>
                <ul class="sub_menu">
                    <li>
                        <a href="Menu_hoi_dap.php">Phụ huynh</a>
                    </li>
                    <li>
                        <a href="Menu_hoi_dap.php">Gia sư</a>
                    </li>
                </ul>
            </li>
            <li title="Menu liên hệ">
                <a href="Menu_lien_he.php">Liên hệ</a>
            </li>
        </div>
    </header>
    <div class="spacer"></div>
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
                    <input type="text" id="address" name="address"
                        placeholder="VD: Hải Châu, Ngũ Hành Sơn, Sơn Trà, ..." required />
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
                    <label for="self_introduction">Đôi lời giới thiệu về bản thân:</label>
                    <textarea id="self_introduction" name="self_introduction" rows="4"></textarea>
                </div>

                <button type="submit">Gửi Yêu Cầu</button>
                <div class="message" id="formMessage"></div>
        </form>
    </div>

    <!---------------------- làm footer------------------------- -->
    <div class="footer_top">
        <li title="Footer Liên hệ">
            <a class="footer_title">Liên hệ</a>
            <ul class="sub_footer">
                <img src="..\Image\Logo.png" style="width: 35%; height: auto" alt="Xin lỗi nha quý dị" srcset="" />

                <li>
                    <p>Công ty trách nhiệm hữu hạn một thành viên EduMath</p>
                </li>
                <li>
                    <p>
                        Địa chỉ: 470 Đ. Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng ,
                        Vietnam
                    </p>
                </li>
                <li>
                    <p>ĐT: 0935.707.794</p>
                </li>
                <li>
                    <p>Email: thangtm.23it@vku.udn.vn</p>
                </li>
            </ul>
        </li>
        <li title="Footer hỏi đáp">
            <a class="footer_title">Các câu hỏi thường gặp</a>
            <ul class="sub_footer">
                <li>
                    <p>Tại sao tôi lại tìm gia sư trên EduMath?</p>
                </li>
                <li>
                    <p>Có phải đóng gì thêm ngoài tiền học phí không?</p>
                </li>
                <li>
                    <p>Nhà tôi không có chỗ để học?</p>
                </li>
                <li>
                    <p>Muốn nhận lớp dạy tôi phải làm những gì?</p>
                </li>
                <li>
                    <p>Hiện giờ tôi không đủ chi phí để nhận lớp?</p>
                </li>
                <li>
                    <p>Có phải làm hợp đồng không?</p>
                </li>
                <li>
                    <p>Khi dạy gia sư có cam kết gì không?</p>
                </li>
                <li>
                    <p>Nếu tôi thấy không hài lòng về gia sư thì sao?</p>
                </li>
            </ul>
        </li>
        <li title="Footer Trên mạng xã hội">
            <a class="footer_title">Các trang mạng truyền thông</a>
            <ul>
                <li class="footer_icon">
                    <a href="https://www.facebook.com/tran.thang.453967/" class="fa-brands fa-facebook"></a>
                    <a href="https://www.instagram.com/okewinn.ne/" class="fa-brands fa-instagram"></a>
                    <a href="https://www.tiktok.com/@tranmanhthang07082005" class="fa-brands fa-tiktok"></a>
                    <a href="https://mail.google.com/mail/u/0/#inbox" class="fa-solid fa-envelope"></a>
                    <a href="https://www.threads.com/@okewinn.ne" class="fa-brands fa-threads"></a>
                </li>
            </ul>
        </li>
    </div>
</body>

</html>