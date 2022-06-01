<!-- <link rel="stylesheet" href="../../css/teacher-admin.css"> -->
<?php include('./header.php');
      include('../config/config.php');
?>
<br><br>
<div class="all-teacher">
    <h1>DANH SÁCH DẠNG NHÀ</h1>
    <br>
    <?php
    if (isset($_SESSION['errorDel'])) {
        echo $_SESSION['errorDel'];
        unset($_SESSION['errorDel']);
    }
    if (isset($_SESSION['successDel'])) {
        echo $_SESSION['successDel'];
        unset($_SESSION['successDel']);
    }
    ?>

<a href="addtypehome.php"><button type="button" class="btn btn-success">Thêm dạng nhà</button></a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">typeHome_id</th>
                <th scope="col">typeHome_name</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * from tb_typehome ";
            $res = mysqli_query($conn, $sql);
            if ($res == true) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $user_id = $row['id_typeHome'];
            ?>
                    <tr>
                        <td><?php echo $row['id_typeHome']; ?></td>
                        <td><?php echo $row['name_typeHome']; ?></td>
                        
                        <td>
                        <a href="updatetypehome.php?typeHome_id=<?php echo $row['id_typeHome']; ?>"><button type="button" class="btn btn-primary">Sửa</button></a>
                        </td>    
                        <td>
                        <a href="deltypehome.php?typeHome_id=<?php echo $row['name_typeHome']; ?>"><button type="button" class="btn btn-danger">Xóa</button></a>
                        </td>   
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
