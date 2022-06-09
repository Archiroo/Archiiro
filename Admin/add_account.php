<?php
    include('header.php');
?>
    <main>
        <form action="" method="POST" class="register">
            <?php
                if(isset($_POST['submit'])){
                    $email = $_POST['email'];
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];
                    $phone = $_POST['phoneNumber'];
                    $level = $_POST['level'];

                    // Kiểm tra email đã có chưa
                    $sql = "SELECT * FROM tb_user WHERE email ='$email' OR phoneNumber = '$phone'";
                    $res = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($res) == 0)
                    {
                        if($pass1 == $pass2)
                        {
                            $sql2 = "INSERT INTO tb_user(email, user_pass, phoneNumber, levelUser, status)
                                VALUES('$email', '$pass1', '$phone', '$level', 1)";
                            $res2 = mysqli_query($conn, $sql2);
                            if($res2==TRUE){
                                header("Location:account.php");
                            }
                            else{
                                
                                header("Location:add_account.php");
                            }
                        }
                        else{
                            header("Location:add_account.php");
                        }
                    }
                }
            ?>
            <div class="form-group first-span">
                <span>Email</span>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <span>Số điện thoại</span>
                <input type="tel" class="form-control" name="phoneNumber">
            </div>
            <div class="form-group">
                <span>Mật khẩu</span>
                <input type="password" class="form-control" name="pass1">
            </div>
            <div class="form-group">
                <span>Xác minh mật khẩu</span>
                <input type="password" class="form-control" name="pass2">
            </div>
            <div class="form-group first-span">
                <span>Loại tài khoản</span>
                <select name="level" style="display:block;">
                    <option value="1">Quản lý</option>
                    <option value="2">Nhân viên</option>
                    <option value="3">Khách hàng</option>
                </select>
            </div> 
            <input type="submit" name="submit" value="Thêm tài khoản" class="btn btn-add btn-add-connect">
            <a href="account.php" class="btn btn-add btn-cancel">Hủy bỏ</a>
        </form>      
<?php
    include('footer.php');
?>