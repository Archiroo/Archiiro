<?php include('./header.php');
      include('../config/config.php');
?>
<h2>ADD Ảnh chi tiết</h2>
<form method="post" enctype="multipart/form-data">
    <?php
        if (isset($_GET['home_id'])) {
            $homeid = $_GET['home_id'];     
        }
        if(isset($_GET['homeImage_id'])){
            $homeimageid = $_GET['homeImage_id'];
        }
    ?>
    <?php
    ?>
    <?php
        $sql5 = "SELECT * FROM tb_homeimage WHERE homeImage_id = '$homeimageid'";
        $res5 = mysqli_query($conn, $sql5);
        $row5 = mysqli_fetch_assoc($res5);
        $count = mysqli_num_rows($res5);
        $homeimage1q = $row5['home_image1'];
        $homeimage2q = $row5['home_image2'];
        $homeimage3q = $row5['home_image3'];
        $homeimage4q = $row5['home_image4'];
        $homeimage5q = $row5['home_image5'];


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
            header('location: home.php');
        } else {
            echo $sql4;
        }
    }
    }

?>
       
    <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-2 py-4">
                    <img id="phongto"  src="../img/<?php echo $row5['home_image1'] ?>" style="width :450px ;height :300px ;">
                </div>
    </div>
    <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-2 py-4">
                    <img id="phongto"  src="../img/<?php echo $row5['home_image2'] ?>" style="width :450px ;height :300px ;">
                </div>
    </div>
    <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-2 py-4">
                    <img id="phongto"  src="../img/<?php echo $row5['home_image3'] ?>" style="width :450px ;height :300px ;">
                </div>
    </div>
    <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-2 py-4">
                    <img id="phongto"  src="../img/<?php echo $row5['home_image4'] ?>" style="width :450px ;height :300px ;">
                </div>
    </div>
    <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-2 py-4">
                    <img id="phongto"  src="../img/<?php echo $row5['home_image5'] ?>" style="width :450px ;height :300px ;">
                </div>
    </div>
</form>
