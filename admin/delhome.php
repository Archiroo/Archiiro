<?php session_start() ?>
<?php include('./header.php');
      include('../config/config.php');
?>
<?php
if (isset($_GET['home_id'])) {
    $homeid = $_GET['home_id'];
    $sql = "DELETE FROM tb_home WHERE home_id = '$homeid'";
    $res = mysqli_query($conn, $sql);
    if ($res == true) {
        header('location: home.php');
        $_SESSION['successDel'] = "<div class='success'>Xóa thành công!</div>";
    } else {
        header('location:home.php');
        
    }
}
?>