<?php
include(__DIR__ . "/../database.php");

?>
<?php
class class_subject {
    private $db;
//gọi đến database
    public function __construct() {
        $this->db = new Database();
    }
// add Class
    public function insert_class($subject,$class_name,$educationLevel,$address,$numberOfSessions,$salary,$note){
        $query = "INSERT INTO tbl_class(subject,class_name,educationLevel,address,numberOfSessions,salary,note) 
        VALUES ('$subject','$class_name','$educationLevel','$address','$numberOfSessions','$salary','$note')";
        $result = $this ->db->insert($query);
        header('location:class_list.php');
        return $result;
    }
// show list class
    public function show_class(){
        $query = "SELECT * FROM tbl_class ORDER BY class_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
// Định nghĩa hàm get_class 
    public function get_class($_get_class){
        $query = "SELECT * FROM tbl_class WHERE class_id = '$_get_class'";
        $result = $this ->db->select($query);
        return $result;
    }
// Định nghĩa hàm update_class
    public function update_class($class_id,$subject,$class_name,$educationLevel,$address,$numberOfSessions,$salary,$note){
        $query = "UPDATE tbl_class SET
        subject = '$subject',
        class_name = '$class_name',
        educationLevel = '$educationLevel',
        address = '$address',
        numberOfSessions = '$numberOfSessions',
        salary = '$salary',
        note = '$note'
        WHERE class_id = '$class_id' ";
        $result = $this ->db->update($query);
        header('location:class_list.php');
        return $result;
    }
// Định nghĩa hàm delete_class
    public function delete_class($class_id){
        $query = "DELETE FROM tbl_class  WHERE class_id = '$class_id'";
        $result = $this ->db->delete($query);
        header('location:class_list.php');
        return $result;
    }
}
?>