<!DOCTYPE html>
<html>
<head>

<?php
setcookie("user_decet","visited",time()+84600*7,"/");

if(isset($_COOKIE["user_decet"]))
{
    //echo"you have visited me before";
}
else
{
    echo"you are viciting me first time";
}
?> 



<body align = "center">

<title>Government Login </title>

</head>
<body>
<table>
<form method="post">
    <h1>Government Login</h1>
    Username: <input type="text" name="name"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="Submit" name ="Submit" value = "Login" ><br>

<a href=" registrationform.php" >Create account</b> </a><br>


</form>


<?php 
if(isset($_POST['Submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $val1="rakib";
    $val2="rakib";
    if($name==$val1 && $password==$val2)
    {
        echo "Successfully logged In";
        header("refresh: 1; url=showgovt.php");
    }
    else{
        echo "Incorrect details";
        header("refresh: 0.1; url=Front.php");
    }
    
}
else{
    echo "Form not submitted";
}

?>
</body>
</html>
