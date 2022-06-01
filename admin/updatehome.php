
<?php include('./header.php');
      include('../config/config.php');
?>
<?php
if (isset($_GET['home_id'])) {
    $homeid = $_GET['home_id'];
    $sql1 = "SELECT * FROM tb_home WHERE home_id = '$homeid'";
    $res1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($res1);
    $typehomeid = $row1['typeHome_id'];
    $homename = $row1['home_name'];
    $homearea = $row1['home_area'];
    $homeaddress = $row1['home_address'];
    $homenumberroom = $row1['home_numberRoom'];
    $homenumberbedroom = $row1['home_numberBedRoom'];
    $homenumberbathroom = $row1['home_numberBathRoom'];
    $homeimage = $_FILES['home_image']['name'];
    if ($homeimage != null) {
        $path = "../img/";
        $tmp_name = $_FILES['home_image']['tmp_name'];
        move_uploaded_file($tmp_name,$path.$homeimage);
    }
    $homedesciption = $row1['home_desciption'];
    $homesaledate = $row1['home_saleDate'];
    $homestatus = $row1['home_status'];
    $homeimageq = $row1['home_image'];

}
?>

<h2>UPDATE DẠNG NHÀ</h2>
<form method="post" enctype="multipart/form-data">
    <?php
    if (isset($_POST['add'])) {
        $typehomename = $_POST['typeHome_name'];
        $sql3 = "UPDATE `tb_home` SET `typeHome_id`='$typehomeid',`home_name`=N'$homename',`home_area`='$homearea',`home_address`='$homeaddress',`home_numberRoom`='$homenumberroom',`home_numberBedRoom`='$homenumberbedroom',`home_numberBathRoom`='$homenumberbathroom',`home_desciption`=N'$homedesciption',`home_image`='$homeimage',`home_saleDate`='$homesaledate',`home_status`='$homestatus'  WHERE home_id = '$homeid'";
        $res3 = mysqli_query($conn, $sql3);
        if ($res3 == true) {
            header('location: home.php');
        } else {
            echo $sql3;
        }
    }
    ?>
       
   
   <div class="form-group">
        <label for="nameMH">typehome_name:</label>
        <?php
            $sql2 = "SELECT * FROM tb_typehome WHERE typeHome_id = '$typehomeid'";
            $res2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($res2);
            $typehomename = $row2['typeHome_name'];
        ?>
        <input type="text" class="form-control" id="typeHome_name" placeholder="Enter name" name="typeHome_name" readonly value="<?php echo $typehomename ?>">
    </div>
    <div class="form-group">
        <label for="nameMH">home_name:</label>
        <input type="text" class="form-control" id="typeHome_name" placeholder="Enter name" name="home_name"  value="<?php echo $homename ?>">
    </div>
    <div class="form-group">
        <label for="nameMH">price:</label>
        <input type="text" class="form-control" id="typeHome_name" placeholder="Enter name" name="price"  value="<?php echo $price ?>">
    </div>
    <div class="form-group">
        <label for="nameMH">priceSale:</label>
        <input type="text" class="form-control" id="typeHome_name" placeholder="Enter name" name="priceSale"  value="<?php echo $pricesale ?>">
    </div>
    <div class="form-group">
        <label for="nameMH">home_area:</label>
        <input type="text" class="form-control" id="typeHome_name" placeholder="Enter name" name="home_area"  value="<?php echo $homearea ?>">
    </div>
    <div class="form-group">
        <label for="nameMH">home_address:</label>
        <input type="text" class="form-control" id="typeHome_name" placeholder="Enter name" name="home_address"  value="<?php echo $homeaddress?>">
    </div>
    <div class="form-group">
        <label for="nameMH">numberRoom:</label>
        <input type="text" class="form-control" id="typeHome_name" placeholder="Enter name" name="numberRoom"  value="<?php echo $homenumberroom?>">
    </div>
    <div class="form-group">
        <label for="nameMH">numberBedRoom:</label>
        <input type="text" class="form-control" id="typeHome_name" placeholder="Enter name" name="numberBedRoom"  value="<?php echo $homenumberbedroom?>">
    </div>
    <div class="form-group">
        <label for="nameMH">numberBathRoom:</label>
        <input type="text" class="form-control" id="typeHome_name" placeholder="Enter name" name="numberBathRoom"  value="<?php echo $homenumberbathroom?>">
    </div>
    <div class="form-group">
        <label for="homeimage" class="col-sm-2 col-form-label">Hình ảnh minh họa</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="homeimage" name="home_image">
            </div>
    </div>
    <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-2 py-4">
                    <img id="phongto"  src="../img/<?php echo $row1['home_image'] ?>" style="width :450px ;height :300px ;">
                </div>
    </div>
 
    
    <div class="form-group">
        <label for="nameMH">home_desciption:</label>
        <input type="text" class="form-control" id="typeHome_name" placeholder="Enter name" name="home_desciption"  value="<?php echo $homedesciption?>">
    </div>
    <div class="form-group">
        <label for="nameMH">saleDate:</label>
        <input type="text" class="form-control" id="typeHome_name" placeholder="Enter name" name="saleDate"  value="<?php echo $homesaledate?>">
    </div>
    <div class="form-group">
        <label for="nameMH">status:</label>
        <input type="text" class="form-control" id="typeHome_name" placeholder="Enter name" name="status"  value="<?php echo $homestatus?>">
    </div>

    <br>
    <button name="add" type="submit" class="btn btn-success">UPDATE</button>
</form>
<?php include('./footer.php') ?>