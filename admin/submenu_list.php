<?php
include "header.php";
include "slider.php";
include "class/submenu_class.php";
?>
<?php
$submenu = new submenu;
$show_submenu = $submenu ->show_submenu();
?>
<div class="admin_content_right">
    <div class="admin_content_right_cartegory_list">
        <h1>Danh sách Sub_menu</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Menu</th>
                <th>Sub_menu</th>
                <th>Tùy biến</th>
            </tr>
            <?php
                if($show_submenu){
                    $i = 0;
                    while($result = $show_submenu->fetch_assoc()){
                        $i++;
                        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['submenu_id'] ?></td>
                <td><?php echo $result['cartegory_name'] ?></td>
                <td><?php echo $result['submenu_name'] ?></td>
                <td><a href="submenu_edit.php?submenu_id=<?php echo $result['submenu_id'] ?>">Sửa</a>|
                    <a href="submenu_delete.php?submenu_id=<?php echo $result['submenu_id'] ?>">Xóa</a>
                </td>
            </tr>
            <?php
            }
            }
            ?>
        </table>
    </div>
</div>
</body>

</html>