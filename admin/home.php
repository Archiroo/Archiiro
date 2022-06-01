<!-- <link rel="stylesheet" href="../../css/teacher-admin.css"> -->
<?php include('header.php');
      include('../config/config.php');
?>
<br><br>
<div class="all-teacher">
    <h1>DANH SÁCH NHÀ</h1>
    <br>
    <?php
    if (isset($_SESSION['dacoanh'])) {
        echo $_SESSION['dacoanh'];
        unset($_SESSION['dacoanh']);
    }
    ?>

<a href="addhome.php"><button type="button" class="btn btn-success">Thêm nhà</button></a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">home_id</th>
                <th scope="col">typeHome_id</th>
                <th scope="col">home_name</th>
                <th scope="col">home_area</th>
                <th scope="col">Chi tiết</th>
                <th scope="col">Thêm ảnh chi tiết</th>
                <th scope="col">Xóa</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * from tb_home ";
            $res = mysqli_query($conn, $sql);
            if ($res == true) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $home_id = $row['id_home'];
            ?>
                    <tr>
                        <td><?php echo $row['id_home']; ?></td>
                        <td><?php 
                        $typehomeid =$row['id_typeHome'];
                        $sql1 = "SELECT * FROM tb_typehome WHERE id_typeHome = '$typehomeid'";
                        $res1 = mysqli_query($conn, $sql1);
                        $row1 = mysqli_fetch_assoc($res1);
                        echo $row1['name_typeHome'];
                         ?>
                        </td>
                        <td><?php echo $row['name_home']; ?></td>
                        <td><?php echo $row['area_home']; ?></td>
                        <td>
                        <a href="updatehome.php?id_home=<?php echo $row['id_home']; ?>"><button type="button" class="btn btn-primary">Chi tiết và Cập nhật</button></a>
                        </td>    
                        <td>
                        <a href="homeimage.php?id_home=<?php echo $row['id_home']; ?>"><button type="button" class="btn btn-warning">Hình ảnh chi tiết</button></a>
                        </td>   
                        <td>
                        <a href="delhome.php?id_home=<?php echo $row['id_home']; ?>"><button type="button" class="btn btn-danger">Xóa</button></a>
                        </td> 
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
