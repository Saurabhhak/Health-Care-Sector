<?php
    session_start();

    include("connect.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email)){
            $query = "insert into register(fname, lname, email, password) values ('$fname', '$lname', '$email', '$password')";

            mysqli_query($conn, $query);

            echo"<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else{
            echo"<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Sign Up</h1>
    <div class="form">
        <form action="" method="post">
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" placeholder="First Name" name="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" placeholder="Last Name" name="lname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" placeholder="Password" name="password" required minlength="6">
            </div>
            <div class="form-group">
                <button type="submit" id="submit">Sign Up</button>
                <button type="button" id="login"><a href="login.php">Login</a></button>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>