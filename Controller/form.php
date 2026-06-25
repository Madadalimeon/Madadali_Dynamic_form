<?php
include("../Model/form.php");
class Form_value
{
    public $form_name;
    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->form_name = $_POST["Form_name"];
            $Queryobj = new form_database_query();
            $Queryobj->Form_Add($this->form_name);
        }
    }
}
new Form_value();
?>