<?php 
    session_start();
    require 'lib.php';
    connection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h3>Login to Your Account</h3>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" name="Login" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
    <?php
        // $login = $_POST['Login'];
        if (isset($_POST['Login'])) {
            $user = htmlentities(sanitize($_POST['username']));
            $pass = hashPassword((sanitize($_POST['password'])));

            // print $pass;
            
            $q = "SELECT * FROM `users` WHERE `username` = '{$user}' AND `password` = '{$pass}'";
            $result = mysqli_query($dbLink, $q);
            $row = mysqli_fetch_assoc($result);
            if (isset($row['id'])) {
                print "<script>alert('Welcom')</script>";
            }
            else {
                print "<script>alert('Username Or Password Is Wrong!')</script>";
            }

        }
    ?>
</body>
</html>
<?php disconnect(); ?>
