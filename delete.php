<?php
session_start();
if(+isset($_SESSION['id'])&& $_SESSION['role']=='a'){
    $id=$GET['id'];
    echo "ลบกระทู้ หมายเลข$id";
}else{
    header("location:index.php");
    die();
}



?>