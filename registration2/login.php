<?php
    session_start();

    include("connect.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email)){
            $query = "select * from register where email = '$email' limit 1";
            $result = mysqli_query($connect, $query);

            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_date = mysqli_fetch_assoc($result);

                    if($user_date['pass'] == $password){
                        header("location: Index.html");
                        die;
                    }
                }
            }
            echo"<script type='text/javascript'> alert('wrong email and password')</script>";
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
    <h1>Login</h1>
    <div class="form">
        <form action="connect.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" placeholder="Password" name="password" required minlength="6">
            </div>
            <div class="form-group">
                <button type="button"><a href="Index.html">Login</a></button>
                <button type="button" id="login"><a href="signup.php">Sign Up</a> </button>
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>