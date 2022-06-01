<?php
    include('header.php');
?>
    <main>
        <form action="" method="POST" class="register">
            <?php
                if(isset($_POST['submit'])){
                    $id_staff = $_POST['id_staff'];
                    $daySalary = $_POST['daySalary'];
                    $dayStart = $_POST['dayStart'];      
                    
                    $sql2 = "INSERT INTO tb_staff(id_staff, daySalary, dayStart) VALUES('$id_staff', '$daySalary', '$dayStart')";
                    $res2 = mysqli_query($conn, $sql2);
                    if($res2 == TRUE){
                        $sql3 = "UPDATE tb_user SET status = 2 Where id_user = $id_staff";
                        $res3 = mysqli_query($conn, $sql3);
                        if($res3 == true){
                            header("Location:staff.php");
                        }
                        else{
                            header("Location:add_staff.php");
                        }
                    }
                    else{
                        header("Location:add_staff.php");
                    }
                }
                
            ?>
           <div class="form-group">
                <span>ID Staff</span>
                <select name="id_staff" style="display:block;">
                    <?php
                    // Tìm ra nhân viên và là người dùng thêm ở giao diện admin
                    $sql = "SELECT * FROM tb_user WHERE levelUser = 2 AND status = 1";
                    $res = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($res)) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo '<option value="' . $row['id_user'] . '">' . $row['id_user'] . '</option>';
                        }
                    }
                    ?>
                </select>                
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
                <span>Làm từ ngày</span>
                <input type="date" class="form-control" name="dayStart">
            </div>
            <input type="submit" name="submit" value="Add user" class="btn btn-add btn-add-connect">
            <a href="user.php" class="btn btn-add btn-cancel">Cancel</a>
        </form>      
<?php
    include('footer.php');
?>