<?php  
    include_once "connect.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $pass1 = mysqli_real_escape_string($conn, $_POST['pass1']);
    $pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);

    if(!empty($fname) && !empty($lname) &&!empty($email) &&!empty($phone) &&!empty($pass1) &&!empty($pass2)){
        //CHECK 
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            // Check định dạng email
            $sql = mysqli_query($conn, "SELECT user_email FROM tb_user WHERE user_email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist!";
            }
            else{
                if($pass1 == $pass2)
                {
                    $sql2 = "INSERT INTO tb_user(user_firstName, user_lastName, user_email, user_pass, user_phone)
                        VALUES('$fname', '$lname', '$email','$pass1', '$phone')";
                    $res2 = mysqli_query($conn, $sql2);
                    if($res2==TRUE){
                            echo "success";
                        }
                    else{
                        echo "Something went wrong!";
                    }
                }
                else{
                    echo "Password not match!";
                }
            }
        }
        else{
            echo "$email - This is not a valid email!";
        }
    }
    else {
        echo "All input field are required!";
    }
?>