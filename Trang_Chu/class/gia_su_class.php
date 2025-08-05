<?php
include(__DIR__ . "/../../admin/database.php");
?>
<?php
class gia_su_class {
    private $db;
//gọi đến database
    public function __construct() {
        $this->db = new Database();
    }
// add gia su
    public function insert_dk_gia_su($fullName,$phoneNumber,$cccd,$email,$certificate,$subject,$educationLevel,$address,$exp_teaching,$self_introduction){
        $query = "INSERT INTO dk_gia_Su(fullName,phoneNumber,cccd,email,certificate,subject,educationLevel,address,exp_teaching,self_introduction) 
        VALUES ('$fullName','$phoneNumber','$cccd','$email','$certificate','$subject','$educationLevel','$address','$exp_teaching','$self_introduction')";
        $result = $this ->db->insert($query);
        // header('location:class_list.php');
        return $result;
    }
// show list dk_gia_su
    public function show_dk_gia_su(){
        $query = "SELECT * FROM dk_gia_su ORDER BY gia_su_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
// Lấy thông tin gia sư theo id
    public function get_dk_gia_su($gia_su_id) {
        $query = "SELECT * FROM dk_gia_su WHERE gia_su_id = $gia_su_id";
        return $this->db->select($query);
    }

// Thêm vào bảng gia_su
    public function insert_gia_su($row) {
        $insert = "INSERT INTO gia_su (fullName, phoneNumber, cccd, email, certificate, subject, educationLevel, address, exp_teaching, self_introduction)
                   VALUES (
                       '{$row['fullName']}',
                       '{$row['phoneNumber']}',
                       '{$row['cccd']}',
                       '{$row['email']}',
                       '{$row['certificate']}',
                       '{$row['subject']}',
                       '{$row['educationLevel']}',
                       '{$row['address']}',
                       '{$row['exp_teaching']}',
                       '{$row['self_introduction']}'
                   )";
        return $this->db->insert($insert);
    }

// Xóa khỏi bảng dk_gia_su
    public function delete_dk_gia_su($gia_su_id) {
        $delete = "DELETE FROM dk_gia_su WHERE gia_su_id = $gia_su_id";
        return $this->db->delete($delete);
    }

    // show list gia_su
    public function show_gia_su(){
        $query = "SELECT * FROM gia_su ORDER BY gia_su_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
    // Lấy thông tin gia sư theo id
    public function get_gia_su($gia_su_id) {
        $query = "SELECT * FROM gia_su WHERE gia_su_id = $gia_su_id";
        return $this->db->select($query);
    }
    // Xóa khỏi bảng dk_gia_su
    public function delete_gia_su($gia_su_id) {
        $delete = "DELETE FROM gia_su WHERE gia_su_id = $gia_su_id";
        return $this->db->delete($delete);
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