<!DOCTYPE html>
<html lang="en">
<head>
    <title>form</title>
</head>
<body>
    <pre>
    <form method="post" action="backform.php" enctype="multipart/form-data" style="  margin-left: 480px;
    margin-right:300px;
    margin-left:350px;
    margin-top:200px;
    margin-bottom:200px;
    border: 5px groove midnightblue;
    border-radius: 3px;
    padding-left: 10px; 
    background-color: blanchedalmond;">
        <div id="form">
        <label>First Name</label>    
        <input type="text" name="fname" placeholder="First Name" required><br>
        <label>Last Name</label>    
        <input type="text" name="lname" placeholder="Last Name" required><br>
        <label>DOB</label>      <input type="date" name="date" required><br>
        <label>Gender</label>   <input type="radio" name="gender" value="Male" required>Male <input type="radio" name="gender" value="Female" required>Female<br>
        <label>ID Proof</label> <select name="id-proof">
            <option selected disabled>-- select --</option>
            <option value="Aadhar Card">Aadhar Card</option>
            <option value="Licence">Licence</option>
            <option value="Voter ID">Voter ID</option>
            <option value="PAN">PAN</option>
            <option value="Passport">Passport</option>
            </select><br>
        <label>Upload Proof: </label> <input type="file" name="document" required><br>
        <label>Upload image: </label> <input type="file" name="fdocument" required><br>
        <input type="Submit" name="Submit"> <input type="Reset" name="Reset">
        </tr>
        </div>
        </form>
        </pre>
        </body>
        </html>