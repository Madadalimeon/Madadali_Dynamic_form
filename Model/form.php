<?php
include("../Config/Config.php");
class form_database_query
{
    public $conn;

    public function __construct()
    {
        $this->conn = new Database;
        $this->conn->Database();
    }

    function Form_Add($form_name) {
        print_r($form_name);
    }
}
