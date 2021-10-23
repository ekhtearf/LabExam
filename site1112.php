<!DOCTYPE html>
<html lang="en">
<head>
    <title>new php form</title>
</head>
<body>
    <fieldset>
    <h1>Education</h1>
    <hr>
    <form action="?" method="POST">
                <table ALIGN="center">
                <tbody>
                <tr>
                <td><label for="uni">University:</label></td>
                <td><input type="text" name="uni"  placeholder="Enter your university name" minlength="5" required id="Uni"></td>
                </tr>
                <tr>
                <td><label for="deg">Degree:</label></td>
                <td><input type="text" name="deg" placeholder="Enter your degree name" maxlength="32" required id="deg"></td>
                </tr>
                <tr>
                <td><label for="maj">Major:</label></td>
                <td><input type="text" name="maj"  placeholder="What was your major" minlength="3" required id="maj"></td>
                </tr>
                <tr>
                <td><label for="res">Result:</label></td>
                <td><input type="number" name="res"  placeholder="Enter your final CGPA" minlength="5" required id="res"></td>
                </tr>
                <tr>
                <td><label for="pass">Passing Year:</label></td>
                <td><input type="date" id="pass" name="pass"></td>
                </tr>
                <tr><td><label for="submit"></label>
                <td><input type="submit" value="Submit" placeholder="Submit" id="submit"></td>
                </tr>                
                </tbody>
                </table>
                </form>
    </fieldset>
    
</body>
</html>