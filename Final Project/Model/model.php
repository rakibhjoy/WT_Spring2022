<?php

class DB{

    function openCon(){
            
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "mytestdb1";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        if($conn->connect_error){
            echo "Connection error";
        }

        return $conn;
        
    }

    function closeCon($conn){
        $conn->close();
    }
    
    function InsertData($conn, $tablename, $fname, $lname, $age, $salary){
        $sqlstr = "INSERT INTO $tablename (fname, lname, age, salary) Values ('$fname','$lname','$age','$salary')";
        
        if($conn->query($sqlstr)){
            echo "record inserted";
        }
        else{
            echo"can not insert".$conn->error;
        }

    }

    function fetchData($conn, $tablename){
        $sqlstr="SELECT * FROM $tablename";
        $results = $conn->query($sqlstr);
        return $results;
    }

    function searchUser($conn, $tablename, $fname){
        $sqlstr = "SELECT * FROM $tablename WHERE fname='$fname'";
        $results = $conn->query($sqlstr);
        return $results;
    }

    function updateData($conn, $tablename, $fname, $lname, $age, $salary){
        $sqlstr = "UPDATE $tablename SET fname='$fname', lname='$lname', age='$age', salary='$salary' WHERE fname='$fname'";
        $conn->query($sqlstr);

    }

    function deleteData($conn, $tablename, $fname){
        $sqlstr = "DELETE FROM $tablename WHERE fname='$fname'";

        if($conn->query($sqlstr)){
            echo "Data deleted";
        }
        else{
            echo "Data not deleted".$conn->error;
        }
    }

}

?>