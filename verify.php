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
    Login =     <?php echo" $login ";  ?>
     <?php echo"<BR>"; ?>
        
    password =  <?php echo" $password"; ?>

   

</div>

</body>
</html>