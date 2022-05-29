<?php
    include('header.php');
?>
    <main>
        <?php
            if(isset($_GET['id_user']))
            {
                $id_user = $_GET['id_user'];
            }
            $sql = "SELECT * FROM tb_user WHERE id_user = '$id_user'";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if($count==1)
            {
                $row = mysqli_fetch_assoc($res);
                $firstName = $row['firstName'];
                $lastName = $row['lastName'];
                $email = $row['email'];
                $pass = $row['user_pass'];
                $phoneNumber = $row['phoneNumber'];
                $gender = $row['gender'];
                $address = $row['address'];
                $level = $row['levelUser'];
                $birthday = $row['birthday'];
                $image = $row['image'];
            }
            
        ?>
        <!-- CODE PHP -->

        <form action="" method="POST" class="register" enctype="multipart/form-data">
            <?php
                if(isset($_POST['submit']))
                {
                    $firstName1 = $_POST['firstName'];
                    $lastName1 = $_POST['lastName'];
                    $email1 = $_POST['email'];
                    $phoneNumber1 = $_POST['phoneNumber'];
                    $gender1 = $_POST['gender'];
                    $address1 = $_POST['address'];
                    $level1 = $_POST['level'];
                    $birthday1 = $_POST['birthday'];
                    if(isset($_FILES['image']['name']))
                    {
                        $image_name = $_FILES['image']['name'];
                        if($image_name!="")
                        {
                            $source_path = $_FILES['image']['tmp_name'];

                            $dess_path = "../image/image_database/".$image_name;

                            $upload = move_uploaded_file($source_path, $dess_path);
                            if($upload== FALSE)
                            {
                                die();
                            }
                        }
                    }
                    else
                    {
                        $image_name = "user_default.jpg";
                    }
                    $sql1 = "UPDATE tb_user SET firstName = '$firstName1', lastName = '$lastName1', email = '$email1', phoneNumber = '$phoneNumber1',
                            gender = '$gender1', address = '$address1', image = '$image_name', levelUser = '$level1', birthday = '$birthday1' 
                            WHERE id_user= '$id_user'";
                    $res1 = mysqli_query($conn, $sql1);
                    if($res1 == TRUE){
                        if($firstName != null && $lastName != null && $email != null && $user_pass != null && $phoneNumber != null && $gender != null && $adress != null && $birthday != null && $image != null){
                            $sql3 = "UPDATE tb_user SET status = 2 Where id_user = $id_user";
                            $res3 = mysqli_query($conn, $sql3);
                            if($res3 == true){
                                header("Location:user.php");
                            }
                            else{
                                header("Location:update_user.php");
                            }
                        }
                        else{
                            $sql4 = "UPDATE tb_user SET status = 3 Where id_user = $id_user";
                            $res4 = mysqli_query($conn, $sql4);
                            if($res4==TRUE){
                                header("Location:user.php");
                            }
                            
                        }
                        
                    }
                    else{
                        header("Location:update_user.php");
                    }
                }
            ?>
            <div class="form-group first-span">
                <span>User ID</span>
                <input type="text" class="form-control read" readonly value="<?php echo $id_user;?>">
            </div>
            <div class="form-group first-span">
                <span>First name</span>
                <input type="text" class="form-control" name="firstName" value="<?php echo $firstName?>">
            </div>
            <div class="form-group">
                <span>Last name</span>
                <input type="text" class="form-control" name="lastName"  value="<?php echo $lastName?>">
            </div>
            <div class="form-group first-span">
                <span>Email</span>
                <input type="email" class="form-control read" readonly name="email" value="<?php echo $email?>">
            </div>
            <div class="form-group">
                <span>Phone number</span>
                <input type="tel" class="form-control read" readonly name="phoneNumber" value="<?php echo $phoneNumber?>">
            </div>
            <div class="gender">
                <span>Gender</span>
                <br>
                <div>
                    <input <?php if($gender==1) {echo "checked"; }?> type="radio" name = "gender" value="1"><span>Nam</span>
                    <input <?php if($gender==2) {echo "checked"; }?> type="radio" name = "gender" value="2"><span>Nữ</span>

                </div>
            </div>
            <div class="form-group">
                <span>Địa chỉ</span>
                <input type="text" class="form-control read" name="address" value="<?php echo $address?>">
            </div>
            <div class="form-group">
                <span>Birthday</span>
                <input type="date" class="form-control" name="birthday" value="<?php echo $birthday ?>">
            </div>
            <div class="gender">
                <span>Image</span>
                <br>
                <input type="file" name="image" class="file">
            </div>
            <div class="form-group first-span">
                <span>Level</span>
                <select name="level" style="display:block;">
                    <option value="1">Quản lý</option>
                    <option value="2">Nhân viên</option>
                    <option value="3">Khách hàng</option>
                </select>
            </div>     
            <input type="submit" name="submit" value="Update user" class="btn btn-add btn-add-connect">
            <a href="user.php" class="btn btn-add btn-cancel">Cancel</a>
            <div style="margin-bottom: 5rem;">
            </div>
        </form>
<?php
    include('footer.php');
?>
