<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN FORM</title>
</head>
<body>
<form id="register" method="post" action="sub.php" target="_blank" style="font-size:25px; text-align:left; margin-right:350px;
  margin-left:350px; margin-bottom:50px; background-color:white; color:black; margin-top:25px;">
    <fieldset style="border:3px solid black;" >
        <legend style="text-align:center;">Want To Enroll With Us</legend>
        
    First Name:
    <input type="text" value="" id="fname" name="fname" placeholder="First name" required> <br> <br>                     
    Last Name:
    <input type="text" value="" name="lname" placeholder="Last name" required><br><br>
    D.O.B:
    <input type="date" name="date" required> <br><br>              
    E-mail:
    <input type="email" name="email" id="name" placeholder="Enter email" required><br>
    <br>
    Gender:
    <input type="radio" value="MALE" name="gender" id="male" required>Male
    <input type="radio" value="FEMALE" name="gender" id="female" required>Female
    <input type="radio" value="OTHER" name="gender" id="other" required>Other<br>
    <br>
    Password:
    <input type="password" value="" name="password"  placeholder="*******" required>  <br><br>    
    Confirm Password:
    <input type="password" value="" name="password"  placeholder="******" required><br>
    <br>
    Country:
    <select required>
        <option required>--SELECT--</option>
        <option required>Antartica</option>
        <option required>America</option>
        <option required>Australia</option>
        <option required>Indonesia</option>
        <option required>Newzealand</option>
        <option required>South Africa</option>
    </select><b requiredr>
    <br>
    <br>
    <input type="submit" value="Submit" style="font-size:20px;">
    <input type="reset" value="Reset" style="font-size:20px;">
    
    </fieldset> 
</form>
</body>
</html>
