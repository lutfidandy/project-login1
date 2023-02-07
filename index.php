<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign In</title>
</head>
<body>
    


<form action="login.php" method="post">

<table>
        <tr>
            <td> <label for="username">User </label></td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="password">Password</label></td>
            <td> <input type="password" name="password"></td>

        </tr>
        <tr align="center">
            <td colspan="2" style="padding: 25px;"><input type="submit" name="login" value="login"></td>
            <td> <button><a href="register.php">Register</a></button></td>
        </tr>
        
    </table>

</form>

</body>
</html>