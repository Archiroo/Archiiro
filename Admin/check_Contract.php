<?php
    include('connect_database/connect.php');
    if(isset($_GET['id_contract'])){
        $id = $_GET['id_contract'];
    }
    $sql = "Update tb_contract SET status = 1 Where id_contract = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res==true){
        // Nếu dúng thì xóa 
        header("Location:index_checkContract.php");
    }
    else{
        // Không xóa được thì chịu
        header("Location:index_checkContract.php");
    }
?>