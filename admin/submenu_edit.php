<?php
    include "header.php";
    include "slider.php";
    include "class/submenu_class.php";
?>

<?php
    $cartegory = new cartegory;
    if(!isset($_GET['cartegory_id']) || $_GET['cartegory_id']==NULL){
        echo "<scrip> window.location = 'cartegory_list.php";
    }
    else{
        $cartegory_id = $_GET['cartegory_id'];
    }
    $_get_cartegory = $cartegory ->get_cartegory($cartegory_id);
    if($_get_cartegory){
        $result = $_get_cartegory ->fetch_assoc();
    }
?>
<!-- ------------Hàm update--------- -->
<?php
    if($_SERVER ['REQUEST_METHOD']=== 'POST'){
        $cartegory_name = $_POST['cartegory_name'];
    $update_cartegory = $cartegory ->update_cartegory($cartegory_name,$cartegory_id);
}
?>
<div class="admin_content_right">
    <h1>Thêm Menu</h1>
    <div class="admin_content_right_category_add">
        <form action="" method="POST">
            <input required name="cartegory_name" type="text" placeholder="Nhập tên Menu"
                value="<?php echo $result['cartegory_name'] ?>">
            <button type="submit">Sửa</button>
        </form>
    </div>
</div>
</body>

</html>