<?php
class Database
{
    private $host = "locahost";
    private $username = "root";
    private $password = "";
    private $dbname = "dynamic_form";
    public $conn;
    public function Database()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("connected failed" . $this->conn->connect_error);
        }
        return $this->conn;
    }
}
