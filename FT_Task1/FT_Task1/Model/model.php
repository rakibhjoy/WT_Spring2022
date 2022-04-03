<?php
class mydb
{
function opencon(){

$DBHostname = "localhost"; //server name
$DBUsername = "root"; // by default
$DBpass=""; //not given
$DBName="testdb2"; //which database we want to connect

$conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
if($conn->connect_error){
    echo "can't create cinnection object";$conn->connect_error;
}
return $conn;
        
    }



function insertData($fname,$lname,$age,$salary,$tablename,$conn){
    $sqlstr = "INSERT INTO $tablename (fname,lname,age,salary) VALUES ('$fname','$lname',$age,$salary)";


//$isinsert = $conn->query($sqlstr);

if($conn->query($sqlstr) === TRUE){ //=== check with datatype
    echo"Data inserted";
}

else{
    echo "Can't insert".$conn->error;
}


}



function closecon($conn){
    $conn->close();
}

}



?>