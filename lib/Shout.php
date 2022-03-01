<?php
include 'Database.php';
class Shout{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }
}
?>