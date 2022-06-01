<?php include('./header.php');
      include('../config/config.php');
?>
<h2>ADD NHÀ</h2>
<form method="post" enctype="multipart/form-data">
    <?php
    if (isset($_POST['add'])) {
        $typehomeid = $_POST['id_typeHome'];
        $homename = $_POST['name_home'];
        $price = $_POST['price'];
        $priceSale = $_POST['priceSale'];
        $homearea = $_POST['area_home'];
        $homeaddress = $_POST['address_home'];
        $numberroom = $_POST['numberRoom'];
        $numberbedroom = $_POST['numberBedRoom'];
        $numberbathroom = $_POST['numberBathRoom'];
        $desciption = $_POST['desciption'];
        $image = $_FILES['image']['name'];
        if ($image != null) {
            $path = "../img/";
            $tmp_name = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmp_name,$path.$image);
        }
        $image2 = $_FILES['image2']['name'];
        if ($image != null) {
            $path = "../img/";
            $tmp_name = $_FILES['image2']['tmp_name'];
            move_uploaded_file($tmp_name,$path.$image);
        }
        $image3 = $_FILES['image3']['name'];
        if ($image != null) {
            $path = "../img/";
            $tmp_name = $_FILES['image3']['tmp_name'];
            move_uploaded_file($tmp_name,$path.$image);
        }
        $image4 = $_FILES['image4']['name'];
        if ($image != null) {
            $path = "../img/";
            $tmp_name = $_FILES['image4']['tmp_name'];
            move_uploaded_file($tmp_name,$path.$image);
        }
        $image5 = $_FILES['image5']['name'];
        if ($image != null) {
            $path = "../img/";
            $tmp_name = $_FILES['image5']['tmp_name'];
            move_uploaded_file($tmp_name,$path.$image);
        }
        $saledate  = $_POST['saleDate'];
        $status = $_POST['status'];


        $sql = "INSERT INTO `tb_home`(`id_home`, `id_typeHome`, `name_home`, `price`, `priceSale`, `area_home`, `address_home`, `numberRoom`, `numberBedRoom`, `numberBathRoom`, `description`, `image`, `image2`, `image3`, `image4`, `image5`, `saleDate`, `status`) VALUES
        (null,N'$typehomeid',N'$homename','$price','$priceSale',N'$homearea',N'$homeaddress',N'$numberroom',N'$numberbedroom',N'$numberbathroom',N'$desciption',N'$image',N'$image2',N'$image3',N'$image4',N'$image5',N'$saledate','$status')";
 
    $res = mysqli_query($conn, $sql);
       if ($res == true) {
         header('location: home.php');
            echo $sql;
        } else {
            echo $sql;
        }
    }
    ?>
    <?php
        
        // $homeid = $_GET['home_id']

    ?>
    <div class="form-group">
        <label style="display: inline" for="idMH" class="col-sm-2 col-form-label">Tên loại nhà:</label>
        <div class="col-sm-10">
            <select name="id_typeHome">
                <?php
                $sql1 = "SELECT * FROM tb_typehome";
                $result1 = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($result1) > 0) {
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        echo '<option value="' . $row1['id_typeHome'] . '">' . $row1['name_typeHome'] . '</option>';
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="homename">Tên nhà:</label>
        <input type="text" class="form-control" id="homename" placeholder="Nhập tên nhà" name="name_home">
    </div>
    <div class="form-group">
        <label for="homearea">Giá bán:</label>
        <input type="text" class="form-control" id="homearea" placeholder="Nhập giá bán" name="price">
    </div>
    <div class="form-group">
        <label for="homearea">Giá Sale:</label>
        <input type="text" class="form-control" id="homearea" placeholder="Nhập giá giảm" name="priceSale">
    </div>
    <div class="form-group">
        <label for="homearea">Khu vực:</label>
        <input type="text" class="form-control" id="homearea" placeholder="Nhập khu vực" name="area_home">
    </div>
    <div class="form-group">
        <label for="homeaddress">Địa chỉ:</label>
        <input type="text" class="form-control" id="homeaddress" placeholder="Nhập địa chỉ" name="address_home">
    </div>
    <div class="form-group">
        <label for="homenumberroom">Tổng số phòng:</label>
        <input type="text" class="form-control" id="homenumberroom" placeholder="Nhập tổng số phòng" name="numberRoom">
    </div>
    <div class="form-group">
        <label for="homenumberbedroom">Số phòng ngủ:</label>
        <input type="text" class="form-control" id="homenumberbedroom" placeholder="Nhập số phòng ngủ" name="numberBedRoom">
    </div>
    <div class="form-group">
        <label for="homenumberbathroom">Số phòng tắm:</label>
        <input type="text" class="form-control" id="homenumberbathroom" placeholder="Nhập số phòng tắm" name="numberBathRoom">
    </div>
    <div class="form-group">
        <label for="homedesciption">Mô tả:</label>
        <input type="text" class="form-control" id="homedesciption" placeholder="Mô tả" name="desciption">
    </div>
    <div class="form-group">
        <label for="homeimage" class="col-sm-2 col-form-label">Hình ảnh minh họa</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="homeimage" name="image">
            </div>
    </div>
    <div class="form-group">
        <label for="homeimage" class="col-sm-2 col-form-label">Hình ảnh chi tiết 2</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="homeimage" name="image2">
            </div>
    </div>
    <div class="form-group">
        <label for="homeimage" class="col-sm-2 col-form-label">Hình ảnh chi tiết 3</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="homeimage" name="image3">
            </div>
    </div>
    <div class="form-group">
        <label for="homeimage" class="col-sm-2 col-form-label">Hình ảnh chi tiết 4</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="homeimage" name="image4">
            </div>
    </div>
    <div class="form-group">
        <label for="homeimage" class="col-sm-2 col-form-label">Hình ảnh chi tiết 5</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="homeimage" name="image5">
            </div>
    </div>

    <div class="form-group">
        <label for="homesaledate">Ngày bán:</label>
        <input type="date" class="form-control" id="homesaledate" placeholder="Nhập ngày bán" name="saleDate">
    </div>
    <div class="form-group">
        <label for="homestatus">Trạng thái:</label>
        <input type="text" class="form-control" id="homestatus" placeholder="Trạng thái" name="status">
    </div>

    <br>
    <button name="add" type="submit" class="btn btn-success" >ADD</button>
</form>
