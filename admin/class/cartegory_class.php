<?php
include(__DIR__ . "/../database.php");

?>
<?php
class cartegory {
    private $db;
//gọi đến database
    public function __construct() {
        $this->db = new Database();
    }
// add Menu
    public function insert_cartegory($cartegory_name){
        $query = "INSERT INTO tbl_cartegory(cartegory_name) VALUES ('$cartegory_name')";
        $result = $this ->db->insert($query);
        header('location:cartegory_list.php');
        return $result;
    }
// show list Menu
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
// Định nghĩa hàm get_cartegory 
    public function get_cartegory($_get_cartegory){
        $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id = '$_get_cartegory'";
        $result = $this ->db->select($query);
        return $result;
    }
// Định nghĩa hàm update_cartegory
    public function update_cartegory($cartegory_name,$cartegory_id){
        $query = "UPDATE tbl_cartegory SET cartegory_name = '$cartegory_name'
        WHERE cartegory_id = '$cartegory_id' ";
        $result = $this ->db->update($query);
        header('location:cartegory_list.php');
        return $result;
    }
// Định nghĩa hàm delete_cartegory
    public function delete_cartegory($cartegory_id){
        $query = "DELETE FROM tbl_cartegory  WHERE cartegory_id = '$cartegory_id'";
        $result = $this ->db->delete($query);
        header('location:cartegory_list.php');
        return $result;
    }
}
?>