<?php
include("../Config/Config.php");

class form_database_query
{
    public $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->Database();
    }

    public function Form_Add($form_name)
    {
        $query = "INSERT INTO forms_name (Form_name) VALUES ('$form_name')";
        $result = mysqli_query($this->conn, $query);

        if ($result) {
            header("location: ../App/index.php");
        }
    }
}
