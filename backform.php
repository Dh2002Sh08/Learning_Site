<?php
$fname=$_POST["fname"];

$lname=$_POST["lname"];

$date=$_POST["date"];

$gender=$_POST["gender"];

$Proof = $_POST["id-proof"];

$File = $_FILES['document']['name'];

$FileSize = $_FILES['document']['size'];

$File_ext = pathinfo($File, PATHINFO_EXTENSION);

$tempFile = $_FILES['document']['tmp_name'];

$Img = $_FILES['fdocument']['name'];

$ImgSize = $_FILES['fdocument']['size'];

$Img_ext = pathinfo($Img, PATHINFO_EXTENSION);

$tempImg = $_FILES['fdocument']['tmp_name'];

echo "First Name is:- ".$fname."<br>";
echo "Last Name is:- ".$lname."<br>";
echo "Gender is:- ".$gender."<br>";
echo "DOB is:- ".$date."<br>";
echo "Document is:- ".$Proof."<br>";


// Validation for Proof
if ($File_ext == "pdf") {
    if ($FileSize < 200000) {
        if ($Proof == "Aadhar Card") {
            $actual_path = "adhaar/" . $File;
            move_uploaded_file($tempFile, $actual_path);
        }
        if ($Proof == "License") {
            $actual_path = "license/" . $File;
            move_uploaded_file($tempFile, $actual_path);
        }
        if ($Proof == "Voter Id") {
            $actual_path = "voter/" . $File;
            move_uploaded_file($tempFile, $actual_path);
        }
        if ($Proof == "Pan") {
            $actual_path = "pan/" . $File;
            move_uploaded_file($tempFile, $actual_path);
        }
        if ($Proof == "Passport") {
            $actual_path = "Passport/" . $File;
            move_uploaded_file($tempFile, $actual_path);
        }
    } else {
        echo "File Size Exceeds!"."<br>";
    }
} else {
    echo "Only pdf's are allowed!"."<br>";
}
if ($Proof == "Aadhar Card") {
    echo '<a href="adhaar/1.pdf"><input type="submit" value="Download" /></a><br>';
}
if ($Proof == "License") {
    echo '<a href="license/1.pdf"><input type="submit" value="Download" /></a><br>';
}
if ($Proof == "Voter Id") {

    echo '<a href="voter/1.pdf"><input type="submit" value="Download" /></a><br>';
}
if ($Proof == "Pan") {
    echo '<a href="pan/1.pdf"><input type="submit" value="Download" /></a><br>';
}

// Validations for image 
$actualImg_path = "image/" . $Img;
if ($Img_ext == "jpeg" || $Img_ext == "png" || $Img_ext == "jpg") {
    if ($ImgSize < 10000000) {
        move_uploaded_file($tempImg, $actualImg_path);
    } else {
        echo "Image Size Exceeds!<br>";
    }
} else {
    echo "Wrong File Selected";
}

if ($Img_ext == "jpeg") {
    echo '<img src="image/img.jpeg" alt="Image" width="200px" height="200px" ><br>';
}
if ($Img_ext == "jpg") {
    echo '<img src="image/img.jpg" alt="Image" width="200px" height="200px"><br>';
}
if ($Img_ext == "png") {
    echo '<img src="image/img.png" alt="Image" width="200px" height="200px"><br>';
}
?>