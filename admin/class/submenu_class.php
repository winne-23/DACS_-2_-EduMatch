<?php
include(__DIR__ . "/../database.php");

?>
<?php
class submenu {
    private $db;
//gọi đến database
    public function __construct() {
        $this->db = new Database();
    }
// insert menu
    public function insert_submenu($cartegory_id,$submenu_name){
        $query = "INSERT INTO tbl_submenu(cartegory_id,submenu_name) VALUES ('$cartegory_id', '$submenu_name')";
        $result = $this ->db->insert($query);
        header('location:submenu_list.php');
        return $result;
    }
// show list Menu
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
// show list submenu
    public function show_submenu(){
        $query = "SELECT tbl_submenu.*, tbl_cartegory.cartegory_name
        FROM tbl_submenu INNER JOIN tbl_cartegory ON tbl_submenu.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_submenu.submenu_id DESC";
        $result = $this->db->select($query);
        return $result;
    }
// Định nghĩa hàm get_cartegory 
    public function get_submenu($submenu_id){
        $query = "SELECT * FROM tbl_submenu WHERE submenu_id = '$submenu_id'";
        $result = $this ->db->select($query);
        return $result;
    }
// Định nghĩa hàm update_cartegory
    public function update_submenu($cartegory_id,$submenu_name,$submenu_id){
        $query = "UPDATE tbl_submenu SET submenu_name = '$submenu_name', cartegory_id = '$cartegory_id'
        WHERE submenu_id = '$submenu_id' ";
        $result = $this ->db->update($query);
        header('location:submenu_list.php');
        return $result;
    }
// Định nghĩa hàm delete_cartegory
    public function delete_submenu($submenu_id){
        $query = "DELETE FROM tbl_submenu  WHERE submenu_id = '$submenu_id'";
        $result = $this ->db->delete($query);
        header('location:submenu_list.php');
        return $result;
    }    
}
?>