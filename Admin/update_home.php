<?php
    include('header.php');
?>
    <main>
        <?php
            if(isset($_GET['id_home']))
            {
                $id_home = $_GET['id_home'];
            }
            $sql = "SELECT * FROM tb_typeHome, tb_home Where tb_typeHome.id_typeHome = tb_home.id_typeHome and tb_typeHome.status = 1 and tb_home.status = 1 and id_home = $id_home";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if($count==1)
            {
                $row = mysqli_fetch_assoc($res);
                $id_typeHome = $row['id_typeHome'];
                $type_nameHome = $row['name_typeHome'];
                $name_home = $row['name_home'];
                $price = $row['price'];
                $priceSale = $row['priceSale'];
                $area = $row['area_home'];
                $address = $row['address_home'];
                $room = $row['numberRoom'];
                $bedRoom = $row['numberBedRoom'];
                $bathRoom = $row['numberBathRoom'];   
                $des = $row['description'];
                $image = $row['image'];
            }
            
        ?>
        <!-- CODE PHP -->

        <form action="" method="POST" class="register">
            <?php
                if(isset($_POST['submit']))
                {
                    $id_typeHome1 = $_POST['id_typeHome'];
                    $name_home1 = $_POST['nameHome'];
                    $price1 = $_POST['price'];
                    $priceSale1 = $_POST['priceSale'];
                    $area1 = $_POST['area'];
                    $address1 = $_POST['address'];
                    $room1 = $_POST['room'];
                    $bedRoom1 = $_POST['bedRoom'];
                    $bathRoom1 = $_POST['bathRoom'];   
                    $des1 = $_POST['description'];
                    $descrp1 = $_POST['descrp']; 
                    $image1 = $_POST['image']; 
                    
                    $sql2 = "UPDATE tb_home SET id_typeHome = $id_typeHome1, name_home = '$name_home1', price = '$price1', priceSale = '$priceSale1', area_home = '$area1', address_home = '$address1', 
                            numberRoom = '$room1', numberBedRoom = '$bedRoom1', numberBathRoom = '$bathRoom1', description = '$descrp1', image = '$image1' WHERE id_home = $id_home ";
                    $res2 = mysqli_query($conn, $sql2);
                    if($res2 == true){
                        header("Location:home.php");
                    }
                    else{
                        header("Location:update_home.php");
                    }
                }
            ?>
            <div class="form-group first-span">
                <span>ID</span>
                <input type="text" class="form-control read" readonly value="<?php echo $id_home;?>">
            </div>
            <div class="form-group">
                <span>Loại căn hộ</span>
                <select name="id_typeHome" style="display:block;">
                    <?php
                    $sql3 = "SELECT * FROM tb_typeHome WHERE status = 1";
                    $res3 = mysqli_query($conn, $sql3);
                    if (mysqli_num_rows($res3)) {
                        while ($row3 = mysqli_fetch_assoc($res3)) {
                            echo '<option value="' . $row3['id_typeHome'] . '">' . $row3['name_typeHome'] . '</option>';
                        }
                    }
                    ?>
                </select>                
            </div>
            <div class="form-group">
                <span>Tên căn hộ</span>
                <input type="text" class="form-control" name="nameHome"  value="<?php echo $name_home?>">
            </div>
            <div class="form-group first-span">
                <span>Giá</span>
                <input type="text" class="form-control read" name="price" value="<?php echo $price?>">
            </div>
            <div class="form-group first-span">
                <span>Giảm Giá</span>
                <input type="text" class="form-control read" name="priceSale" value="<?php echo $priceSale?>">
            </div>
            <div class="form-group">
                <span>Diện tích</span>
                <input type="text" class="form-control read" name="area" value="<?php echo $area?>">
            </div>
            <div class="form-group">
                <span>Địa chỉ</span>
                <input type="text" class="form-control read" name="address" value="<?php echo $address?>">
            </div>
            <div class="form-group">
                <span>Số phòng khách</span>
                <input type="text" class="form-control read" name="room" value="<?php echo $room?>">
            </div>
            <div class="form-group">
                <span>Số phòng ngủ</span>
                <input type="text" class="form-control read" name="bedRoom" value="<?php echo $bedRoom?>">
            </div>
            <div class="form-group">
                <span>Số phòng tắm</span>
                <input type="text" class="form-control read" name="bathRoom" value="<?php echo $bathRoom?>">
            </div>
            <div class="form-group">
                <span>Mô tả</span>
                <input type="text" class="form-control read" name="descrp" value="<?php echo $des?>">
            </div>
            <div class="gender">
                <span>Image</span>
                <br>
                <input type="file" name="image" class="file" value="<?php echo $image; ?>">
            </div>  
            <input type="submit" name="submit" value="Update user" class="btn btn-add btn-add-connect">
            <a href="user.php" class="btn btn-add btn-cancel">Cancel</a>
            <div style="margin-bottom: 5rem;">
            </div>
        </form>
<?php
    include('footer.php');
?>
