<?php

$validateradio="";
$validatecheckbox="";
$validatepassword="";
$validateemail=""; 
$v1=$v2=$v3="";
$Name="";
$email="";
$Age=""; 
$Password="";
$validfile="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$Password=$_REQUEST["password"];
$validateemail="";

if(!empty($Name) && strlen($Name)>=6) 
{
    $Name="You Name Is ".$Name;
}

else if(empty($Name))
{
    $Name="Field Must Be fulfilled ";
}
else if( strlen($Name)<5)
{
    $Name="Name Must Have 5 character !!";
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
}
else{
    $validatepassword=$Password;
}

if(isset($_REQUEST["designation"]))
{
    $validateradio= "Designation - ".$_REQUEST["designation"];
}
else{
    $validateradio= "Please Select Your Designation";
}
?>