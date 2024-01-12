<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <?php 
    $id = $_GET['id'];
    ?>
<h1 style="text-align: center;">Webboard KakKak</h1>
    <Hr>
    <div style="text-align: center;">
    <?php echo"ต้องการดูกระทู้หมายเลข $id";
      echo"<BR>";
    
    if ($id %2==0) {
        echo"เป็นกระทู้หมายเลขคู่";
    }
    if ($id %2==1) {
        echo"เป็นกระทู้หมายเลขคี่";
    }
    
    ?>

    </div>

    <?php echo"<BR>"; ?>
    <div style="text-align: center;">
    <table style="border: 2px solid black; width: 40%;" align="center">
    <form  >
    <tr><td style="background-color: #6cd2fe;">แสดงความคิดเห็น</td></tr>
        
    <tr><td>
        <textarea name='message'  row="10" cols="30">
            The cat was playing in the garden.
        </textarea>
        </td></tr>
        
        <BR>
        <tr><td>
        <input type="submit" value="ส่งข้อความ"></td></tr>
    </form>
    </table>
    </div>
</body>
</html>