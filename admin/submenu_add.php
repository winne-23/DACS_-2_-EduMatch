<?php
include "header.php";
include "slider.php";
include "class/submenu_class.php";
?>
<?php
$submenu = new submenu;
if($_SERVER ['REQUEST_METHOD']=== 'POST'){
    $cartegory_id = $_POST['cartegory_id'];
    $submenu_name = $_POST['submenu_name'];
    $insert_submenu = $submenu ->insert_submenu($cartegory_id,$submenu_name);
}
?>

<div class="admin_content_right">
    <h1>Thêm Sub-Menu</h1>
    <div class="admin_content_right_category_add">
        <form action="" method="POST">
            <select name="cartegory_id" id="">
                <?php
                    $show_cartegory = $submenu ->show_cartegory();
                    if($show_cartegory){
                        while($result = $show_cartegory ->fetch_assoc()) {
                ?>
                <option value="<?php echo $result ['cartegory_id'] ?>">

                    <?php echo $result ['cartegory_name']?>
                </option>

                <?php
                    }}
                ?>
            </select> <br>
            <input required name="submenu_name" type="text" placeholder="Nhập tên Sub-Menu">
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</body>

</html>