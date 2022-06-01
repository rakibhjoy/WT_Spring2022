<?php
include("../Control/registrationhandle.php");

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
    </head>
    <body>
        <div id="box">
            <form action="" method="post" onsubmit="return validatename()" >
                
                <p id="labels"> First Name: </p>
                <input type="text" name="fname" id="fname" onkeyup="validatename()">
				<p id="nameerror"></p>

                <p id="labels">Last Name: </p> 
                <input type="text" name="lname">
                
                <p id="labels">Age: </p> 
                <input type="number" name="age">
                
                <p id="labels">Salary: </p> 
                <input type="number" name="salary"><br>
                
                <input type="submit" class="button submitbutton" name="submit" value="SUBMIT">
                <input type="reset" class="button resetbutton" name="reset" value="RESET">
                <input type="submit" class="button updatebutton" name="update" value="UPDATE">
                <div class="sticky">
                    This is sticky note
                </div>

            </form>
			<script src="../js/validation.js"></script>
        </div>
    </body>
</html>