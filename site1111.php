<!DOCTYPE html>
<html lang="en">
<head>
    <title>new php form</title>
</head>
<body>
    <fieldset>
    <h1>Personal Details</h1>
    <hr>
    <form action="site1112.php" method="POST">
                <table ALIGN="center">
                <tbody>
                <tr>
                <td><label for="Uname">User Name:</label></td>
                <td><input type="text" name="Uname"  placeholder="Enter your user name" minlength="5" required id="Uname"></td>
                </tr>
                <tr>
                <td><label for="pass">Password:</label></td>
                <td><input type="password" name="pass" placeholder="Enter a valid Password" minlength="8" maxlength="32" required id="pass"></td>
                </tr>
                <tr>
                <td><label for="fname">Full Name:</label></td>
                <td><input type="text" name="fname"  placeholder="Enter your full name" minlength="5" required id="fname"></td>
                </tr>
                <tr>
                <td><label for="number">Mobile Number:</label></td>
                <td><input type="number" name="number"  placeholder="Enter your mobile number" minlength="11" required id="number"></td>
                </tr>
                <tr>
                <td><label for="DOB">Date of Birth:</label></td>
                <td><input type="date" id="DOB" name="DOB"></td>
                </tr>
                <tr><td><label for="submit"></label>
                <td><input type="submit" value="Next" placeholder="Submit" id="submit"></td>
                </tr>                
                </tbody>
                </table>
                </form>
    </fieldset>
    
</body>
</html>
