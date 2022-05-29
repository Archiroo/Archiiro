<?php
    include('header.php');
?>
    <main>
        <form action="" method="POST" class="register" enctype="multipart/form-data">
            <?php
                if(isset($_POST['submit'])){
                    $id_typeHome = $_POST['id_typeHome'];
                    $nameHome = $_POST['nameHome'];
                    $priceHome = $_POST['priceHome'];
                    $priceSale = $_POST['priceSale'];
                    $area = $_POST['areaHome'];
                    $address = $_POST['address'];
                    $room = $_POST['numberRoom'];
                    $bed = $_POST['numberBedRoom'];
                    $bath = $_POST['numberBathRoom'];
                    $des =  $_POST['descripton'];
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
                        $image_name = "home_default.jpg";
                    }

                    $sql1 = "INSERT INTO tb_home(id_typeHome, name_home, price, priceSale, area_home, address_home, numberRoom, numberBedRoom, numberBathRoom, description, image, status)
                            VALUES($id_typeHome, '$nameHome', '$priceHome', '$priceSale', '$area','$address',  '$room', '$bed', '$bath', '$des', '$image_name', 1)";

                    $res1 = mysqli_query($conn, $sql1);
                    if($res1 == TRUE){
                        header("Location:home.php");
                    }
                    else{
                        header("Location:add_home.php");
                    }
                }
            ?>
            <div class="form-group">
                <span>Loại căn hộ</span>
                <select name="id_typeHome" style="display:block;">
                    <?php
                    // Tìm ra nhân viên và là người dùng thêm ở giao diện admin
                    $sql = "SELECT * FROM tb_typeHome WHERE status = 1";
                    $res = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($res)) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo '<option value="' . $row['id_typeHome'] . '">' . $row['name_typeHome'] . '</option>';
                        }
                    }
                    ?>
                </select>                
            </div>
            <div class="form-group first-span">
                <span>Tên căn hộ</span>
                <input type="text" class="form-control" name="nameHome">
            </div>
            <div class="form-group">
                <span>Giá</span>
                <input type="text" class="form-control" name="priceHome">
            </div>
            <div class="form-group">
                <span>Giá sale</span>
                <input type="text" class="form-control" name="priceSale">
            </div>
            
            <div class="form-group first-span">
                <span>Diện tích</span>
                <input type="text" class="form-control" name="areaHome">
            </div>
            <div class="form-group">
                <span>Địa chỉ</span>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group first-span">
                <span>Số phòng khách</span>
                <select name="numberRoom" style="display:block;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div> 
            <div class="form-group first-span">
                <span>Số phòng ngủ</span>
                <select name="numberBedRoom" style="display:block;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>  
            <div class="form-group first-span">
                <span>Số phòng tắm</span>
                <select name="numberBathRoom" style="display:block;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>  
            <div class="form-group">
                <span>Mô tả</span>
                <input type="text" class="form-control" name="descripton">
            </div>
            <div class="gender">
                <span>Hình ảnh</span>
                <br>
                <input type="file" name="image" class="file">
            </div>

            <input type="submit" name="submit" value="Add user" class="btn btn-add btn-add-connect">
            <a href="user.php" class="btn btn-add btn-cancel">Cancel</a>
        </form>      
<?php
    include('footer.php');
?>