<?php
if(isset($_POST['user'])){
    $user = $_POST['user'];
    $password = $_POST['pwd'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");

    $sql = "INSERT INTO user (login,password,name,gender,email,role) VALUES ('$user','$password','$name','$gender','$email','m')";

    $conn->exec($sql);
    $conn = null;
    header("location:login.php");
    die();
}else{
    header("location:index.php");
    die();
}
?>