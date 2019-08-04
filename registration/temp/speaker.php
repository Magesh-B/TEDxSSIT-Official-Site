<?php
    if (isset($_POST["submit"]))
    {
        $servername="localhost";
        $username="u503905126_tedx";
        $password="tedx@123";
        $dbname="u503905126_event";
				
        $sName=$_POST["sName"];
        $sEmail=$_POST["sEmail"];/*
        $dept=$_POST["Department"];
        $year=$_POST["Year"];
        $sec=$_POST["Section"];
        $msg1=$_POST["message1"];
        $team=$_POST["teamnumber"];
        $msg2=$_POST["message2"];
        $msg3=$_POST["message3"];*/
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql="INSERT INTO eventEntryData(SiNo,Name,emailId)
                    VALUES ('2','$sName','$sEmail')";


        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        }
        else{
            echo "<script> alert ('failed register again');";
        }
        $conn->close();
    }	
?>
        
