<?php
$validatepassword="";
$validateemail=""; 
$val=true;
$fName="";
$lName="";
$email="";
$address="";
$username=""; 

$Password="";
$validfile="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_REQUEST["username"];
    $fName=$_REQUEST["fname"];
    $lName=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $Password=$_REQUEST["password"];
    $validateemail="";

    if(!empty($username) && strlen($username)>=4) 
    {
        $username="You Name Is ".$username;
    }

    else if(empty($username))
    {
        $username="Field Must Be fulfilled ";
        $val=false;
    }
    else if( strlen($username)<4)
    {
        $username="Name Must Have 4 character !!";
        $val=false;
    }

    if(!empty($fName) && strlen($fName)>=4) 
    {
        $Name="You First Name Is ".$fName;
    }

    else if(empty($fName))
    {
        $fName="Field Must Be fulfilled ";
        $val=false;
    }
    else if( strlen($fName)<6)
    {
        $fName="Name Must Have 6 character !!";
        $val=false;
    }

    if(!empty($lName) && strlen($lName)>=4) 
    {
        $Name="You Lat Name Is ".$lName;
    }

    else if(empty($lName))
    {
        $lName="Field Must Be fulfilled ";
        $val=false;
    }
    else if( strlen($lName)<6)
    {
        $lName="Name Must Have 6 character !!";
        $val=false;
    }


    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $validateemail="You Must Enter Valid Email";
    }
    else{
        $validateemail= "Your Email is ".$email;
    }


    if(strlen($Password)<8)
    {
        $validatepassword=" Password Must Contain 8 character!!";
        $val=false;
    }
    else{
        $validatepassword=$Password;
    }


    $target_File="files/".$_FILES["fileupload"]["name"];

    if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
    {
        echo "You have uploaded a new file";
        echo "<img src='".$target_File."'>";
    }

    if($val==false){
        echo "Invalid";
    }
    else{
        echo "Welcome ".$username;
        header("refresh: 3; url=showgovt.php");
    }
}
// else {
//     echo "<br><br>Sorry ,There is an problem<br>"; 
// }

elseif($_SERVER["REQUEST_METHOD"]=="POST"){
    header("refresh: 3; url=registrationform.php");
}
?>