<?php
class DatabaseConnection {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "deacons_publishers";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
?>
