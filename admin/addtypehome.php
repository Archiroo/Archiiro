<?php include('./header.php');
      include('../config/config.php');
?>
<h2>ADD DẠNG NHÀ</h2>
<form method="post">
    <?php
    if (isset($_POST['add'])) {
        $typehomeid = $_POST['id_typeHome'];
        $typehomename = $_POST['name_typeHome'];
        $sql = "INSERT INTO tb_typehome(id_typeHome, name_typeHome) 
                                    VALUES(null,N'$typehomename')";
        $res = mysqli_query($conn, $sql);
        if ($res == true) {
            header('location: typehome.php');
        } else {
            echo $sql;
        }
    }
    ?>
    <div class="form-group">
        <label for="typehomename">Tên loại nhà:</label>
        <input type="text" class="form-control" id="typehomename" placeholder="Enter name" name="name_typeHome">
    </div>
    <br>
    <button name="add" type="submit" class="btn btn-success">ADD</button>
</form>
<?php include('./footer.php') ?>