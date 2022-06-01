<?php include('./header.php');
      include('../config/config.php');
?>
<h2>ADD Ảnh chi tiết</h2>
<form method="post" enctype="multipart/form-data">
    <?php
        if (isset($_GET['home_id'])) {
            $homeid = $_GET['home_id'];      
        }
    ?>
    <?php
        // thêm điều kiện nếu có id ảnh trong bản home thì mới lấy
        $sql1 = "SELECT * FROM `tb_homeimage` WHERE home_id ='$homeid' ";
        $res1 = mysqli_query($conn,$sql1);
        $row1 = mysqli_fetch_assoc($res1);
        $homeimageid = $row1['homeImage_id'];
    ?>

<?php
    if (isset($_POST['insert-image'])) {
      if($count>=1){
        $_SESSION['dacoanh'] = '<p class="dacoanh">Nhà này đã có ảnh</p>';
        header("Location:home.php");
      }
      else{
        $homeimage1 = $_FILES['home_image1']['name'];
        if ($homeimage != null) {
            $path = "../img/";
            $tmp_name = $_FILES['home_image1']['tmp_name'];
            move_uploaded_file($tmp_name,$path.$homeimage);
        }
        $homeimage2 = $_FILES['home_image2']['name'];
        if ($homeimage != null) {
            $path = "../img/";
            $tmp_name = $_FILES['home_image2']['tmp_name'];
            move_uploaded_file($tmp_name,$path.$homeimage);
        }
        $homeimage3 = $_FILES['home_image3']['name'];
        if ($homeimage != null) {
            $path = "../img/";
            $tmp_name = $_FILES['home_image3']['tmp_name'];
            move_uploaded_file($tmp_name,$path.$homeimage);
        }
        $homeimage4 = $_FILES['home_image4']['name'];
        if ($homeimage != null) {
            $path = "../img/";
            $tmp_name = $_FILES['home_image4']['tmp_name'];
            move_uploaded_file($tmp_name,$path.$homeimage);
        }
        $homeimage5 = $_FILES['home_image5']['name'];
        if ($homeimage != null) {
            $path = "../img/";
            $tmp_name = $_FILES['home_image5']['tmp_name'];
            move_uploaded_file($tmp_name,$path.$homeimage);
        }
        $sql4 = "INSERT INTO `tb_homeimage`(`homeImage_id`, `home_id`, `home_image1`, `home_image2`, `home_image3`, `home_image4`, `home_image5`) VALUES (null,'$homeid','$homeimage1','$homeimage2','$homeimage3','$homeimage4','$homeimage5')";
        $res4 = mysqli_query($conn, $sql4);
        if ($res4 == true) {
            header('location: viewhomeimage.php?homeImage_id=$homeimageid');
        } else {
            echo $sql4;
        }
    }
    }

?>
<?php
     if (isset($_POST['update-image'])) {
          $homeimage1 = $_FILES['home_image1']['name'];
          if ($homeimage != null) {
              $path = "../img/";
              $tmp_name = $_FILES['home_image1']['tmp_name'];
              move_uploaded_file($tmp_name,$path.$homeimage);
          }
          $homeimage2 = $_FILES['home_image2']['name'];
          if ($homeimage != null) {
              $path = "../img/";
              $tmp_name = $_FILES['home_image2']['tmp_name'];
              move_uploaded_file($tmp_name,$path.$homeimage);
          }
          $homeimage3 = $_FILES['home_image3']['name'];
          if ($homeimage != null) {
              $path = "../img/";
              $tmp_name = $_FILES['home_image3']['tmp_name'];
              move_uploaded_file($tmp_name,$path.$homeimage);
          }
          $homeimage4 = $_FILES['home_image4']['name'];
          if ($homeimage != null) {
              $path = "../img/";
              $tmp_name = $_FILES['home_image4']['tmp_name'];
              move_uploaded_file($tmp_name,$path.$homeimage);
          }
          $homeimage5 = $_FILES['home_image5']['name'];
          if ($homeimage != null) {
              $path = "../img/";
              $tmp_name = $_FILES['home_image5']['tmp_name'];
              move_uploaded_file($tmp_name,$path.$homeimage);
          }
          $sql5 = "UPDATE `tb_homeimage` SET `home_image1`='$homeimage1',`home_image2`='$homeimage2',`home_image3`='$homeimage3',`home_image4`='$homeimage4',`home_image5`='$homeimage5' WHERE homeImage_id = $homeimageid ";
          $res5 = mysqli_query($conn, $sql5);
          if ($res5 == true) {
              header('location: home.php');
          } else {
              echo $sql5;
          }
      }
      
  
?>
   
    <div class="form-group">
        <label for="homeimage" class="col-sm-2 col-form-label">Hình ảnh chi tiết 1</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="homeimage" name="home_image1">
            </div>
    </div>
    <div class="form-group">
        <label for="homeimage" class="col-sm-2 col-form-label">Hình ảnh chi tiết 2</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="homeimage" name="home_image2">
            </div>
    </div>
    <div class="form-group">
        <label for="homeimage" class="col-sm-2 col-form-label">Hình ảnh chi tiết 3</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="homeimage" name="home_image3">
            </div>
    </div>
    <div class="form-group">
        <label for="homeimage" class="col-sm-2 col-form-label">Hình ảnh chi tiết 4</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="homeimage" name="home_image4">
            </div>
    </div>
    <div class="form-group">
        <label for="homeimage" class="col-sm-2 col-form-label">Hình ảnh chi tiết 5</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="homeimage" name="home_image5">
            </div>
    </div>
  

    <br>

    <div ><button name="insert-image" type="submit" class="btn btn btn-primary" style="">Thêm ảnh</button></div>
    <div > <button name="update-image" type="submit" class="btn btn btn-primary" style="">Cập nhật ảnh</button></div>
    <div > <a href="viewhomeimage.php?homeImage_id=<?php echo $homeimageid; ?>"><button name="view-image" type="button" class="btn btn btn-primary" style="">Xem trước ảnh</button></a></div>
    
</form>
