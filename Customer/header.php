<?php
    session_start();
    include_once "../SignInUp/php/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sql = mysqli_query($conn, "SELECT * FROM tb_user WHERE user_id = {$_SESSION['user_id']}");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            echo $row['user_id'];
        }
    ?>
</body>
</html>