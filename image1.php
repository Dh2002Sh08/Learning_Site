<?php
$aadhar=$_FILES['aadhar']['name'];
echo $aadhar."<br>";
$tmp_aadhar=$_FILES['aadhar']['tmp_name'];
if(move_uploaded_file($tmp_aadhar,"uploaded_image/".$aadhar)){
    echo "Successfully uploaded";
}
else{
    echo "Couldn't Upload";
}
?>