
<?Php
$file_upload_flag="true"; // Flag to check conditions
$file_up_size=$_FILES['file_up'][size];
$name="ram";
$imageName="$name-CSE-4-B.$_FILES[file_up][type]";
$imageSize=$_FILES[file_up][size];
$imageType=$_FILES[file_up][type];

if ($_FILES[file_up][size]>5000000){
$msg=$msg."Your uploaded file size is more than 5MB ";
$msg.=" so please reduce the file size and then upload.<BR>";
$file_upload_flag="false";
}
// allow only jpeg or gif files, remove this if not required //
if (!($_FILES[file_up][type] =="image/jpeg" OR $_FILES[file_up][type] =="image/gif" OR $_FILES[file_up][type] =="image/jpg" OR $_FILES[file_up][type] =="image/png"))
{$msg=$msg."Your uploaded file must be of JPG or GIF. ";
$msg.="Other file types are not allowed<BR>";
$file_upload_flag="false";}


$file_name=$_FILES[file_up][name];
// the path with the file name where the file will be stored
$add="registrationImages/sai-$file_name"; 

if($file_upload_flag=="true"){ // checking the Flag value 

if(move_uploaded_file ($_FILES[file_up][tmp_name], $add)){
   // do your coding here to give a thanks message or any other thing.
$msg="File successfully uploaded";
}else{
echo "Failed to upload file Contact Site admin to fix the problem";
}
}else{
$msg .= " Failed to upload file ";
}
echo " $msg <br><br> <a href=fileupload.html>Return to File upload </a>";
?>
        
