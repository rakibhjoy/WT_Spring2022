<?php

include ("../Control/viewdatahandle.php");

?>

<html>
    <body>
        <form action="" method="post">
            <input type="submit" name="fetch" value="Fetch Data">
        </form>



        <form action="" method="post">
            First Name: <input type="text" name="searchData">
            <input type="submit" name="search" value="Search">
            <input type="submit" name="delete" value="Delete">
        </form>

        <form action="" method="post">
            <input type="text" name="fname" value="<?php echo $fname; ?>">
            <input type="text" name="lname" value="<?php echo $lname; ?>">
            <input type="text" name="age" value="<?php echo $age; ?>">
            <input type="text" name="salary" value="<?php echo $salary; ?>">

            <input type="submit" name="update" value="Update">
        </form>
    </body>
</html>