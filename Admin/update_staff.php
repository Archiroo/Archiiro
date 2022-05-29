<?php
    include('header.php');
?>
    <main>
        <?php
            if(isset($_GET['id_user']))
            {
                $id_user = $_GET['id_user'];
            }
            $sql = "SELECT * FROM tb_staff WHERE id_staff = '$id_user'";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if($count==1)
            {
                $row = mysqli_fetch_assoc($res);
                $daySalary = $row['daySalary'];
                $dayStart = $row['dayStart'];
            }
            
        ?>
        <!-- CODE PHP -->

        <form action="" method="POST" class="register" enctype="multipart/form-data">
            <?php
                if(isset($_POST['submit']))
                {
                    $daySalary1 = $_POST['daySalary'];
                    $dayStart1 = $_POST['dayStart'];
                    $sql1 = "UPDATE tb_staff SET daySalary = '$daySalary1', dayStart = '$dayStart1' WHERE id_staff = $id_user ";
                    $res1 = mysqli_query($conn, $sql1);
                    if($res1 == TRUE){
                        header("Location:staff.php");
                    }
                    else{
                        header("Location:update_staff.php");
                    }
                  
                }
            ?>
            <div class="form-group first-span">
                <span>User ID</span>
                <input type="text" class="form-control read" readonly value="<?php echo $id_user;?>">
            </div>
            <div class="form-group first-span">
                <span>Mức lương</span>
                <select name="daySalary" style="display:block;">
                    <option value="200000">200.000 VND</option>
                    <option value="300000">300.000 VND</option>
                    <option value="350000">350.000 VND</option>
                </select>
            </div>     
            <div class="form-group">
                <span>Ngày bắt đầu</span>
                <input type="date" class="form-control" name="dayStart" value="<?php echo $dayStart ?>">
            </div>
            <input type="submit" name="submit" value="Update user" class="btn btn-add btn-add-connect">
            <a href="user.php" class="btn btn-add btn-cancel">Cancel</a>
            <div style="margin-bottom: 5rem;">
            </div>
        </form>
<?php
    include('footer.php');
?>
