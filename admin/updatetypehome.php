
<?php include('./header.php');
      include('../config/config.php');
?>
<?php
if (isset($_GET['typeHome_id'])) {
    $typehomeid = $_GET['typeHome_id'];
    $sql1 = "SELECT * FROM tb_typehome WHERE typeHome_id = '$typehomeid'";
    $res1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($res1);
    $typehomename = $row1['typeHome_name'];

}
?>
<h2>UPDATE DẠNG NHÀ</h2>
<form method="post">
    <?php
    if (isset($_POST['add'])) {
        $typehomename = $_POST['typeHome_name'];
        $sql2 = "UPDATE tb_typehome
            SET typeHome_name = N'$typehomename'                   
            WHERE typeHome_id = '$typehomeid'";
        $res2 = mysqli_query($conn, $sql2);
        if ($res2 == true) {
            header('location: typehome.php');
        } else {
            echo $sql2;
        }
    }
    ?>
    <div class="form-group">
        <label for="nameMH">typehome_id:</label>
        <input type="text" class="form-control" id="typeHome_id" readonly placeholder="Enter name" name="typeHome_id" value="<?php echo $typehomeid ?>">
    </div>

    <div class="form-group">
        <label for="nameMH">typeHome_name:</label>
        <input type="text" class="form-control" id="typeHome_name" placeholder="Enter name" name="typeHome_name" value="<?php echo $typehomename ?>">
    </div>

    <br>
    <button name="add" type="submit" class="btn btn-success">UPDATE</button>
</form>
<?php include('./footer.php') ?>