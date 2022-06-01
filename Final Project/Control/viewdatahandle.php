<?php
include("../Model/model.php");

$fname =$lname =$age= $salary = "";

    if(isset($_POST["fetch"])){
        $mydb = new DB();
        $connobj = $mydb->openCon();

        $myData = $mydb->fetchData($connobj, "person");
        $mydb->closeCon($connobj);

        if($myData->num_rows > 0){

            echo "<table>";

            
            echo "<tr>";

            echo "<td>";
            echo "First Name";
            echo "</td>";
            
            echo "<td>";
            echo "Last Name";
            echo "</td>";
            
            echo "<td>";
            echo "Age";
            echo "</td>";

            echo "<td>";
            echo "Salary";
            echo "</td>";

            echo "</tr>";

            while($row = $myData->fetch_assoc()){
                
                echo "<tr>";

                echo "<td>";
                echo $row["fname"];
                echo "</td>";
                
                echo "<td>";
                echo $row["lname"];
                echo "</td>";
                
                echo "<td>";
                echo $row["age"];
                echo "</td>";
                
                echo "<td>";
                echo $row["salary"];
                echo "</td>";

                echo "</tr>";

            }

            echo "</table>";

        }
        else{
            echo "no data found";
        }
    }


    if(isset($_POST["search"])){
        $mydb = new DB();
        $connobj = $mydb->openCon();

        $myData = $mydb->searchUser($connobj, "person", $_POST["searchData"]);
        $mydb->closeCon($connobj);

        if($myData->num_rows > 0){

                $row = $myData->fetch_assoc();
                $fname =  $row["fname"];
                $lname =  $row["lname"];
                $age =  $row["age"];
                $salary = $row["salary"];

        }
        else{
            echo "no data found";
        }
    }

    if(isset($_POST["update"])){

        $mydb = new DB();
        $connobj = $mydb->openCon();
        $mydb->updateData($connobj, "person", $_POST["fname"], $_POST["lname"], $_POST["age"], $_POST["salary"]);
        $mydb->closeCon($connobj);
    }

    if(isset($_POST["delete"])){

        $mydb = new DB();
        $connobj = $mydb->openCon();
        $mydb->deleteData($connobj, "person", $_POST["searchData"]);
        $mydb->closeCon($connobj);
    }

?>