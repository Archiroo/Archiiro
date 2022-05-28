<?php
    include('connect_database/connect.php');
    if(isset($_GET['id_user'])){
        $id = $_GET['id_user'];
    }
    $sql = "DELETE From tb_user Where id_user = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res==true){
        // Nếu dúng thì xóa 
        header("Location:user.php");
    }
    else{
        // Không xóa được thì chịu
        header("Location:user.php");
    }
?>