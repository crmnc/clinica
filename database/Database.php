<?php
namespace database;

use mysqli;

class Database {
    private mysqli $conn;


    public function __construct() {
        $host = "127.0.0.1";
        $port = "3307";
        $username = "root";
        $password = "";
        $database = "clinica";

        $this->conn = new mysqli($host, $username, $password, $database, $port);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
