<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "phplogin";


    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT *FROM user WHERE username = '$username' AND password ='$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($username == "" && $password == ""){
        header('location:index.html');
    }
    if($row['username'] == $username && $row['password'] == $password){
        echo "Welcome " .$username." you are succesfully Logged in ";
    }else{
        echo "<script>alert('Λαθος username H password')</script>";
        echo "<script>location.replace('index.html')</script>";
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<a href="logout.php">logout</a>
<body>
    
</body>
</html>


