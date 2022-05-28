<?php
    include('header.php');
?>
    <main>
        <form action="" method="POST" class="register">
            <?php
                if(isset($_POST['submit'])){
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $email = $_POST['email'];
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];
                    $phone = $_POST['phoneNumber'];

                    // Kiểm tra email đã có chưa
                    $sql = "SELECT * FROM tb_user WHERE email ='$email' OR phoneNumber = '$phone'";
                    $res = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($res) == 0)
                    {
                        if($pass1 == $pass2)
                        {
                            // $code = md5(uniqid(rand(), true));
                            // $pass_hash = password_hash($user_pass1, PASSWORD_DEFAULT);
                            $sql2 = "INSERT INTO tb_user(firstName, lastName, email, user_pass, phoneNumber, levelUser, status)
                                VALUES('$firstName', '$lastName', '$email', '$pass1', '$phone', 2, 1)";
                            $res2 = mysqli_query($conn, $sql2);
                            if($res2==TRUE){
                                header("Location:user.php");
                            }
                            else{
                                
                                header("Location:add_user.php");
                            }
                        }
                        else{
                            header("Location:add_user.php");
                        }
                    }
                }
            ?>
            <div class="form-group first-span">
                <span>First name</span>
                <input type="text" class="form-control" name="firstName">
            </div>
            <div class="form-group">
                <span>Last name</span>
                <input type="text" class="form-control" name="lastName">
            </div>
            <div class="form-group first-span">
                <span>Email</span>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <span>Password</span>
                <input type="password" class="form-control" name="pass1">
            </div>
            <div class="form-group">
                <span>Confirm password</span>
                <input type="password" class="form-control" name="pass2">
            </div>
            <div class="form-group">
                <span>Phone number</span>
                <input type="tel" class="form-control" name="phoneNumber">
            </div>
            <input type="submit" name="submit" value="Add user" class="btn btn-add btn-add-connect">
            <a href="user.php" class="btn btn-add btn-cancel">Cancel</a>
        </form>      
<?php
    include('footer.php');
?>