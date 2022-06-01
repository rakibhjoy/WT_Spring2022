<?php
include ("../Model/model.php");

    if(isset($_POST["submit"])){

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $age = $_POST["age"];
        $salary = $_POST["salary"];

        if( empty($fname) || empty($lname) || empty($age) || empty($salary) ){
            echo "all fields are required";
        }
        else{
            $mydb = new DB();
            $connobj = $mydb->openCon();
            $mydb->InsertData($connobj, "person", $fname, $lname, $age, $salary);

        }
    }
?>