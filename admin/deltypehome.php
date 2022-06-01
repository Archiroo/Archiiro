<?php session_start() ?>
<?php include('./header.php');
      include('../config/config.php');
?>
<?php
if (isset($_GET['id_typeHome'])) {
    $typehomeid = $_GET['id_typeHome'];
    $sql = "DELETE FROM tb_typehome WHERE id_typeHome = '$typehomeid'";
    $res = mysqli_query($conn, $sql);
    if ($res == true) {
        header('location: typehome.php');
        $_SESSION['successDel'] = "<div class='success'>Xóa thành công!</div>";
    } else {
        header('location:typehome.php');
        $_SESSION['errorDel'] = "<div class='error'>Sinh hiện đang có trong danh sách học, không thể xóa!</div>";
    }
}
?>