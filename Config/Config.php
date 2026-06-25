<?php
class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "dynamic_form";
    public $conn;
    function Database()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
        if ($this->conn->connect_error) {
            die("failed to connected" . $this->conn->connect_error);
        }
        return $this->conn;
    }
}