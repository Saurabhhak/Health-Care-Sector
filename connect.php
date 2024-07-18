<?php


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sdgs";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     $connect = new mysqli('localhost', 'root', '', 'sdgs');
     if($connect->connect_error){
          die('Connection Failed : '.$connect->connect_error);
     }else{
          $stmt = $connect->prepare("insert into signup(name, email, password) values(?, ?, ?)");
          $stmt->bind_param("sss", $name, $email, $password);
          $stmt->execute();
          echo "Registration Successfully...";
          
          $stmt->close();
          $connect->close();
     }
?>