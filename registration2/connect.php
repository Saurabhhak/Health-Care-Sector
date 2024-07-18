<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "sdg";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit();
}
// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// $gender= $_POST['gender'];
// if(isset($gender)){
//      if($gender=="male"){
          
//      }
//      else if($gender=="female"){
     
//      }
//      else if($gender=="other"){
     
//      }
// }
// $conn = new mysqli('localhost','root','','sdg');
// if($conn->connect_error){
//      die('Connection Failed : '.$conn->connect_error);
// }else{
//      $stmt = $conn->prepare("insert into register(fname, lname, email, password) values(?, ?, ?, ?)");
//      $stmt->bind_param("ssss", $fname, $lname, $email, $password);
//      $stmt->execute();
//      // echo "Registration successfully...";
//      if ($stmt->affected_rows > 0) {
//           // Registration successful, redirect to home page
//           header("Location: login.html"); // Replace 'home.php' with the URL of your home page
//           exit();
//       } else {
//           echo "Error: Registration failed.";
//       }

//      $stmt->close();
//      $conn->close();
// }
?>
