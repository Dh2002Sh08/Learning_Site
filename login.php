<?php
include("query.php");
if(isset($_POST['login']))
{
  $query="SELECT * FROM `second` WHERE `username`='$_POST[username]' AND `pasword`='$_POST[password]'";
  $result=mysqli_query($con,$query);
  if($result)
  {
    if(mysqli_num_rows($result)==1)
    {
      $result_fetch=mysqli_fetch_assoc($result);
      echo " <script>
      alert('LOGIN SUCCESSFULL');
      window.location.href='ALL IN ONE HTML.html';
      </script>
      ";
    }
    else{
      echo " <script>
      alert('WRONG USERNAME OR PASSWORD');
      window.location.href='login.php';
      </script>
      ";
    }
  }
  else{
    echo " <script>
    alert('CANNOT RUN QUERY');
    window.location.href='login.php';
    </script>
    ";
  }
}
?>
<html>
<head>
    <title>LOGIN FORM</title>
    <style>
     .login{
    font-size:25px;
     text-align:left;
      margin-right:830px;
  margin-left:50px;
   margin-bottom:0px;
    background-image:none;
     color:black;
      margin-top:30px;
      border-radius:25px;
      }
      .login1{
        font-size:25px;
     text-align:left;
      margin-right:50px;
  margin-left:830px;
   margin-bottom:0px;
    background-image:none;
     color:black;
      margin-top:0px;
      border-radius:25px;

      }
      .side{
          margin-left:18px;
      }
      a{
          text-decoration:none;
          color:white;
      }
      a:hover{
          text-decoration:none;
          color:yellow;
      }
      #c:hover{
          color:red;
      }
     h1{
        color:black;
        margin-top:12px;
      }
      button{
        margin-left:440px;
        margin-top:45px;
      }
      button:hover{
        background-color:khaki;
        scroll-behavior:smooth;
        border-radius:25px;
      }
      </style>
</head>
<body style="background-image:radial-gradient(white,rgb(107, 134, 143));">
<button><a href="dhruv.php"><h1>WANT TO EXPLORE WEBSITE FIRST</h1></a></button>
<!-- for sign-up -->
<div class="login">
    <fieldset style="border-radius:50px; border:5px solid black; background-image:linear-gradient(to bottom,white,black);">
        <legend style="text-align:center;"><b>SIGN-UP</b></legend>
    <form method="post" enctype="multipart/form-data" ><br>
    <div class="side">
    USERNAME:- 
  <input type="text" name="username" value="" placeholder="Name or E-MAIL" required><br><br>
  PASSWORD:- 
  <input type="password" name="password" value="" placeholder="password" required><br><br>
    </div>
   <input type="submit" name="submit" id="c" value="SIGN-UP" style=" font-size:20px; margin-left:145px; border-radius:10px;"><br><br>
    </form>
    <!-- <a href="sub1.html">CREATE ACCOUNT</a> -->
    </fieldset>
    </div>
    <!-- for login -->
    <div class="login1">
    <fieldset style="border-radius:50px; border:5px solid black; background-image:linear-gradient(to right,white,black);">
      <legend style="text-align:center;"><b>LOGIN</b></legend>
    <form method="post" enctype="multipart/form-data" ><br>
    <div class="side">
    USERNAME:- 
  <input type="text" name="username" value="" placeholder="Name or E-mail" required><br><br>
  PASSWORD:- 
  <input type="password" name="password" value="" placeholder="password" required><br><br>
    </div>
   <input type="submit" name="login" id="c" value="LOGIN" style=" font-size:20px; margin-left:145px; border-radius:10px;"><br><br>
    </form>
    <!-- <a href="sub1.html">CREATE ACCOUNT</a> -->
    </fieldset>
    </div>
    <?php
    if(isset($_POST['submit']))
    {
        $user_exist_query="SELECT * FROM `second` WHERE `username`='$_POST[username]' AND `pasword`='$_POST[password]'";
        $result=mysqli_query($con,$user_exist_query);
        if($result)
        {
          if(mysqli_num_rows($result)>0){
           $result_fetch=mysqli_fetch_assoc($result);
           if($result_fetch['username']==$_POST['username'])
           {
            echo " <script>
            alert(' $result_fetch[username] - USERNAME ALREADY EXIST');
            window.location.href='login.php';
            </script>
            ";
           }
          }
          else{
            $query="INSERT INTO `second` (`username`, `pasword`) VALUES ('$_POST[username]', '$_POST[password]')";
          }if(mysqli_query($con,$query))
          {
            echo " <script>
            alert('REGISTRATION SUCCESSFULL');
            window.location.href='ALL IN ONE HTML.html';
            </script>
            ";
          }
          else{
            echo " <script>
            alert('CANNOT RUN QUERY');
            window.location.href='login.php';
            </script>
            ";

          } 
        }
        else{
            echo " <script>
            alert('USERNAME ALREADY EXIST');
            window.location.href='login.php';
            </script>
            ";
        }
    }
    ?>
</body>
</html>