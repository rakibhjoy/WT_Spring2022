<?php
include("../Model/model.php");

if (isset($_POST["submit"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $salary=$_POST["salary"];

  

    if(empty($fname) || empty($lname) || empty($age) || empty($salary)){

        echo "Please insert all the field";
    }

    

    else{
        $mydb =new mydb(); //creating an object of mydb class from model.php
        $conobj=$mydb->opencon(); //connecting the databse with the php
        $mydb->InsertData( $fname,$lname, $age,$salary,"person",$conobj);
        $mydb->closecon($conobj);
    }


}


?>