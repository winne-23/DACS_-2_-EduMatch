<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="/Image/Logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <title>EduMatch</title>
</head>

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
    <div class="Introduce_contents">
        <!-- Banner -->
        <section class="hero is-medium hero-banner">
            <div class="hero-body has-text-centered">
                <p class="title">Gia sư tại EduMatch</p>
                <p class="subtitle">
                    Nơi bạn kết nối với hàng trăm lớp học chất lượng
                </p>
            </div>
        </section>

        <!-- Nội dung -->
        <section class="section">
            <div class="container">
                <!-- Hướng dẫn nhận lớp -->
                <div class="info-section">
                    <div class="icon-title">
                        <i class="fas fa-chalkboard-teacher"></i> Hướng dẫn nhận lớp
                    </div>
                    <p>
                        Chỉ với vài bước đơn giản, bạn có thể bắt đầu nhận lớp dạy phù hợp
                        với chuyên môn và lịch rảnh.
                    </p>
                    <ul>
                        <li>✔️ ➤ Đăng ký thông tin cá nhân rõ ràng</li>
                        <li>✔️ ➤ Chọn lớp phù hợp trên mục “Lớp chưa giao”</li>
                        <li>✔️ ➤ Liên hệ trung tâm để xác nhận</li>
                    </ul>
                </div>

                <!-- Hợp đồng gia sư -->
                <div class="info-section">
                    <div class="icon-title">
                        <i class="fas fa-file-contract"></i> Hợp đồng gia sư
                    </div>
                    <p>
                        Gia sư sẽ ký hợp đồng đảm bảo quyền lợi đôi bên, được hỗ trợ và
                        cam kết học phí rõ ràng.
                    </p>
                    <ul>
                        <li>✔️ ➤ Thời hạn linh hoạt, không ràng buộc lâu dài</li>
                        <li>✔️ ➤ Hỗ trợ đổi lớp nếu không phù hợp</li>
                        <li>✔️ ➤ Cam kết thanh toán học phí theo buổi</li>
                    </ul>
                </div>

                <!-- Tuyển dụng -->
                <div class="info-section has-text-centered">
                    <div class="icon-title is-justify-content-center">
                        <i class="fas fa-users"></i> Tuyển dụng gia sư
                    </div>
                    <p>
                        Bạn đam mê giảng dạy? Hãy gia nhập đội ngũ gia sư nhiệt huyết và
                        chuyên nghiệp tại EduMatch.
                    </p>
                    <a href="Form_gia_su.php" class="button btn-primary mt-3">
                        Đăng ký làm gia sư ngay
                    </a>
                </div>
            </div>
        </section>
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