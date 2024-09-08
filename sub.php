<html>
    <head>
        <title>YOUR INFORMATION</title>
        <style>
            .form{
                margin-top:180px;
                margin-left:200px;
                margin-right:200px;
                margin-bottom:200px;
                text-align:center;
                font-size:19px;
                background-color:rgb(240, 161, 161);
                border-radius:55px;
                border:5px solid black;
            }
            a{
                text-decoration:none;
                color:black;
                margin-left:470px;
                margin-top:100px;
                font-size:35px;
            }
            a:hover{
                text-decoration:none;
                background-color:green;
                color:white;
                border-radius:5px;
            }
            </style>
            </head>
            <body style="background-color:rgb(245, 206, 206);">
<form method="post" enctype="multipart/form-data">
<div class=form>
    <fieldset style="border :5px solid black; border-radius:50px;">
        <legend style="text-align:center; font-size:22px;"><h3>ENTERED INFORMATION</h3></legend>
<?php
if(isset($_POST['fname'])){
    $name=$_POST['fname'];
    echo "<h3>"."WELCOME!! "."</h3>".""."<b>".$name." "."</b>"."<br><br>"; 
}
if(isset($_POST['date'])){
$date=$_POST['date'];
echo "<b>"." D.O.B:-  "."</b>".$date."<br><br>";
}
if(isset($_POST['email']))
{
    $email=$_POST['email'];
    echo "<b>"."E-MAIL :- "."</b>".$email."<br><br>";
}
if(isset($_REQUEST['gender'])){
    $gender=$_REQUEST['gender'];
    echo "<b>"."GENDER  :- "."</b>".$gender."<br><br>";
}
if(isset($_POST['password'])){
    $pass=$_POST['password'];
    echo "<b>"."PASSWORD  :- "."</b>".$pass."<br><br>";
}
if(isset($_POST['s1'])){
    $coun=$_POST['s1'];
    echo "<b>"."COUNTRY  :- "."</b>".$coun."<br><br>";
}
?>
</fieldset>
</div>
</form>
<a href="ALL IN ONE HTML.html">WELCOME TO WEBSITE</a>
<?php
// $con=mysqli_connect('localhost','root','','dhruv');
// if(isset($_POST['submit']))
//     {
//         $user_exist_query="SELECT * FROM `second` WHERE `username`='$_POST[username]'";
//         $result=mysqli_query($con,$user_exist_query);
//         if($result)
//         {
//           if(mysqli_num_rows($result)>0){
//            $result_fetch=mysqli_fetch_assoc($result);
//            if($result_fetch['username']==$_POST['username'])
//            {
//             echo " <script>
//             alert(' $result_fetch[username] - USERNAME ALREADY EXIST');
//             window.location.href='login.php';
//             </script>
//             ";
//            }
//           }
//           else{
//             $query="INSERT INTO `second` (`username`, `pasword`) VALUES ('$_POST[username]', '$_POST[password]')";
//           }if(mysqli_query($con,$query))
//           {
//             echo " <script>
//             alert('REGISTRATION SUCCESSFULL');
//             window.location.href='login.php';
//             </script>
//             ";
//           }
//           else{
//             echo " <script>
//             alert('CANNOT RUN QUERY');
//             window.location.href='login.php';
//             </script>
//             ";

//           } 
//         }
//         else{
//             echo " <script>
//             alert('USERNAME ALREADY EXIST');
//             window.location.href='login.php';
//             </script>
//             ";
//         }
//     }
$con=mysqli_connect('localhost','root','','abhi');
if(isset($_POST['submit']))
{
    
    $query="INSERT INTO `first` (username,password) VALUES('$_POST[fname]','$_POST[password]')";
    
    // $query="INSERT INTO `second` (`username`, `pasword`) VALUES ('$_POST[username]', '$_POST[password]')";
if(mysqli_query($con,$query))
{
  echo " <script>
  alert('transfer');
  </script>
  ";
}
else{
  echo " <script>
  alert('not transfer');
  </script>
  ";

} 
}
?>
</body>
</html>