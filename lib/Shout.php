<?php
include 'Database.php';
class Shout{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }
    public function getAllData(){
        $query = "SELECT * FROM tbl_box ORDER BY id DESC";
        $result = $this->db->select($query);
        return $result;
    }
}
?>