<?php
    include('connect_database/connect.php');
    if(isset($_GET['id_contract'])){
        $id = $_GET['id_contract'];
    }
    $sql = "Update tb_contract SET status = 1 Where id_contract = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res==true){
        header("Location:index_checkContract.php");
    }
    else{
        header("Location:index_checkContract.php");
    }
?>