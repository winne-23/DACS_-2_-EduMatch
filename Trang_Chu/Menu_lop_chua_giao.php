<!DOCTYPE html>
<html lang="en">

<?php
include "phu_huynh_class.php";
?>
<?php
$lop_chua_giao = new phu_huynh_class;
$result = $lop_chua_giao ->show_lop_chua_giao();
?>

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
        <section class="section">
            <div class="container">
                <h1 class="title is-3 has-text-centered">
                    Danh sách các lớp chưa giao
                </h1>

                <!-- Bộ lọc -->
                <div class="filter-bar box">
                    <div class="columns is-multiline">
                        <div class="column is-one-third">
                            <input id="subject-filter" class="input" type="text"
                                placeholder="Tìm theo môn học, ví dụ: Toán, Lý..." />
                        </div>
                        <div class="column is-one-third">
                            <input id="area-filter" class="input" type="text"
                                placeholder="Khu vực, ví dụ: Hải Châu, Đà Nẵng" />
                        </div>
                        <div class="column is-one-third">
                            <button id="filter-button" class="button is-info is-fullwidth">
                                <i class="fas fa-filter"></i> &nbsp; Lọc kết quả
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Danh sách lớp -->
                <div class="columns is-multiline">
                    <?php if ($result): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="column is-half">
                        <div class="card class-card">
                            <div class="card-header">
                                <p class="card-header-title">
                                    <?php echo htmlspecialchars($row['subject'] . ' ' . $row['class_name']); ?>
                                </p>
                                <span
                                    class="tag is-<?php echo $row['educationLevel'] === 'Cấp 1' ? 'success' : ($row['educationLevel'] === 'Cấp 2' ? 'danger' : 'warning'); ?> m-3">
                                    <?php echo htmlspecialchars($row['educationLevel']); ?>
                                </span>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <p><strong>Địa chỉ:</strong> <?php echo htmlspecialchars($row['address']); ?></p>
                                    <p><strong>Số buổi:</strong>
                                        <?php echo htmlspecialchars($row['numberOfSessions']); ?> buổi/tuần</p>
                                    <p><strong>Mức lương:</strong>
                                        <?php echo htmlspecialchars(number_format((int)$row['salary'], 0, ',', '.') . ' VNĐ'); ?>
                                    </p>
                                    <p><strong>Note:</strong>
                                        <?php echo htmlspecialchars($row['note']); ?>
                                    </p>
                                </div>
                            </div>
                            <footer class="card-footer">
                                <a href="Dang_ki_nhan_lop.php" class="card-footer-item has-text-primary">Đăng ký nhận
                                    lớp</a>
                            </footer>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <p>Không có lớp nào được tìm thấy.</p>
                    <?php endif; ?>
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
    <script>
    document
        .getElementById("filter-button")
        .addEventListener("click", function() {
            const subjectInput = document
                .getElementById("subject-filter")
                .value.toLowerCase();
            const areaInput = document
                .getElementById("area-filter")
                .value.toLowerCase();

            const cards = document.querySelectorAll(".class-card");

            cards.forEach(function(card) {
                const cardText = card.innerText.toLowerCase();
                const matchSubject =
                    subjectInput === "" || cardText.includes(subjectInput);
                const matchArea = areaInput === "" || cardText.includes(areaInput);

                if (matchSubject && matchArea) {
                    card.parentElement.style.display = "block";
                } else {
                    card.parentElement.style.display = "none";
                }
            });
        });
    </script>
</body>

</html>