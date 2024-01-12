<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
<?php
$password = $_POST['pwd'];
$login = $_POST['login'];
   
      
?>
    
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <Hr>
    <div style="text-align: center;">
    เข้าสู่ระบบด้วย<br>
    <?php
    if($login == "admin" && $password == "ad1234"){
        echo"ยินดีตอนรับคุณ ADMIN";
        echo"<BR>";
        echo"<a href=login.html style=float: right;>กลับยังไปหน้าหลัก</a>";
    }
    elseif ($login == "member" && $password == "mem1234") {
        echo"ยินดีตอนรับคุณ MEMBER";
        echo"<BR>";
        echo"<a href=login.html style=float: right;>กลับยังไปหน้าหลัก</a>";
    }
    else{
        echo"ชื่อบัญชีหรือรหัสผ่านไม่ถูกตต้อง";
        echo"<BR>";
        echo"<a href=login.html style=float: right;>กลับยังไปหน้าหลัก</a>";
    }



    ?>
    <!-- Login =     <?php echo" $login ";  ?>
     <?php echo"<BR>"; ?>
        
    password =  <?php echo" $password"; ?>

    -->

</div>

</body>
</html>