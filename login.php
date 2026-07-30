<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h2>Login Page</h2>

<form method="post">

Username:
<input type="text" name="username"><br><br>

Password:
<input type="password" name="password"><br><br>

<input type="submit" name="login" value="Login">

</form>

<?php

if(isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "admin" && $password == "1234")
    {
        echo "<h3>Login Successful</h3>";
    }
    else
    {
        echo "<h3>Invalid Username or Password</h3>";
    }
}

?>

</body>
</html>