<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
if($_SERVER ['REQUEST_METHOD']=== 'POST'){
    $cartegory_name = $_POST['cartegory_name'];
    $insert_cartegory = $cartegory ->insert_cartegory($cartegory_name);
}
?>
<div class="admin_content_right">
    <h1>Thêm Menu</h1>
    <div class="admin_content_right_category_add">
        <form action="" method="POST">
            <input required name="cartegory_name" type="text" placeholder="Nhập tên Menu">
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</body>

</html>