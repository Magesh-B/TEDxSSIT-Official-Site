<?php

    if (isset($_POST["submit"]))
    {
        $servername="localhost";
        $username="u503905126_tedx";
        $password="tedx@123";
        $dbname="u503905126_event";
				
        $Name=$_POST["Name"];
        $Gender=$_POST["Gender"];
        $Email=$_POST["Email"];
        $PhNo=$_POST["phoneNumber"];
        $College=$_POST["College"];
        $Dept=$_POST["Department"];
        $Year=$_POST["Year"];
        $Sec=$_POST["Section"];
        $CollegeID=$_POST["CollegeID"];
        $RegNo=$_POST["regNo"];
        $msg1=$_POST["message1"];
        $msg2=$_POST["message2"];
        $msg3=$_POST["message3"];
        $msg4=$_POST["message4"];
        $driveLink=$_POST["message5"];
        $food=$_POST["Food"];

       



        
          
        
      /*  
   
        $target_dir = "registrationImages/";
        $target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
         $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
         if($check !== false) {
             echo "File is an image - " . $check["mime"] . ".";
             $uploadOk = 1;
         } else {
             echo "File is not an image.";
             $uploadOk = 0;
         }

    // Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      
        echo "The file $name-". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
*/


        //DB
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql="INSERT INTO registration(Name,Gender,EmailId,phNo,College,Dept,Year,Section,RegNo,CollegeIdNo,Ques1,Ques2,Ques3,Ques4,picID,`date`, `food`, `time`)
                VALUES('$Name','$Gender','$Email','$PhNo','$College','$Dept','$Year','$Sec','$RegNo','$CollegeID','$msg1','$msg2','$msg3','$msg4','$driveLink',CURDATE(),'$food',CURTIME())";


        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: ./success/index.html"); 

        }
        else{
            echo "<script> alert ('failed register again');</script>";
            header("Location: ./fail.html"); 

        }
        $conn->close();
    }	
?>
