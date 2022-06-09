<?php
include('header.php');
?>
<section class="view" id="order">

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
            $phoneNumber = $row['phoneNumber'];
            $gender = $row['gender'];
            $address = $row['address'];
            $level = $row['levelUser'];
            $birthday = $row['birthday'];
            $image = $row['image'];
        }
            
    ?>
    <section class="recent" style="margin: 8rem 0 0 1rem;">
        <div class="activity-grid">
            <div class="activity-card">
                <h3>Thông tin tài khoản</h3>
            </div>
        </div>
    </section>
    <form action="">
        <div class="inputBox">
            <div class="input">
                <span>Họ & tên đệm</span>
                <input type="text" value="<?php echo $firstName;?>">
            </div>
            <div class="input">
                <span>Tên</span>
                <input type="text" value="<?php echo $lastName;?>">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Email</span>
                <input class = "readOnly" readonly value="<?php echo $email;?>">
            </div>
            <div class="input">
                <span>Số điện thoại</span>
                <input class = "readOnly" readonly value="<?php echo $phoneNumber;?>">
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>Loại tài khoản</span>
                <select class = "typeAccount" name="level">
                    <option value="1">Quản lý</option>
                    <option value="2">Nhân viên</option>
                    <option value="3">Khách hàng</option>
                </select>
            </div>
            <div class="input">
                <span>Số điện thoại</span>
                <input class = "readOnly" readonly value="<?php echo $phoneNumber;?>">
            </div>
        </div>
       
        <div class="inputBox gender">
            <div class="gender">
                <span>Giới tính</span>
                <br>
                <div>
                    <input <?php if($gender==1) {echo "checked"; }?> type="radio" name = "gender" value="1"><span>Nam</span>
                    <input <?php if($gender==2) {echo "checked"; }?> type="radio" name = "gender" value="2"><span>Nữ</span>

                </div>
            </div>
        </div>
        <input type="submit" value="Cập nhật" class="btn">
        <a href="account.php" class="btn btn-add btn-cancel">Hủy bỏ</a>
    </form>

</section>
<?php
include('footer.php');
?>