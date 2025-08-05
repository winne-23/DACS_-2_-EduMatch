<?php
include(__DIR__ . "/../../admin/database.php");

?>
<?php
class phu_huynh_class {
    private $db;
//gọi đến database
    public function __construct() {
        $this->db = new Database();
    }
// add gia su
    public function insert_phu_huynh($fullName,$phoneNumber,$subject,$class_name,$educationLevel,$address,$numberOfSessions,$salary,$note){
        $query = "INSERT INTO phu_huynh(fullName,phoneNumber,subject,class_name,educationLevel,address,numberOfSessions,salary,note) 
        VALUES ('$fullName','$phoneNumber','$subject','$class_name','$educationLevel','$address','$numberOfSessions','$salary','$note')";
        $result = $this ->db->insert($query);
        // header('location:class_list.php');
        return $result;
    }
    // Lấy thông tin gia sư theo id
    public function get_lop_chua_giao($phu_huynh_id) {
        $query = "SELECT * FROM phu_huynh WHERE phu_huynh_id = $phu_huynh_id";
        return $this->db->select($query);
    }

// show list Lop chưa giao
    public function show_lop_chua_giao(){
        $query = "SELECT * FROM phu_huynh ORDER BY phu_huynh_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }

    // Định nghĩa hàm delete_lop_chua_giao
    public function delete_lop_chua_giao($phu_huynh_id){
        $query = "DELETE FROM phu_huynh  WHERE Phu_huynh_id = '$phu_huynh_id'";
        $result = $this ->db->delete($query);
        header('location:lop_chua_giao_list.php');
        return $result;
    }

    // show list show_dk_nhan_lop
    public function show_dk_nhan_lop(){
        $query = "SELECT * FROM dk_nhan_lop ORDER BY dk_nhan_lop_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
        // Lấy thông tin get_lop_chua_giao
    public function get_dk_nhan_lop($dk_nhan_lop_id){
        $query = "SELECT * FROM dk_nhan_lop WHERE dk_nhan_lop_id = $dk_nhan_lop_id";
        return $this->db->select($query);
    }
        // Định nghĩa hàm delete_lop_chua_giao
    public function delete_dk_nhan_lop($dk_nhan_lop_id){
        $query = "DELETE FROM dk_nhan_lop  WHERE dk_nhan_lop_id = '$dk_nhan_lop_id'";
        $result = $this ->db->delete($query);
        header('location:dk_nhan_lop_list.php');
        return $result;
    }
    // // show list Menu
//     public function show_cartegory(){
//         $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
//         $result = $this ->db->select($query);
//         return $result;
//     }
// // Định nghĩa hàm get_cartegory 
//     public function get_cartegory($_get_cartegory){
//         $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id = '$_get_cartegory'";
//         $result = $this ->db->select($query);
//         return $result;
//     }
// // Định nghĩa hàm update_cartegory
//     public function update_cartegory($cartegory_name,$cartegory_id){
//         $query = "UPDATE tbl_cartegory SET cartegory_name = '$cartegory_name'
//         WHERE cartegory_id = '$cartegory_id' ";
//         $result = $this ->db->update($query);
//         header('location:cartegory_list.php');
//         return $result;
//     }
// // Định nghĩa hàm delete_cartegory
//     public function delete_cartegory($cartegory_id){
//         $query = "DELETE FROM tbl_cartegory  WHERE cartegory_id = '$cartegory_id'";
//         $result = $this ->db->delete($query);
//         header('location:cartegory_list.php');
//         return $result;
//     }
}
?>