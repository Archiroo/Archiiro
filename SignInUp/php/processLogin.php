<?php
     session_start();
     include_once "connect.php";
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $pass = mysqli_real_escape_string($conn, $_POST['password']);
     
     if(!empty($email) && !empty($pass)){
        $sql = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '{$email}' AND user_pass = '{$pass}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['id_user'] = $row['id_user'];
            echo "success";
        }
        else{
            echo "Email or Password is incorrect!";
        }
     }
     else{
         echo "All input fields are required!";
     }
