<?php
    include "header.php";
    include "slider.php";
    include "class/submenu_class.php";
?>

<?php
    $submenu = new submenu;
    $submenu_id = $_GET['submenu_id'];
    $get_submenu = $submenu->get_submenu($submenu_id);
    if($get_submenu){
        $result_submenu = $get_submenu->fetch_assoc();
    }
    
?>
<!-- ------------Hàm update--------- -->
<?php
$submenu = new submenu;
if($_SERVER ['REQUEST_METHOD']=== 'POST'){
    $cartegory_id = $_POST['cartegory_id'];
    $submenu_name = $_POST['submenu_name'];
    $update_submenu = $submenu ->update_submenu($cartegory_id,$submenu_name,$submenu_id);
}
?>

<div class="admin_content_right">
    <h1>Thêm Sub-Menu</h1>
    <div class="admin_content_right_category_add">
        <form action="" method="POST">
            <select name="cartegory_id" id="">
                <option value="">--Chọn Submenu--</option>
                <?php
                    $show_cartegory = $submenu ->show_cartegory();
                    if($show_cartegory){
                        while($result = $show_cartegory ->fetch_assoc()) {
                ?>
                <option <?php if($result_submenu['cartegory_id'] == $result['cartegory_id']) {echo "SELECTED";} ?>
                    value="<?php echo $result ['cartegory_id']  ?>">
                    <?php echo $result ['cartegory_name']?>
                </option>

                <?php
                    }}
                ?>
            </select> <br>
            <input required name="submenu_name" type="text" placeholder="Nhập tên Sub-Menu"
                value="<?php echo ($result_submenu['submenu_name'])  ?>">
            <button type="submit">Sửa</button>
        </form>
    </div>
</div>
</body>

</html>